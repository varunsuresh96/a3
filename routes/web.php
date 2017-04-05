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

/**
* Main page which calculates the BMI and required calories.
*/

Route::get('/', 'CalculateController@index');

/**
* Log viewer
* (only accessible locally)
*/

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
