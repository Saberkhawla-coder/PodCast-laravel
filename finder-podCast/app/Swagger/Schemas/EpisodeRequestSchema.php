<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="EpisodeRequestSchema",
 *     type="object",
 *     title="Episode Request"
 * )
 * @OA\Property(property="title", type="string", example="Episode 1: AI Revolution")
 * @OA\Property(property="description", type="string", example="Discussion about AI trends.")
 * @OA\Property(property="audio_path", type="string", example="/storage/episodes/audio1.mp3")
 */
class EpisodeRequestSchema {}
