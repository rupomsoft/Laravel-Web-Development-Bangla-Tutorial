<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MyController');
Route::resource('photos','PhotoController');
Route::get("/MySelf", 'HomeController@MySelf');
Route::get("/YourSelf", 'HomeController@YourSelf');



