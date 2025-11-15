<?php

namespace App\Swagger\Controllers;

/**
 * @OA\Info(title="Podcast API", version="1.0.0")
 * @OA\Tag(name="User", description="Endpoints pour gérer les utilisateurs")
 */

/**
 * @OA\Post(
 *     path="/api/register",
 *     tags={"User"},
 *     summary="Register new user",
 *     @OA\RequestBody(ref="#/components/schemas/UserRequestSchema"),
 *     @OA\Response(response=201, description="User registered", @OA\JsonContent(ref="#/components/schemas/UserSchema"))
 * )
 * @OA\Post(
 *     path="/api/login",
 *     tags={"User"},
 *     summary="Login user",
 *     @OA\RequestBody(ref="#/components/schemas/UserLoginRequestSchema"),
 *     @OA\Response(response=200, description="Login success", @OA\JsonContent(ref="#/components/schemas/UserSchema"))
 * )
 * @OA\Post(
 *     path="/api/logout",
 *     tags={"User"},
 *     summary="Logout user",
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="Logout successful")
 * )
 * @OA\Get(
 *     path="/api/users",
 *     tags={"User"},
 *     summary="List all users",
 *     security={{"sanctum":{}}},
 *     @OA\Response(response=200, description="All users", @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/UserSchema")))
 * )
 * @OA\Get(
 *     path="/api/users/{id}",
 *     tags={"User"},
 *     summary="Show user by ID",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true, description="User ID"),
 *     @OA\Response(response=200, description="User details", @OA\JsonContent(ref="#/components/schemas/UserSchema"))
 * )
 * @OA\Put(
 *     path="/api/users/{id}",
 *     tags={"User"},
 *     summary="Update user",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\RequestBody(ref="#/components/schemas/UserRequestSchema"),
 *     @OA\Response(response=200, description="User updated", @OA\JsonContent(ref="#/components/schemas/UserSchema"))
 * )
 * @OA\Delete(
 *     path="/api/users/{id}",
 *     tags={"User"},
 *     summary="Delete user",
 *     security={{"sanctum":{}}},
 *     @OA\Parameter(name="id", in="path", required=true),
 *     @OA\Response(response=200, description="User deleted")
 * )
 */
class UserControllerDoc {}
