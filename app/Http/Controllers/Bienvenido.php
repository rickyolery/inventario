<?php

namespace inventario\Http\Controllers;

use Illuminate\Http\Request;

use inventario\Http\Requests;

class Bienvenido extends Controller
{
    //
   	public function __construct(){
		$this->middleware('guest');

	}

	public function index(){
		return view('welcome');
	}

}
