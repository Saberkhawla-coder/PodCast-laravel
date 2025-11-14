<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateRequestEpisode;
use App\Models\Episode;
use App\Models\Podcast;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function index(Podcast $podcast)
    {
        // Tous les utilisateurs peuvent voir les épisodes d’un podcast
        $episodes = Episode::where('podcast_id', $podcast->id)->get();
        return response()->json(['episodes' => $episodes]);
    }

    public function show(Episode $episode)
    {
        $this->authorize('view', $episode);
        return response()->json(['episode' => $episode]);
    }

    public function store(ValidateRequestEpisode $request, Podcast $podcast)
    {
        $this->authorize('create', Episode::class);

        $episode = Episode::create([
            ...$request->validated(),
            'podcast_id' => $podcast->id,
            'user_id' => auth()->id(),
        ]);

        return response()->json([
            'message' => 'Episode created successfully',
            'episode' => $episode
        ]);
    }

    public function update(ValidateRequestEpisode $request, Episode $episode)
    {
        $this->authorize('update', $episode);

        $episode->update($request->validated());
        return response()->json([
            'message' => 'Episode updated successfully',
            'episode' => $episode
        ]);
    }

    public function destroy(Episode $episode)
    {
        $this->authorize('delete', $episode);

        $episode->delete();
        return response()->json(['message' => 'Episode deleted successfully']);
    }
}
