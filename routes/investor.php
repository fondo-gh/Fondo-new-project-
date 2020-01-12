<?php

use Illuminate\Support\Facades\Route;

/*Investor routes*/

Route::group(['prefix' => 'investor'], function () {
    Route::get('/dashboard', 'InvestorController@index')->name('investor.dashboard');

    /* Investor Routes for Authentication*/
    Route::get('/login', 'Investor\LoginController@showLoginForm')->name('investor.login');
    Route::post('/login', 'Investor\LoginController@login')->name('investor.login');
    Route::post('/logout', 'Investor\LoginController@logout')->name('investor.logout');
    Route::get('/register', 'Investor\RegisterController@showRegistrationForm')->name('investor.register');
    Route::post('/register', 'Investor\RegisterController@register')->name('investor.register');
    Route::post('/password/email', 'Investor\ForgotPasswordController@sendResetLinkEmail')->name('investor.password.email');
    Route::get('/password/reset', 'Investor\ForgotPasswordController@showLinkRequestForm')->name('investor.password.request');
    Route::post('/password/reset', 'Investor\ResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Investor\ResetPasswordController@showResetForm')->name('investor.password.reset');

    Route::get('/startup/{id}/investor/page', 'InvestorController@getStartupShowPage')->name('investor.startup.show');
    Route::post('/startup/{id}/invest', 'InvestorController@startupInvest')->name('startup.invest');

    Route::post('/startup/prediction', 'InvestorController@getPrediction')->name('startup.prediction');
});

