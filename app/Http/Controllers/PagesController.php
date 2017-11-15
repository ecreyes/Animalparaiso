<?php

namespace App\Http\Controllers;
//se importa la clase que maneja las validaciones de este contrlador
use App\Http\Requests\MensajeRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function contacto(){
    	return view('contacto');
    }

    public function mensaje(MensajeRequest $request){
    	return $request->all();
    }
}
