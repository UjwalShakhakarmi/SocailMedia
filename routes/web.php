<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialcontroller;
use App\Http\Controllers\UsersController;
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
Route::get('/', [socialcontroller:: class ,'dashboard'])->name('Dashboard')->middleware(['auth']);


Route::get('/login', [socialcontroller:: class ,'login'])->name('login');

Route::get('/register', [socialcontroller:: class ,'Register'])->name('register');
Route::post('/register', [UsersController:: class ,'registerUser'])->name('registerUser');
Route::post('/login', [UsersController:: class ,'loginUser'])->name('LoginUser');
Route::get('/logout', [UsersController:: class ,'logout'])->name('logout');

