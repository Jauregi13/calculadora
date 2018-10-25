<!DOCTYPE html>
<html>
<head>
	<title>Calculadora</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

	<style type="text/css">
		#numero1 {
			width: 600px;
		}
		#numero2 {
			width: 600px;
		}
		#resultado {
			margin-left:200px;
		}
		.boton {
			margin-left: 20px;
		}
	</style>
</head>
<body>
<div class="container-fluid">
	<div class="jumbotron">
	  <h1 class="display-4"><center>Calculadora de {{ $nombre }}</center></h1>
	</div>
	<div class="row">
		<div class="col-md-8">
			<form method="post" action="resultado">
				<div class="form-group">
					<label for="numero1">Número 1:</label>
					<input type="number" name="numero1" class="form-control" id="numero1">
				</div>
				<div class="form-group">
					<label for="numero1">Número 2:</label>
					<input type="number" name="numero2" class="form-control" id="numero2">
				</div>
				<input type="hidden" name="nombre" value="{{ $nombre }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<input type="submit" name="boton" value="sumar" class="btn btn-success">
				<input type="submit" name="boton" value="restar" class="btn btn-info boton">
				<input type="submit" name="boton" value="multiplicar" class="btn btn-secondary boton">
				<input type="submit" name="boton" value="dividir" class="btn btn-danger boton">
			</form>
		</div>
		<div class="col-md-4">
			<div id="resultado">
				<center><h2>Resultado:</h2></center>
				@if(isset($_POST['boton']))
					@if(!$error)

						<center><h3><b>{{$resultado}}</b></h3></center>

					@else
						<center>
							<h3><b>#ERROR</b></h3>
							<div class="alert alert-danger" role="alert">{{$error}}</div>
						</center>
						

					@endif

					
				@endif
			</div>
			

		</div>
	</div>
	

	
</div>
</body>
</html>