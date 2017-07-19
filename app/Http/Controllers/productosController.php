<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Productos;
use App\Proveedores;
use App\Categorias;
use DB;
class productosController extends Controller
{
    public function registrar(){
    	$proveedores=Proveedores::all();
    	$categorias=Categorias::all();
		return view ('registrarProductos',compact('proveedores','categorias'));
	}
	public function guardar(Request $datos)
	{
		$producto= new Productos();
		$producto->nombre=$datos->input('nombre');
		$producto->precio=$datos->input('precio');
		$producto->descuento=$datos->input('descuento');
		$producto->codigo=$datos->input('codigo');
		$producto->stock=$datos->input('stock');
		$producto->proveedor_id=$datos->input('proveedor');
		$producto->categoria_id=$datos->input('categoria');

		$producto->save();
	return redirect('/consultarProductos');
	}
public function consultar(){
	$productos=DB::table('productos')
	->join('proveedores','productos.proveedor_id','proveedores.id')
	->join('categorias','productos.categoria_id','categorias.id')
	->select('productos.*','proveedores.nombre AS nom_proveedor','categorias.nombre AS nom_categoria')
	->get();
	return view('consultarProductos',compact('productos'));
}
}
