<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Tag(name="Podcast", description="Endpoints pour gérer les podcasts")
 */

/**
 * @OA\Get(
 *     path="/api/podcasts",
 *     tags={"Podcast"},
 *     summary="List all podcasts",
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="All podcasts", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/PodcastSchema")))
 * )
 * 
 * @OA\Get(
 *     path="/api/podcasts/{id}",
 *     tags={"Podcast"},
 *     summary="Show podcast by ID",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true, description="Podcast ID"),
 *     @OA\Response(response=200, description="Podcast details", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 * 
 * @OA\Post(
 *     path="/api/podcasts",
 *     tags={"Podcast"},
 *     summary="Create podcast",
 *     security={{"sanctum":{}}},
 *     @OA\RequestBody(ref="#/components/schemas/PodcastRequestSchema"),
 *     @OA\Response(response=201, description="Podcast created", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 * 
 * @OA\Put(
 *     path="/api/podcasts/{id}",
 *     tags={"Podcast"},
 *     summary="Update podcast",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\RequestBody(ref="#/components/schemas/PodcastRequestSchema"),
 *     @OA\Response(response=200, description="Podcast updated", @OA\JsonContent(ref="#/components/schemas/PodcastSchema"))
 * )
 * 
 * @OA\Delete(
 *     path="/api/podcasts/{id}",
 *     tags={"Podcast"},
 *     summary="Delete podcast",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Podcast deleted")
 * )
 */
class PodcastControllerDoc {}
