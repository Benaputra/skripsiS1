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

Route::controller(UserController::class)->group(function(){
    Route::get('register', 'index')->name('user.register');
    Route::post('user/store', 'store')->name('user.store');
});

// Route::get('register', function(){
//     return view('register');
// });

Route::get('/dashboard', function () {
    return view('default.default');
});