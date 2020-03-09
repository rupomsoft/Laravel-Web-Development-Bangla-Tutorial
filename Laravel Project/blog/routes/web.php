<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'MyController');
Route::resource('photos','PhotoController');




