<?php

namespace App\Swagger\Schemas;

/**
 * @OA\Schema(
 *     schema="UserLoginRequestSchema",
 *     type="object",
 *     title="User Login Request"
 * )
 * @OA\Property(property="email", type="string", example="john@example.com")
 * @OA\Property(property="password", type="string", example="password123")
 */
class UserLoginRequestSchema {}
