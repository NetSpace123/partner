<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//HomePage Routes
Route::get('/',[\App\Http\Controllers\HomepageController::class,'index'])->name('home');


//User Controller
Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('user-login');
Route::get('/register',[\App\Http\Controllers\UserController::class,'register'])->name('user-register');
Route::post('/createuser',[\App\Http\Controllers\UserController::class,'createuser'])->name('create-new-user');
Route::post('/checkpartner',[\App\Http\Controllers\UserController::class,'checkpartner'])->name('checkpartner');
