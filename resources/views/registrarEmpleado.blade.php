@extends('master')
@section('contenido')
<body>
	<h2>Registrar Empleados</h2>
	<div class="">
	<form action="{{url('guardarEmpleados')}}") method="POST">
	<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label>Nombre:</label>
			<input type="text" name="nombre">
		</div>
		<div class="form-group">
			<label>Puesto:</label>
			<select name="puesto" id="puesto">
			<option value="0" selected=""> Cajero </option>
			<option value="1" > Administrador </option>
			<option value="2" > Gerente </option>
			<option value="3" > Jefe </option>
		</select>
		</div>
		<div class="form-group">
			<label>Usuario:</label>
			<input type="text" name="usuario">
		</div>
		<div class="form-group">
			<label>Contraseña:</label>
			<input type="password" name="clave">
		</div>
		<button type="erase" class="btn btn-danger">Cancelar</button>
		<button type="submit" class="btn btn-info">Registrar</button>
	</form>
</div>
</body>
@stop