<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard'); //gives register name

Route::get('/login',[LoginController::class, 'index'])->name('login'); //gives register name
Route::post('/login',[LoginController::class, 'store']);


Route::get('/register',[RegisterController::class, 'index'])->name('register'); //gives register name
Route::post('/register',[RegisterController::class, 'store']);

Route::get('/', function () {
    return view('posts.index');
});


