<?php

use App\Http\Controllers\API\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/suma/{num1}/{num2}', [PostController::class, 'suma']);
Route::get('/multiplicacion/{num1}/{num2}', [PostController::class, 'multiplicacion']);

