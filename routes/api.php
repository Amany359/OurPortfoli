<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\AuthController;
<<<<<<< HEAD
=======
use App\Http\Controllers\Api\SettingController;
>>>>>>> feature/setting
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

Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
<<<<<<< HEAD
Route::get('/{token}/verify',[AuthController::class,'verify']);


=======

Route::post('settings',[SettingController::class,'index']);
>>>>>>> feature/setting
