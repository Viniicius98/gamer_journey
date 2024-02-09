<?php

use Illuminate\Support\Facades\Route;


// Rota Index
Route::get('/', 'App\Http\Controllers\RegisterController@register')->name('site.register');

Route::get('/contact','App\Http\Controllers\ContactController@contact')->name('site.contact');

Route::get('/about-us','App\Http\Controllers\AboutUsController@aboutus')->name('site.aboutus');

