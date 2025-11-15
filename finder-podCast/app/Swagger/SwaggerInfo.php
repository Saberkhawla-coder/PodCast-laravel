<?php

namespace App\Swagger;

/**
 * @OA\Info(
 *     version="1.0.0",
 *     title="API BriefPodCast",
 *     description="Documentation de l'API pour la gestion des utilisateurs, podcasts et épisodes",
 *     @OA\Contact(
 *         email="support@example.com",
 *         name="Support BriefPodCast"
 *     )
 * )
 *
 * @OA\Server(
 *     url="http://localhost:8000",
 *     description="Serveur local"
 * )
 *
 * @OA\Server(
 *     url="https://api.example.com",
 *     description="Serveur de production"
 * )
 *
 * @OA\Tag(
 *     name="User",
 *     description="Endpoints pour gérer les utilisateurs"
 * )
 *
 * @OA\Tag(
 *     name="Podcast",
 *     description="Endpoints pour gérer les podcasts"
 * )
 *
 * @OA\Tag(
 *     name="Episode",
 *     description="Endpoints pour gérer les épisodes"
 * )
 */
class SwaggerInfo {}
