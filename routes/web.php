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

/*
Route::get('test',function(){
	$user = new App\User;
	$user->name = 'Jorge';
	$user->email = 'jorge@email.cl';
	$user->password = bcrypt('123');
	$user->save();

	return $user;

});
*/