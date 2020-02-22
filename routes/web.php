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

Route::get('/', 'PagesController@index') ;

Route::resource('dashboard', 'AdminController');
Route::resource('about', 'AboutController');
Route::resource('iso', 'IsoController');
Route::resource('info', 'InfoController');
Route::resource('/inc/contact', 'FeedbackController');
Route::resource('feedback', 'FeedbackAdminController');



Route::get('/contact', 'PagesController@contact');
