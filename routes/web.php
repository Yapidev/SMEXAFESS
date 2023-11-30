<?php

use App\Http\Controllers\authController;
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

Route::middleware('guest')->controller(authController::class)->group(function () {
    // Return view
    Route::get('login', 'loginPage')->name('login');
    Route::get('register', 'registerPage')->name('register');
    Route::get('forgotPassword', 'forgotPasswordPage')->name('forgotPassword');

    // Return process
    Route::post('loginProcess', 'loginProcess')->name('loginProcess');
    Route::post('registerProcess', 'registerProcess')->name('registerProcess');
});
