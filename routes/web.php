<?php

Route::get('/',['as'=>'home','uses'=>'PagesController@home']);

Route::get('mensajes/create',['as'=>'mensajes.create','uses'=>'mensajesController@create']);
Route::post('mensajes',['as'=>'mensajes.store','uses'=>'mensajesController@store']);
Route::get('mensajes',['as'=>'mensajes.index','uses'=>'mensajesController@index']);