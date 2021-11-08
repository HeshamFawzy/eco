<?php

use Illuminate\Support\Facades\Route;

Route::any('login', 'AuthController@login')->name('dashboard.login');

Route::middleware('adminAuth')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::post('logout', 'AuthController@logout')->name('dashboard.logout');
});
