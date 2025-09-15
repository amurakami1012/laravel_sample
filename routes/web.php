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
    // return view('welcome');
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register/url-register', [App\Http\Controllers\Register\UrlMasterContorol::class, 'index'])->name('register.url.register');
Route::post('/register/url-register/store', [App\Http\Controllers\Register\UrlMasterContorol::class, 'store'])->name('register.url.register.store');

Route::get('/register/url-list', [App\Http\Controllers\Register\UrlMasterListContorol::class, 'index'])->name('register.url.register.list');
