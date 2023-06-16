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


//Partner Routes
Route::get('/login',[\App\Http\Controllers\PartnersController::class,'login'])->name('partner-login');
Route::get('/register',[\App\Http\Controllers\PartnersController::class,'register'])->name('partner-register');
Route::post('/createuser',[\App\Http\Controllers\PartnersController::class,'createuser'])->name('create-new-partner');
Route::post('/checkpartner',[\App\Http\Controllers\PartnersController::class,'checkpartner'])->name('checkpartner');
Route::get('/dashboard',[\App\Http\Controllers\PartnerController::class,'dashboard'])->name('partner-dashboard');
