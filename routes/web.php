<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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



Route::get('/register', [RegisterController::class, 'register']);
Route::get('/login', [RegisterController::class, 'login']);

Route::post('/register-user',[RegisterController::class,'registerUser'])->name('register-user');
Route::post('login-user', [RegisterController::class, 'loginUser'])->name('login-user');

Route::get('/home',[RegisterController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/users-list',[RegisterController::class,'list'])->middleware('isLoggedIn');

Route::get('/logout', [RegisterController::class,'logout']);