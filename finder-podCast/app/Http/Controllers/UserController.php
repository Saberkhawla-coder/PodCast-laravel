<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\validateRequestUser;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use PDO;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    //
    public function register(validateRequestUser $request){
      
           
            $user=User::create($request->validated());
            return response()->json(['message'=>'User registered successfully','users'=>$user] ,201);
       
      
    }
   public function login(Request $request)
{
    
        if (!Auth::attempt($request->only('email'))) {
            return response()->json(['message' => 'invalid email']);
        }
        // if (!Auth::attempt($request->only('password'))) {
        //     return response()->json(['message' => 'Invalid password ']);
        // }
       

        $user = User::where('email', $request->email)->firstOrFail();
        $token = $user->createToken('auth_token');

        return response()->json([
            'message' => 'Login success',
            'user' => $user,
            'token' => $token
        ]);

    
}

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message'=>'logout Successfuly']);   
    }

    public function index()
    {
        Gate::authorize('viewAny', User::class);

        $users = User::all();
        return response()->json(['users' => $users]);
    }

    public function show(User $user)
    {
        Gate::authorize('view', $user);

        return response()->json(['user' => $user]);
    }

    public function store(ValidateRequestUser $request)
    {
        Gate::authorize('create', User::class);

        $user = User::create($request->validated());
        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        try{
            Gate::authorize('update', $user);

            $data = $request->validated();

            if (auth()->user()->role !== 'admin') {
                $data['role'] = $user->role;
            }

            $user->update($data);

            return response()->json([
                'message' => 'User updated successfully',
                'user' => $user
            ]);
        }catch(\Exception $e){
            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }
      

    }

    public function destroy(User $user)
    {
            try {
            Gate::authorize('delete', $user);

            $user->delete();

            return response()->json(['message' => 'User deleted successfully']);

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage()
            ], 400);
        }

    }
   

}
