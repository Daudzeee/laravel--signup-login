<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\RegisterUserController;
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
Route::post('/user/register', [RegisterUserController::class, 'register']);
Route::post('/user/login', [RegisterUserController::class, 'login']);
Route::get('/user/profile', [RegisterUserController::class, 'profile'])->middleware('APIToken');
Route::post('/user/logout', [RegisterUserController::class, 'logout'])->middleware('APIToken');
Route::post('/user/verified', [RegisterUserController::class, 'verification'])->middleware('APIToken');
Route::post('/user/forget-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/user/reset-password', [ForgotPasswordController::class, 'resetPassword']);
