<?php

// use App\Http\Controllers\UserController;

use App\Http\Controllers\SentimentController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['auth']], function () {
    /**
     * Logout Route
     */
    Route::get('/signout', [UserController::class, 'signOut'])->name('signout');
});

// homepage route
Route::get('/', [HomeController::class, 'index'])->name('home');
// user get routes
Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('/signin', [UserController::class, 'signInPage'])->name('signin');
Route::get('/signup', [UserController::class, 'signUpPage'])->name('signup');
Route::get('/profile', [UserController::class, 'profilePage'])->name('profile');
Route::get('/change-password', [UserController::class, 'changePasswordPage'])->name('changepassword');
Route::get('/reset-password', [UserController::class, 'resetPasswordPage'])->name('resetpassword');
Route::get('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');


// login & register post route
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');


// sentiment analysis
Route::get('/generate-analysis', [SentimentController::class, 'generateAnalysisPage'])->name('generate-analysis');
Route::get('/results', [SentimentController::class, 'resultsPage'])->name('results');
Route::get('/sentment-overview', [SentimentController::class, 'sentimentOverviewPage'])->name('sentiment-overview');