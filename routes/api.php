<?php

use App\Http\Controllers\ErtekelesController;
use App\Http\Controllers\FelhasznaloController;
use App\Http\Controllers\HelyController;
use App\Http\Controllers\KommentController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('/felhasznalos', FelhasznaloController::class);

Route::resource('/komments', KommentController::class);

<<<<<<< HEAD
Route::resource('/helies', HelyController::class);
=======
Route::resource('/ertekeles', ErtekelesController::class);
>>>>>>> c7d79227ff7c2aee4f4c6ab2aaa3f7ceb98f9e99
