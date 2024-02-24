<?php

use Illuminate\Support\Facades\Route;


// Rota Index
Route::get('/', 'App\Http\Controllers\IndexController@index')->name('site.index');
Route::get('/login/{error?}', 'App\Http\Controllers\LoginController@index')->name('site.login');
Route::post('/login', 'App\Http\Controllers\LoginController@auth')->name('site.login');
Route::get('/register', 'App\Http\Controllers\RegisterController@register')->name('site.register');
Route::post('/register','App\Http\Controllers\RegisterController@save')->name('site.register');
Route::get('/contact','App\Http\Controllers\ContactController@contact')->name('site.contact');
Route::get('/about-us','App\Http\Controllers\AboutUsController@aboutus')->name('site.aboutus');

Route::middleware('authentication')->prefix('/journey')->group(function(){
    Route::get('/home','App\Http\Controllers\HomeController@index')->name('app.home');
    Route::get('/register-game','App\Http\Controllers\RegisterGameController@index')->name('app.register-game');
    Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('app.logout');
});

Route::fallback('App\Http\Controllers\FallbackController@fallback');

