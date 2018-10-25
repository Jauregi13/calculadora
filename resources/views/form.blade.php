<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

	<style type="text/css">
		#nombre {
			width: 200px;
		}
		.formulario {
			margin-left: 10px;
		}
		#nota {
			color: grey;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<h2><b>Reto Calculadora</b></h2>
	<div class="formulario">
	
		<form action="calculadora" method="get">
			<div class="form-group">
			    <label for="exampleInputPassword1">Introduce tu nombre</label>
			    <input type="text" name="nombre" class="form-control" placeholder="Nombre" id="nombre">
		  	</div>
			<label id="nota">El nombre introducido aparecerá en la calculadora</label>
	</div>
			<input type="submit" class="btn btn-primary" name="enviar" value="Enviar">
		</form>
	
</div>

</body>
</html>