<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionController;

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


<<<<<<< HEAD
//REGISTER $ LOGIN
=======

>>>>>>> 2c2546de353e85e4bed7d597d3e705973293a3cb
Route::get('/', [RegisterController::class, 'register'])->name('register');
Route::get('/login', [RegisterController::class, 'login'])->name('login');

Route::post('/register-user',[RegisterController::class,'registerUser'])->name('register-user');
Route::post('login-user', [RegisterController::class, 'loginUser'])->name('login-user');

<<<<<<< HEAD
// DASHBOARD
Route::get('/home',[RegisterController::class,'dashboard'])->middleware('isLoggedIn')->name('home');
Route::get('/transaction',[TransactionController::class,'index'])->middleware('isLoggedIn')->name('transaction');
Route::get('/transaction-list',[TransactionController::class,'list'])->middleware('isLoggedIn')->name('transaction-list');

Route::get('/edit/{id}',[TransactionController::class,'edit'])->middleware('isLoggedIn')->name('edit');
Route::get('/delete/{id}',[TransactionController::class,'delete'])->middleware('isLoggedIn')->name('delete');
Route::post('/update-transaction',[TransactionController::class,'update'])->middleware('isLoggedIn')->name('update-transaction');

Route::post('/transaction-save',[TransactionController::class,'save'])->middleware('isLoggedIn')->name('transaction-save');

// DOWNLOAD INVOICE
Route::get('download/{id}', [TransactionController::class,'receipt']);

// LAOGOUT
=======
Route::get('/home',[RegisterController::class,'dashboard'])->middleware('isLoggedIn')->name('home');
Route::get('/users-list',[RegisterController::class,'list'])->middleware('isLoggedIn')->name('users-list');

>>>>>>> 2c2546de353e85e4bed7d597d3e705973293a3cb
Route::get('/logout', [RegisterController::class,'logout'])->name('logout');