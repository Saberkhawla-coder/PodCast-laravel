<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Tag(
 *     name="User",
 *     description="Endpoints pour gérer les utilisateurs"
 * )
 */

/**
 * @OA\Post(
 *     path="/api/register",
 *     summary="Register new user",
 *     tags={"User"},
 *     @OA\RequestBody(ref="#/components/schemas/UserRequestSchema"),
 *     @OA\Response(response=201, description="User registered", @OA\JsonContent(ref="#/components/schemas/UserSchema")),
 *     @OA\Response(response=500, description="Registration failed")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/login",
 *     summary="Login user",
 *     tags={"User"},
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email","password"},
 *             @OA\Property(property="email", type="string", example="john@example.com"),
 *             @OA\Property(property="password", type="string", example="password123")
 *         )
 *     ),
 *     @OA\Response(response=200, description="Login success")
 * )
 */

/**
 * @OA\Post(
 *     path="/api/logout",
 *     summary="Logout user",
 *     tags={"User"},
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="Logout successfully")
 * )
 */

/**
 * @OA\Get(
 *     path="/api/users",
 *     summary="List all users",
 *     tags={"User"},
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="All users", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/UserSchema")))
 * )
 */

/**
 * @OA\Get(
 *     path="/api/users/{id}",
 *     summary="Show user by ID",
 *     tags={"User"},
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true, description="User ID"),
 *     @OA\Response(response=200, description="User details", @OA\JsonContent(ref="#/components/schemas/UserSchema"))
 * )
 */
class UserControllerDoc {}
