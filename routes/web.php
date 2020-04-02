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

Route::domain(env('APP_DASHBOARD_URL'))->group(function () {
    Route::get('/{any?}', 'AppController@dashboard')->where('any', '.*')->name('dashboard.app');
});

Route::domain(env('APP_URL'))->group(function () {
    Route::get('/{any?}', 'AppController@website')->where('any', '.*')->name('website.app');
});
