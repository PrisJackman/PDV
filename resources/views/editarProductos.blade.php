@extends('master')
@section('contenido')
<form action="{{url('/actualizarProductos')}}/{{$producto->id}}" method="POST" class="col-xs-6 col-md-offset-4">
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
		<label for="categoria">Categoria:</label>
		<select name="categoria" class="form-control">
			
			<option value="{{$producto->categoria_id}}">{{$producto->nom_categoria}}</option>
			@foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->nombre}}</option>
			@endforeach
			
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btm-danger">Cancelar</a>

	</div>

</form>
@stop