<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Tag(name="Episode", description="Endpoints pour gérer les épisodes")
 */

/**
 * @OA\Get(
 *     path="/api/episodes",
 *     tags={"Episode"},
 *     summary="List all episodes",
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="All episodes", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/EpisodeSchema")))
 * )
 * 
 * @OA\Get(
 *     path="/api/episodes/{id}",
 *     tags={"Episode"},
 *     summary="Show episode by ID",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true, description="Episode ID"),
 *     @OA\Response(response=200, description="Episode details", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 * 
 * @OA\Post(
 *     path="/api/episodes",
 *     tags={"Episode"},
 *     summary="Create episode",
 *     security={{"sanctum":{}}},
 *     @OA\RequestBody(ref="#/components/schemas/EpisodeRequestSchema"),
 *     @OA\Response(response=201, description="Episode created", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 * 
 * @OA\Put(
 *     path="/api/episodes/{id}",
 *     tags={"Episode"},
 *     summary="Update episode",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\RequestBody(ref="#/components/schemas/EpisodeRequestSchema"),
 *     @OA\Response(response=200, description="Episode updated", @OA\JsonContent(ref="#/components/schemas/EpisodeSchema"))
 * )
 * 
 * @OA\Delete(
 *     path="/api/episodes/{id}",
 *     tags={"Episode"},
 *     summary="Delete episode",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="Episode deleted")
 * )
 */
class EpisodeControllerDoc {}
