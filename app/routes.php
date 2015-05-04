<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::controller('classes', 'User\ClassesController');
Route::controller('facilities', 'User\FacilitiesController');
Route::controller('membership', 'User\MembershipController');
Route::controller('schedule', 'User\ScheduleController');
Route::controller('home', 'User\HomeController');
Route::controller('contact', 'User\ContactController');

Route::post('login', 'User\AccountController@postLogin');
Route::get('account', 'User\AccountController@getIndex');

Route::post('register', 'User\AccountController@postRegister');

// Admin
Route::get('admin', 'User\AdminController@getIndex');
Route::post('postEmployee', 'User\AdminController@postEmployee');
Route::delete('deleteEmployee', 'User\AdminController@deleteEmployee');
Route::delete('deleteMember', 'User\AdminController@deleteMember');
Route::post('postClass', 'User\AdminController@postClass');
Route::post('postSchedule', 'User\AdminController@postSchedule');

Route::post('postSearch', 'User\ClassesController@postSearch');

Route::get('logout', 'User\AccountController@getLogout');

Route::controller('/', 'User\HomeController');