<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\validateRequestUser;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    //
    public function register(validateRequestUser $request){
        try{
           
            $user=User::create($request->validated());
            return response()->json(['message'=>'User registered successfully','users'=>$user] ,201);
        }catch( \Exception $e){
            return response()->json(['error' => 'Registration failed','message'=>$e->getMessage()] ,500);
        }
      
    }
   public function login(Request $request)
{
    try {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid password or email'], 401);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Login success',
            'user' => $user,
            'token' => $token
        ]);

    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Login failed',
            'message' => $e->getMessage()
        ], 500);
    }
}

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message'=>'logout Successfuly']);   
    }

    public function index()
    {
        $this->authorize('viewAny', User::class);

        $users = User::all();
        return response()->json(['users' => $users]);
    }

    public function show(User $user)
    {
        $this->authorize('view', $user);

        return response()->json(['user' => $user]);
    }

    public function store(ValidateRequestUser $request)
    {
        $this->authorize('create', User::class);

        $user = User::create($request->validated());
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $this->authorize('update', $user);
         if (auth()->user()->role !== 'admin') {
            $request->merge(['role' => $user->role]);
        }   

        $user->update($request->validated());
        return response()->json([
            'message' => 'User updated successfully',
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $this->authorize('delete', $user);

        $user->delete();
        return response()->json(['message' => 'User deleted successfully']);
    }
   

}
