<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tasks', "TaskController@index");
Route::get('tasks/{task}', "TaskController@show");

Route::post('tasks', "TaskController@store");

Route::patch('tasks/{task}', "TaskController@update");

Route::delete('tasks/{task}', "TaskController@destroy");

