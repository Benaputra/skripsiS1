<?php

use App\Http\Controllers\dummyController;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
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
    return view('default.default');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('register-store',[UserController::class,'storeRegister'])->name('register.store');

Route::get('/dashboard', function () {
    return view('default.default');
});

Route::resource('dummy', dummyController::class);

Route::resource('user',UserController::class);

Route::get('blank', function(){
    return view('default.blank');
});