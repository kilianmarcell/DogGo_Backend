<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\RatingAVGController;
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

Route::apiResource('/users', UserController::class);

Route::apiResource('/locations', LocationController::class);

Route::apiResource('/feedbacks', FeedbackController::class);

Route::apiResource('/ratings', RatingController::class);

Route::get('/best_rating', [ RatingAVGController::class, 'getBest' ]);
Route::get('/worst_rating', [ RatingAVGController::class, 'getWorst' ]);
