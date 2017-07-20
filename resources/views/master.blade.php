
<!DOCTYPE html>
<html>
<head>
	<title>Minisuper Rivas</title>
	<link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap.css")}}" >
	<script src="{{asset("js/jquery-3.2.1.js")}}"></script>

</head>
<body>

<div class="container">
  <div class="row">
	<div class="col-xs-12">
		@yield('contenido')
	</div>
  </div>
	
</div>
<footer class="text-center">
	Ing. Web &copy; 2017
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>