<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Tag(
 *     name="Podcast",
 *     description="Endpoints pour gérer les podcasts"
 * )
 */

/**
 * @OA\Get(
 *     path="/api/podcasts",
 *     summary="List all podcasts",
 *     tags={"Podcast"},
 *     @OA\Response(response=200, description="List of podcasts", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/PodcastSchema")))
 * )
 */

/**
 * @OA\Get(
 *     path="/api/podcasts/{id}",
 *     summary="Show podcast details",
 *     tags={"Podcast"},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Podcast details", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 */

/**
 * @OA\Post(
 *     path="/api/podcasts",
 *     summary="Create new podcast",
 *     tags={"Podcast"},
 *     security={{"sanctum":{}}},
 *     @OA\RequestBody(ref="#/components/schemas/PodcastRequestSchema"),
 *     @OA\Response(response=200, description="Podcast created", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 */

/**
 * @OA\Put(
 *     path="/api/podcasts/{id}",
 *     summary="Update podcast",
 *     tags={"Podcast"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\RequestBody(ref="#/components/schemas/PodcastRequestSchema"),
 *     @OA\Response(response=200, description="Podcast updated", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 */

/**
 * @OA\Delete(
 *     path="/api/podcasts/{id}",
 *     summary="Delete podcast",
 *     tags={"Podcast"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Podcast deleted")
 * )
 */
class PodcastControllerDoc {}
