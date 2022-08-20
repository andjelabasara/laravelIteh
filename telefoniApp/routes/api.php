<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TelefonController;
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
Route::post('/registrujse',[AuthController::class,'register']);
Route::post('/ulogujse',[AuthController::class,'login']);




Route::get('/telefoni',[TelefonController::class,'index']);
Route::get('/telefoni/{id}',[TelefonController::class,'show']);



Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/odjava',[AuthController::class,'logout']);
    Route::delete('/telefoni/{id}',[TelefonController::class,'destroy']);

    Route::post('/telefoni',[TelefonController::class,'store']);
    Route::put('/telefoni/{id}',[TelefonController::class,'update']);
});