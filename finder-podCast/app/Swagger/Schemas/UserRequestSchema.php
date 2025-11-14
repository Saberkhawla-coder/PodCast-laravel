<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="UserRequestSchema",
 *     type="object",
 *     title="User Request"
 * )
 *
 * @OA\Property(property="first_name", type="string", example="John")
 * @OA\Property(property="last_name", type="string", example="Doe")
 * @OA\Property(property="email", type="string", example="john@example.com")
 * @OA\Property(property="password", type="string", example="password123")
 */
class UserRequestSchema {}
