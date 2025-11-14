<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Tag(name="Episode", description="Endpoints pour gérer les épisodes")
 */

/**
 * @OA\Get(
 *     path="/api/podcasts/{id}/episodes",
 *     summary="List episodes of podcast",
 *     tags={"Episode"},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Episodes list", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/EpisodeSchema")))
 * )
 */

/**
 * @OA\Post(
 *     path="/api/podcasts/{id}/episodes",
 *     summary="Create episode",
 *     tags={"Episode"},
 *     security={{"sanctum":{}}},
 *     @OA\RequestBody(ref="#/components/schemas/EpisodeRequestSchema"),
 *     @OA\Response(response=200, description="Episode created", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 */

/**
 * @OA\Get(
 *     path="/api/episodes/{id}",
 *     summary="Show episode",
 *     tags={"Episode"},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Episode details", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 */

/**
 * @OA\Put(
 *     path="/api/episodes/{id}",
 *     summary="Update episode",
 *     tags={"Episode"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\RequestBody(ref="#/components/schemas/EpisodeRequestSchema"),
 *     @OA\Response(response=200, description="Episode updated", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 */

/**
 * @OA\Delete(
 *     path="/api/episodes/{id}",
 *     summary="Delete episode",
 *     tags={"Episode"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true, description="Episode ID"),
 *     @OA\Response(response=200, description="Episode deleted")
 * )
 */
class EpisodeControllerDoc {}
