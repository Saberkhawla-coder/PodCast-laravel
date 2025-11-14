<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="Podcast",
 *     type="object",
 *     title="Podcast Resource"
 * )
 *
 * @OA\Property(property="id", type="integer", example=10)
 * @OA\Property(property="user_id", type="integer", example=1)
 * @OA\Property(property="title", type="string", example="Tech Talks")
 * @OA\Property(property="description", type="string", example="Podcast about technology news.")
 * @OA\Property(property="image_path", type="string", example="/storage/podcasts/img1.png")
 * @OA\Property(property="genre", type="string", example="Technology")
 * @OA\Property(property="is_published", type="boolean", example=true)
 * @OA\Property(property="created_at", type="string", example="2024-10-20T14:32:00Z")
 * @OA\Property(property="updated_at", type="string", example="2024-10-20T14:32:00Z")
 */
class PodcastSchema {}
