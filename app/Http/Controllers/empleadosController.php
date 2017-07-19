<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empleados;

class empleadosController extends Controller
{
	public function login(){
		$empleados=Empleados::all();
		return view('login' ,compact('empleados'));
		
	}
	public function registrar(){
		return view('registrarEmpleado');
	}

}