<?php

namespace App\Swagger;

use OpenApi\Annotations as OA;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API PodCast",
 *     description="Documentation des endpoints pour l'application PodCast",
 *     @OA\Contact(
 *         email="contact@example.com"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000/api",
 *     description="Serveur local"
 * )
 */
class Swagger
{
    // Cette classe n'a pas besoin de code, elle sert uniquement pour les annotations
}
