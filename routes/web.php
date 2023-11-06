<?php

use App\Http\Controllers\UserController;
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
    return view('login');
});

Route::get('/dashboard', function () {
    return view('default.default');
});

Route::controller(UserController::class)->group(function(){
    Route::get('register', 'register')->name('user.register');
    // Route::get('user/show-data', 'show')->name('user.show');
    Route::get('user', 'index')->name('user.index');
    Route::post('user/store', 'store')->name('user.store');
});

