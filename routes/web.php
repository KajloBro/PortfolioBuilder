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

Route::get('/', 'FrontController@index')->name('home');
Route::get('portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('portfolio/{id}', 'FrontController@project')->name('project');
Route::get('about', 'FrontController@about')->name('about');
Route::get('contact', 'FrontController@contact')->name('contact');
