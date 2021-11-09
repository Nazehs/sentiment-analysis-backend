<?php

use App\Http\Controllers\SentimentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// UserController

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


// user routes definitions
// get all the users
Route::get('users', [UserController::class, 'index']);
// get user based on id
Route::get('users/{id}', [UserController::class, 'getUser']);
// create a new user
Route::post('users/create', [UserController::class, 'store']);
// update user based on id
Route::put('users/{id}', [UserController::class, 'update']);
// delete use based on id
Route::delete('users/{id}', [UserController::class, 'delete']);
// user login route
Route::post('login', [UserController::class, 'login']);


// sentiment analysis routes definitions
// get all the sentiments
Route::get('sentiments', [SentimentController::class, 'index']);
// get sentiment based on id
Route::get('sentiment/{id}', [SentimentController::class, 'getSentiment']);
// create a new entry of sentiment
Route::post('sentiment/create', [SentimentController::class, 'store']);
// update sentiment based on id
Route::put('sentiment/{id}', [SentimentController::class, 'update']);
// delete sentiment based on id
Route::delete('sentiment/{id}', [SentimentController::class, 'delete']);