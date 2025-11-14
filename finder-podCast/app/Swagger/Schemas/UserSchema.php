<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="UserSchema",
 *     type="object",
 *     title="User Resource",
 *     description="User model schema"
 * )
 *
 * @OA\Property(property="id", type="integer", example=1)
 * @OA\Property(property="first_name", type="string", example="John")
 * @OA\Property(property="last_name", type="string", example="Doe")
 * @OA\Property(property="email", type="string", example="john@example.com")
 * @OA\Property(property="role", type="string", example="admin")
 * @OA\Property(property="created_at", type="string", format="date-time", example="2024-10-15T12:30:00Z")
 * @OA\Property(property="updated_at", type="string", format="date-time", example="2024-10-15T12:30:00Z")
 */
class UserSchema {}
