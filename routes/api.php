<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\UserController;
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

Route::resource('/users', UserController::class);

Route::resource('/locations', LocationController::class);

Route::resource('/feedbacks', FeedbackController::class);

Route::resource('/ratings', RatingController::class);
