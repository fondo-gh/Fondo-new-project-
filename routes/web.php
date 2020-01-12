<?php

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

use Illuminate\Support\Facades\Route;


//Welcome route
Route::get('/', function () {
    return view('welcome');
});

/**
 * Routes for the Entrepreneur - user is found in the user.php route file
 * Admin - admin.php
 * Investor - investor.php
 */

