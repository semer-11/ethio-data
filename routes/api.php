<?php

use App\Http\Controllers\Api\DataController;
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


Route::post('/name',[DataController::class,'name']);
Route::post('/woreda',[DataController::class,'woreda']);
Route::post('/city',[DataController::class,'city']);
Route::post('/celebrity',[DataController::class,'celebrity']);
Route::post('/bank',[DataController::class,'bank']);