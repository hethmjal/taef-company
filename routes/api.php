<?php

use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\NewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('news','App\Http\Controllers\Api\NewsController');
Route::apiResource('services','App\Http\Controllers\Api\ServicesController');
Route::post('login', [LoginController::class, 'login']);

Route::post('logout', [LoginController::class, 'logout'])->middleware('auth:sanctum');
Route::post('logoutAll', [LoginController::class, 'logoutAll'])->middleware('auth:sanctum');
