<?php

// FrontEnd
Route::get('/', 'FrontController@index')->name('home');
Route::get('portfolio', 'FrontController@portfolio')->name('portfolio');
Route::get('portfolio/{id}', 'FrontController@project')->name('project');
Route::get('about', 'FrontController@about')->name('about');
Route::get('contact', 'FrontController@contact')->name('contact');


// Login
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');


// Registration // Delete after Trisha makes an acc
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');


// Admin routes; Middleware protected
Route::group(['middleware' => ['auth']], function () {
    Route::get('admin', 'AdminController@index')->name('admin');
    Route::resource('admin/contact', 'AdminContactsController');
    Route::resource('admin/about', 'AdminAboutsController');
    Route::resource('admin/photos', 'AdminPhotosController');
    Route::resource('admin/projects', 'AdminProjectsController');
    Route::resource('admin/projectsphotos', 'AdminProjectsPhotosController');
});