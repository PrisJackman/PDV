@extends('master')

@section('contenido')
<table class="table table-striped">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Descuento</th>
			<th>Codigo</th>
			<th>Stock</th>
			
			<th>Categoria</th>
			<th>Opcciones</th>
			

		</tr>
		@foreach($productos as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->nombre}}</td>
			<td>{{$a->precio}}</td>
			<td>{{$a->descuento}}</td>
			<td>{{$a->codigo}}</td>
			<td>{{$a->stock}}</td>
			<td>{{$a->nom_categoria}}</td>
      	<td>
         

			<a href="{{url('/editarProductos')}}/{{$a->id}}"  class="btn btn-primary btn-xs">
				<span class="glyphicon-pencil" aria-hidden="true"></span>
			</a>

			<a href="{{url('/eliminarProductos')}}/{{$a->id}}" class="btn btn-primary btn-xs">
				<span class="glyphicon-remove" aria-hidden="true"></span>
				
			</a>
			
		</td>	
		</tr>

		@endforeach
	</thead>
</table>

@stop