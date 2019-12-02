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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Welcome route
Route::get('/', function () {
    return view('welcome');
});

//auth routes
Auth::routes();

//page routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile/update/page', 'HomeController@getUpdateProfilePage')->name('profile.update.page');
Route::post('/profile/update', 'HomeController@updateProfile')->name('profile.update');
Route::post('/profile/skills/add', 'HomeController@addProfileSkills')->name('profile.skills.add');


Route::get('/notification', 'HomeController@notification')->name('notification');
Route::get('/startup', 'HomeController@startup')->name('startup');
Route::get('/startup/show/page', 'HomeController@getStartupShowPage')->name('startup.show');
Route::get('/dashboard', 'AdminController@index')->name('dashboard');


/*Admin routes*/
/* Admin Routes for Authentication*/
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::post('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('admin/register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register')->name('admin.register');
Route::post('admin/password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin/password/reset', 'Admin\ResetPasswordController@reset');
Route::get('admin/password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

