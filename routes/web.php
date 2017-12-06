<?php

Route::get('/',['as'=>'home','uses'=>'PagesController@home']);

Route::get('mensajes/create',['as'=>'mensajes.create','uses'=>'mensajesController@create']);
Route::post('mensajes',['as'=>'mensajes.store','uses'=>'mensajesController@store']);
Route::get('mensajes',['as'=>'mensajes.index','uses'=>'mensajesController@index']);
Route::get('mensajes/{id}',['as'=>'mensajes.show','uses'=>'mensajesController@show']);
Route::get('mensajes/{id}/edit',['as'=>'mensajes.edit','uses'=>'mensajesController@edit']);
Route::put('mensajes/{id}',['as'=>'mensajes.update','uses'=>'mensajesController@update']);
Route::delete('mensajes/{id}',['as'=>'mensajes.destroy','uses'=>'mensajesController@destroy']);

Route::get('login',['as'=>'login','uses'=>'Auth\LoginController@showLoginForm']);
Route::post('login','Auth\LoginController@login');
Route::get('logout','Auth\LoginController@logout');

Route::post('send',['as'=>'send','uses'=>'mailController@send']);
Route::get('email','mailController@email');


Route::get('voluntarios/create',['as'=>'voluntarios.create','uses'=>'VoluntarioController@create']);
Route::post('voluntarios',['as'=>'voluntarios.store','uses'=>'VoluntarioController@store']);
Route::get('voluntarios',['as'=>'voluntarios.index','uses'=>'VoluntarioController@index']);
Route::get('voluntarios/{id}/edit',['as'=>'voluntarios.edit','uses'=>'VoluntarioController@edit']);
Route::put('voluntarios/{id}',['as'=>'voluntarios.update','uses'=>'VoluntarioController@update']);
Route::delete('voluntarios/{id}',['as'=>'voluntarios.destroy','uses'=>'VoluntarioController@destroy']);

/*
Route::get('test',function(){
	$user = new App\User;
	$user->name = 'Admin';
	$user->email = 'admin@email.cl';
	$user->password = bcrypt('123');
	$user->save();

	return $user;

});
*/