<?php
Route::get('index','EventController@index');
Route::get('detail/{id}','EventController@detail');
Route::get('create','EventController@create');
Route::get('created','EventController@created');
Route::get('deleted/{id}','EventController@deleted');
Route::get('edit/{id}','EventController@edit');
