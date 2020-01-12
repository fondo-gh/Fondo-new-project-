<?php

use Illuminate\Support\Facades\Route;
/*Admin routes*/

Route::group(['prefix' => 'admin'], function() {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    /* Admin Routes for Authentication*/
    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login');
    Route::post('/logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Admin\RegisterController@register')->name('admin.register');
    Route::post('/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Admin\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
});

