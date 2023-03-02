<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Gate;
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

Route::get('/admin', function () {
    return view('Admin/admin');
});


Route::get('/login/user', [LoginController::class,'showUserLoginForm']);
Route::get('/register/user', [RegisterController::class,'showUserRegisterForm']);
Route::post('/login/user', [LoginController::class,'userLogin']);


Route::post('/register/user', [RegisterController::class,'createUser']);
Route::group(['middleware' => 'auth:user'], function () {
 Route::view('/user', 'user');
});


Route::get('logout', [LoginController::class,'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
