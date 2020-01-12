<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Routes for user/Entrepreneur
 */

//auth routes
Auth::routes();

/**
 * Group routes
 */
Route::group(['prefix' => 'user'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile/update/page', 'HomeController@getUpdateProfilePage')->name('profile.update.page');
    Route::post('/profile/update', 'HomeController@updateProfile')->name('profile.update');
    Route::post('/profile/skills/add', 'HomeController@addProfileSkills')->name('profile.skills.add');

    Route::get('/notification', 'HomeController@notification')->name('notification');
    Route::get('/startups', 'HomeController@startups')->name('startup');
    Route::get('/startup/create/page', 'HomeController@getStartupCreatePage')->name('startup.create');
    Route::post('/startup/store', 'HomeController@storeStartup')->name('startup.store');
    Route::get('/startup/{id}/show/page', 'HomeController@getStartupShowPage')->name('startup.show');
    Route::get('/startup/{id}/update/page', 'HomeController@getStartupUpdatePage')->name('startup.update.page');
    Route::post('/startup/{id}/update', 'HomeController@updateStartup')->name('startup.update');
});

