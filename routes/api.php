<?php

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

$namespace = "App\Http\Controllers\\";

Route::post('/register', [$namespace.AuthController::class, 'register']);
Route::post('/login', [$namespace.AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () use($namespace) {
    Route::post('/logout', [$namespace.AuthController::class, 'logout']);
    Route::get('/user', [$namespace.AuthController::class, 'user']);
});