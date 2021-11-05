<?php

// use App\Http\Controllers\UserController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('dashboard');
    // return '<h1>welcome to Digital Bucket</h1>';
});
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('dashboard', [UserController::class, 'dashboard']);
Route::get('/', [UserController::class, 'homePage'])->name('home');
Route::get('/signin', [UserController::class, 'signInPage'])->name('signin');
Route::get('/signup', [UserController::class, 'signUpPage'])->name('signup');
Route::get('/profile', [UserController::class, 'profilePage'])->name('profile');
Route::get('/change-password', [UserController::class, 'changePasswordPage'])->name('changepassword');
Route::get('/reset-password', [UserController::class, 'resetPasswordPage'])->name('resetpassword');
Route::get('/generate-analysis', [UserController::class, 'generateAnalysisPage'])->name('generate-analysis');
Route::get('/update-profile', [UserController::class, 'updateProfile'])->name('update-profile');


Route::get('/results', [UserController::class, 'resultsPage'])->name('results');
Route::get('/sentment-overview', [UserController::class, 'sentimentOverviewPage'])->name('sentiment-overview');
Route::get('/signin', [UserController::class, 'signInPage'])->name('signin');
Route::get('/signup', [UserController::class, 'signUpPage'])->name('signup');

// Route::get('/', [UserController::class, 'homePage'])->name('home');
Route::post('login', [UserController::class, 'indexPage'])->name('login');
Route::get('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::post('custom-login', [UserController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [UserController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [UserController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [UserController::class, 'signOut'])->name('signout');