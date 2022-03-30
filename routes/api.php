<?php

use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\FeedbackCountController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\RatingController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\FeedbackFilterController;
use App\Http\Controllers\Api\LocationCountController;
use App\Http\Controllers\Api\LocationFilterController;
use App\Http\Controllers\Api\RatingAVGController;
use App\Http\Controllers\Api\UserCountController;
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

Route::apiResource('/users', UserController::class);

Route::apiResource('/locations', LocationController::class);
Route::get('/user_locations/{id}', [ LocationController::class, 'getLocationsById']);

Route::apiResource('/feedbacks', FeedbackController::class);

Route::apiResource('/ratings', RatingController::class);

Route::get('/best_rating', [ RatingAVGController::class, 'getBest' ]);
Route::get('/worst_rating', [ RatingAVGController::class, 'getWorst' ]);
Route::get('/rating_by_user/{id}', [ RatingAVGController::class, 'getRatingByUser' ]);
Route::get('/rating_by_location/{id}', [ RatingAVGController::class, 'getRatingByLocation' ]);
Route::get('/location_avgrating/{id}', [ RatingAVGController::class, 'getAvgRatingOfLocation']);
Route::get('/locations_avgrating', [ RatingAVGController::class, 'getAvgRatingOfLocations']);

Route::get('/locations_allowed', [ LocationFilterController::class, 'getAllowed' ]);
Route::get('/locations_not_allowed', [ LocationFilterController::class, 'getNotAllowed' ]);

Route::get('/feedbacks_read', [ FeedbackFilterController::class, 'getRead' ]);
Route::get('/feedbacks_not_read', [ FeedbackFilterController::class, 'getNotRead' ]);

Route::get('/user_count', [ UserCountController:: class, 'getUserCount' ]);
Route::get('/banned_user_count', [ UserCountController:: class, 'getBannedUserCount' ]);
Route::get('/admin_user_count', [ UserCountController:: class, 'getAdminUserCount' ]);

Route::get('/allowed_location_count', [ LocationCountController::class, 'getAllowedLocationCount']);
Route::get('/new_location_count', [ LocationCountController::class, 'getNewLocationCount']);

Route::get('/read_feedback_count', [FeedbackCountController::class, 'getReadFeedbackCount']);
Route::get('/new_feedback_count', [FeedbackCountController::class, 'getNewFeedbackCount']);

Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
     return $request->user();
 });    //https://laravel.com/docs/9.x/sanctum#spa-authentication
