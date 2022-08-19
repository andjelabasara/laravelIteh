<?php

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
Route::get('/telefoni',[TelefonController::class,'index']);
Route::get('/telefoni/{id}',[TelefonController::class,'show']);

Route::delete('/telefoni/{id}',[TelefonController::class,'destroy']);

Route::post('/telefoni',[TelefonController::class,'store']);
Route::put('/telefoni/{id}',[TelefonController::class,'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
