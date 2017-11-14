<?php

Route::get('/',['as'=>'home','uses'=>'PagesController@home']);
Route::get('contacto',['as'=>'contacto','uses'=>'PagesController@contacto']);
Route::post('contacto','PagesController@mensaje');