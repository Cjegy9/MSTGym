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


Route::controller('/', 'User\HomeController');
Route::controller('classes', 'User\ClassesController');
Route::controller('facilities', 'User\FacilitiesController');
Route::controller('locate', 'User\LocateController');
Route::controller('membership', 'User\MembershipController');
Route::controller('Schedule', 'User\ScheduleController');
Route::controller('trainers', 'User\TrainersController');
Route::controller('home', 'User\HomeController');