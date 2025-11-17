<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequestPodcasts;
use App\Http\Requests\ValidateRequestPodcast;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();
        return response()->json(['podcasts' => $podcasts]);
    }

    public function show(Podcast $podcast)
    {
        Gate::authorize('view', $podcast);
        return response()->json(['podcast' => $podcast], 200);
    }

    public function store(ValidateRequestPodcast $request)
{
   Gate::authorize('create', Podcast::class);

   $data=$request->validated();
    if ($request->hasFile('image_path')) {
       $data['image_path'] = $request->file('image_path')->store('podcasts', 'public');
       $data['user_id']=Auth::id();
    } else {
        $data['image_path'] = $request->image_path; 
    }

    $podcast = Podcast::create($data);

    return response()->json([
        'message' => 'Podcast created successfully',
        'podcast' => $podcast
    ]);
}





    public function update(UpdateRequestPodcasts $request, Podcast $podcast)
    {
        Gate::authorize('update', $podcast);
        $data=$request->validated();
        if($request->hasFile("image_path")){
            $data['image_path']=$request->file('image_path')->store('podcasts','public');
        }else{
            $data['image_path']=$podcast->image_path;
        }
        $podcast->update( $data);

        return response()->json([
            'message' => 'Podcast updated successfully',
            'podcast' => $podcast
        ]);
        

    }

    public function destroy(Podcast $podcast)
    {
        Gate::authorize('delete', $podcast);

        $podcast->delete();
        return response()->json(['message' => 'Podcast deleted successfully']);
    }
}
