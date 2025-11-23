<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectSessionController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::post('/subjects', [SubjectController::class, 'store']);
    Route::get('/subjects', [SubjectController::class, 'index']);

    Route::post('/subjects/{subject}/sessions/start', [SubjectSessionController::class, 'start']);
    Route::put('/subjects/{subject}/sessions/{session}/finish', [SubjectSessionController::class, 'finish']);
    Route::get('/subjects/{subject}/sessions', [SubjectSessionController::class, 'list']);
});