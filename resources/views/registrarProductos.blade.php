@extends('master')

@section('contenido')
<form action="{{url('guardarProductos')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
		<div class="form-group">
		<label for="precio">Precio:</label>
		<input type="text" class="form-control" name="precio" required>
	</div>
	<div class="form-group">
		<label for="descuento">Descuento:</label>
		<input type="number" class="form-control" name="descuento" required>
	</div>
	<div class="form-group">
		<label for="codigo">Codigo:</label>
		<input type="text" class="form-control" name="codigo" required>
		</select>
	</div>
	<div class="form-group">
		<label for="stock">Stock:</label>
		<input type="number" class="form-control" name="stock" required>
		</select>
	</div>

	<div class="form-group">
		<label for="proveedor">Proveedor:</label>
		<select name="proveedor" class="form-control">
			@foreach($proveedores as $c)
			<option value="{{$c->id}}">{{$c->nombre}}
				
			</option>
			@endforeach
			
		</select>
	</div>
	<div class="form-group">
		<label for="categoria">Categoria:</label>
		<select name="categoria" class="form-control">
			@foreach($categorias as $c)
			<option value="{{$c->id}}">{{$c->nombre}}
				
			</option>
			@endforeach
			
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Registar</button>
		<a href="{{url('/')}}" class="btn btm-danger">Cancelar</a>

	</div>

</form>
@stop