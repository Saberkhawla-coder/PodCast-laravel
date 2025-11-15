<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="EpisodeSchema",
 *     type="object",
 *     title="Episode Resource"
 * )
 * @OA\Property(property="id", type="integer", example=50)
 * @OA\Property(property="podcast_id", type="integer", example=10)
 * @OA\Property(property="title", type="string", example="Episode 1: AI Revolution")
 * @OA\Property(property="description", type="string", example="Discussion about AI trends.")
 * @OA\Property(property="audio_path", type="string", example="/storage/episodes/audio1.mp3")
 * @OA\Property(property="is_published", type="boolean", example=true)
 * @OA\Property(property="created_at", type="string", example="2024-10-20T14:32:00Z")
 * @OA\Property(property="updated_at", type="string", example="2024-10-20T14:32:00Z")
 */
class EpisodeSchema {}
