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
    	$categorias=Categorias::all();
		return view ('registrarProductos',compact('categorias'));
	}
	public function guardar(Request $datos)
	{
		$producto= new Productos();
		$producto->nombre=$datos->input('nombre');
		$producto->precio=$datos->input('precio');
		$producto->descuento=$datos->input('descuento');
		$producto->codigo=$datos->input('codigo');
		$producto->stock=$datos->input('stock');
		$producto->categoria_id=$datos->input('categoria');

		$producto->save();
	return redirect('/consultarProductos');
	}
public function consultar(){
	$productos=DB::table('productos')
	->join('categorias','productos.categoria_id','categorias.id')
	->select('productos.*','categorias.nombre AS nom_categoria')
	->get();
	return view('consultarProductos',compact('productos'));
}
public function eliminar($id){
	$producto=Productos::find($id);
	$producto->delete();
	return redirect('consultarProductos');
}
public function editar($id){
	$producto=DB::table('productos')
	->where('productos.id','=',$id)
	->join('categorias','productos.categoria_id','categorias.id')
	->select('productos.*','categorias.nombre AS nom_categoria')
	->first();
	$categorias=Categorias::all();
	return view('editarProductos',compact('producto','categorias'));

}
public function actualizar($id,Request $datos){
	$producto=Productos::find($id);
	$producto->nombre=$datos->input('nombre');
		$producto->precio=$datos->input('precio');
		$producto->descuento=$datos->input('descuento');
		$producto->codigo=$datos->input('codigo');
		$producto->stock=$datos->input('stock');
		$producto->categoria_id=$datos->input('categorias');
		$producto->save();
		return redirect('consultarProductos');

}
}
