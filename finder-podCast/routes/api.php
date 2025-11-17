<?php

use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[UserController::class, 'register']);
Route::post('login',[UserController::class, 'login']);
Route::post('logout',[UserController::class, 'logout'])->middleware('auth:sanctum');


//Route::apiResource('podcasts', PodcastController::class)->middleware('auth:sanctum');
// Route::post('podcasts/{podcast}',[ PodcastController::class, 'update'])->middleware('auth:sanctum');
// 

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('podcasts', PodcastController::class);
    Route::apiResource('podcasts.episodes', EpisodeController::class);
});



Route::apiResource('users', UserController::class)->middleware('auth:sanctum');





// Route::get('episodes/{episode}', [EpisodeController::class, 'show'])->middleware('auth:sanctum');
// Route::delete('episodes/{episode}', [EpisodeController::class, 'destroy'])->middleware('auth:sanctum');
// Route::get('/podcasts/{podcast}/episodes', [EpisodeController::class, 'index'])->middleware('auth:sanctum');
// Route::post('/podcasts/{podcast}/episodes', [EpisodeController::class, 'store'])->middleware('auth:sanctum');
// Route::put('/podcasts/{podcast}/episodes/{ep}', [EpisodeController::class, 'update'])->middleware('auth:sanctum');


 

