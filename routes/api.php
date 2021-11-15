<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController; // ye import kia
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

// below api bnanye
Route::get('/items', [App\Http\Controllers\ItemController::class, 'index']);
Route::prefix('/item')->group(function(){
       Route::post('/store',[App\Http\Controllers\ItemController::class, 'store']);
       Route::put('/{id}',[App\Http\Controllers\ItemController::class, 'update']);
       Route::delete('/{id}',[App\Http\Controllers\ItemController::class, 'destroy']);
});