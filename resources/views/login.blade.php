@extends('master')
@section('contenido')

<body>
	<div class="col-xs-6 col-md-offset-3" align="center" id="login">
	<form class="form-horizontal">
  <fieldset>
    <legend>Bienvenido</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Usuario</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Usuario">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password </label>
      <div class="col-lg-10">
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
      </div>
    </div>
		<a href="{{url('/registrarEmpleados')}}">Registrar Nuevo Empleado</a><br><br>
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Entrar</button>
      </div>
    </div>
  </fieldset>
</form>
</div>
</body>
@stop