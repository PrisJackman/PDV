<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class empleadosController extends Controller
{
	public function login(){
		return view('login');
	}
	public function registrar(){
		return view('registrarEmpleado');
	}
}