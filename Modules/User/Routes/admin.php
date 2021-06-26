<?php
Route::get('index','UserController@index');
Route::get('detail/{id}','UserController@detail');
Route::get('create','UserController@create');
Route::get('created','UserController@created');
Route::get('edit/{id}','UserController@edit');
