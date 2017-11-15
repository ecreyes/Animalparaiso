<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function contacto(){
    	return view('contacto');
    }

    public function mensaje(Request $request){
    	return $request->all();
    }
}
