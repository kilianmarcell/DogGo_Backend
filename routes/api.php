<?php

use App\Http\Controllers\ErtekelesController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\KommentController;
use App\Http\Controllers\UserController;
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

Route::resource('/komments', KommentController::class);

Route::resource('/helies', HelyController::class);

Route::resource('/ertekeles', ErtekelesController::class);

Route::resource('/feedbacks', FeedbackController::class);
