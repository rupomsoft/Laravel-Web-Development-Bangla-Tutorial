<?php

use Illuminate\Support\Facades\Route;


Route::get('/','RetriveController@specificData');

Route::get('/agg','AggregatesController@avgRow');


Route::get('/select','selectController@multiColumnSelect');


Route::get('/merge','mergeController@mergeData');

Route::get('/join','JoinController@RightJoinData');

Route::get('/insert','InsertController@insertRow');


Route::get('/delete','deleteController@onDelete');

Route::get('/update','updateController@onUpdate');


