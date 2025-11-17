<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequestEpisode;
use App\Http\Requests\ValidateRequestEpisode;
use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EpisodeController extends Controller
{
    public function index(Podcast $podcast)
    {
        
        $episodes = Episode::where('podcast_id', $podcast->id)->get();
        return response()->json(['episodes' => $episodes]);
    }

    public function show(Episode $episode)
    {
        Gate::authorize('view', $episode);
        return response()->json(['episode' => $episode]);
    }

    public function store(ValidateRequestEpisode $request, Podcast $podcast)
{
    Gate::authorize('create', Episode::class);

    if ($request->hasFile('audio_path')) {
            $audioPath = $request->file('audio_path')->store('episodes', 'public');
        } else {
            $audioPath = null;
        }

        $episode = Episode::create([
            ...$request->validated(),
            'podcast_id' => $podcast->id,
            'user_id' => auth()->id(),
            'audio_path' => $audioPath,
        ]);

    return response()->json([
        'message' => 'Episode created successfully',
        'episode' => $episode
    ]);
}


   public function update(UpdateRequestEpisode $request, Episode $episode)
{
    Gate::authorize('update', $episode);

    $data= $request->validated();

    if ($request->hasFile('audio_path')) {
        $data['audio_path']  = $request->file('audio_path')->store('episodes', 'public');
    } else {
         $data['audio_path']  = $episode->audio_path; 
    }

 
    $episode->update($data);

    return response()->json(['message' => 'Episode updated successfully']);
}

    public function destroy(Episode $episode)
    {
        Gate::authorize('delete', $episode);
        
        $episode->delete();
        return response()->json(['message' => 'Episode deleted successfully']);
    }
}
