<?php

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


Route::get('/', 'App\Http\Controllers\HomeController@voirHome')->name("home")->middleware('auth');
Route::post('/logout', 'App\Http\Controllers\LogoutController@logout')->name('logout');

Route::group(['prefix' => 'tontine', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\TontineController@Home')->name("tontine.home");
});
Route::group(['prefix' => 'epargne', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\EpargneController@Home')->name("epargne.home");
});

Route::group(['prefix' => 'solidarite', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\SolidariteController@Home')->name("solidarite.home");
});

Route::group(['prefix' => 'profile', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\ProfileController@Home')->name("profile.home");
    Route::put('/editer/{id}', 'App\Http\Controllers\ProfileController@update')->name("profile.update");
});

Route::group(['prefix' => 'notification', 'middleware' => 'auth'], function () {
    Route::get('/', 'App\Http\Controllers\NotificationController@Home')->name("notification.home");
});

Route::group(['prefix' => 'auth', 'middleware' => 'auth'], function () {
    Route::post('/ajouterMenbre', 'App\Http\Controllers\AdminController@adduser')->name("admin.add");
    Route::get('/', 'App\Http\Controllers\AdminController@home')->name("admin.home");
});

Route::group(['prefix' => 'login'], function () {
    Route::post('/login', 'App\Http\Controllers\LoginController@login')->name("login.submit");
    Route::get('/', 'App\Http\Controllers\LoginController@loginForm')->name("login");
});
