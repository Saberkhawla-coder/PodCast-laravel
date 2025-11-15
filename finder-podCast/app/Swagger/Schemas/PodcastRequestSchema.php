<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="PodcastRequestSchema",
 *     type="object",
 *     title="Podcast Request"
 * )
 * @OA\Property(property="title", type="string", example="Tech Talks")
 * @OA\Property(property="description", type="string", example="Podcast about technology news.")
 * @OA\Property(property="genre", type="string", example="Technology")
 * @OA\Property(property="image_path", type="string", example="/storage/podcasts/img1.png")
 */
class PodcastRequestSchema {}
