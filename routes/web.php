<?php

Route::get('/',['as'=>'home',function () {
    return view("home");
}]);


Route::get('contacto',['as'=>'contacto',function () {
    return view('contacto');
}]);

