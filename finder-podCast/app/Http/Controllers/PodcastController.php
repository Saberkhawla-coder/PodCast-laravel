<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestPodcast;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    public function index()
    {
        $podcasts = Podcast::all();
        return response()->json(['podcasts' => $podcasts]);
    }

    public function show(Podcast $podcast)
    {
        $this->authorize('view', $podcast);
        return response()->json(['podcast' => $podcast], 200);
    }

    public function store(ValidateRequestPodcast $request)
{
    $this->authorize('create', Podcast::class);

   
    if ($request->hasFile('image_path')) {
        $path = $request->file('image_path')->store('podcasts', 'public');
    } else {
        $path = $request->image_path; 
    }

    $podcast = Podcast::create(array_merge(
        $request->validated(),
        [
            'user_id' => auth()->id(),
            'image_path' => $path,
        ]
    ));

    return response()->json([
        'message' => 'Podcast created successfully',
        'podcast' => $podcast
    ]);
}


    public function update(ValidateRequestPodcast $request, Podcast $podcast)
    {
        $this->authorize('update', $podcast);

        $podcast->update($request->validated());

        return response()->json([
            'message' => 'Podcast updated successfully',
            'podcast' => $podcast
        ]);
    }

    public function destroy(Podcast $podcast)
    {
        $this->authorize('delete', $podcast);

        $podcast->delete();
        return response()->json(['message' => 'Podcast deleted successfully']);
    }
}
