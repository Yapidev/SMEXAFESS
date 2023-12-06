<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route unauthorize user
Route::middleware('guest')->controller(authController::class)->group(function () {
    // Return view
    Route::get('login', 'loginPage')->name('login');
    Route::get('register', 'registerPage')->name('register');
    Route::get('forgotPassword', 'forgotPasswordPage')->name('forgotPassword');
    Route::get('reset-password/{token}', 'resetPassword')->name('password.reset');

    // Return process
    Route::post('loginProcess', 'loginProcess')->name('loginProcess');
    Route::post('registerProcess', 'registerProcess')->name('registerProcess');
    Route::get('login/google', 'redirectToGoogle')->name('redirectToGoogle');
    Route::get('login/google/callback', 'handleGoogleCallback')->name('handleGoogleCallback');
    Route::post('sendResetLink', 'sendResetLink')->name('sendResetLink');
    Route::post('reset-password', 'updatePassword')->name('password.update');
});

// Only middleware auth
Route::middleware('auth')->controller(ProfileController::class)->group(function () {
    Route::get('profile', 'profilePage')->name('profile.index');
    Route::patch('update-photo', 'updatePhotoProfileProcess')->name('profile.update-photo');
    Route::patch('update-password', 'updatePassword')->name('profile.update-password');
    Route::put('update-biodata', 'updateBiodata')->name('profile.update-biodata');
    Route::delete('delete-photo', 'deletePhoto')->name('profile.delete-photo');
    Route::post('logout', [authController::class, 'logout'])->name('logoutProcess');
});

Route::prefix('user')->middleware('auth', 'user')->controller(userController::class)->group(function () {
    // Return view
    Route::get('home', 'homePage')->name('user.home');
    Route::get('statistic-post', 'statisticPostPage')->name('user.post-feed');
    Route::get('report-list', 'reportListPage')->name('user.report-list');
    Route::get('detail-post', 'detailPost')->name('user.detail-post');
    Route::get('get-comments', [CommentController::class, 'getComments'])->name('comments.get');
    Route::get('get-active-user-id', [CommentController::class, 'getActiveUserId'])->name('comments.getId');
    
    // Return process
    Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comments.delete');
});

// Route Admin
Route::prefix('admin')->middleware('auth', 'admin')->controller(adminController::class)->group(function () {
    // Return view
    Route::get('home', 'homePage')->name('admin.home');
    Route::get('post-feed', 'postFeedPage')->name('admin.post-feed');
    Route::get('report-list', 'reportListPage')->name('admin.report-list');

    // Return process
});
