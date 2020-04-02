<?php

use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('login', 'Api\Auth\DashboardController@login')->name('api.dashboard.login');
    Route::middleware('auth:dashboard')->group(function () {
        Route::get('details', 'Api\Auth\DashboardController@details');
    });
});


