<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteController@Home');


Route::get('/about', 'SiteController@About');


Route::get('/contact','SiteController@Contact');
