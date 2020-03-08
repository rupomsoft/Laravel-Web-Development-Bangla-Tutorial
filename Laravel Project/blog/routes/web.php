<?php

use Illuminate\Support\Facades\Route;

Route::get('/Name/{firstName}/{MiddleName}/{lastName}','DemoController@MyName');