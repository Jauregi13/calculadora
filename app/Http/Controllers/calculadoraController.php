<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
	public function calcular(Request $request)
	{
		$numero1 = $request -> input("numero1");
		$numero2 = $request -> input("numero2");
		$nombre = $request -> input("nombre");
		$boton = $request -> input("boton");
		$error = '';
		

		switch ($boton) {
			case 'sumar':
			if($numero1 == '' || $numero2 == ''){
				$error = 'No has metido todos los valores';
			}
			else{
				$resultado = $numero1 + $numero2;
			}
				break;
			
			case 'restar':
				if($numero1 == '' || $numero2 == ''){
					$error = 'No has metido todos los valores';
				}
				else{
					$resultado = $numero1 - $numero2;
				}
				
				break;
			
			case 'dividir':
				if($numero1 == '' || $numero2 == ''){
					$error = 'No has metido todos los valores';
				}
				else if($numero2 == 0){
					$error = 'No se puede dividir por 0';
				}
				else{
					$resultado = $numero1 / $numero2;
				}
				
				break;
			
			case 'multiplicar':
				if($numero1 == '' || $numero2 == ''){
					$error = 'No has metido todos los valores';
				}
				else{
					$resultado = $numero1 * $numero2;
				}
				
				break;
			
			default:

				break;
		}

		if($error == null){
			return view('calculadora',['resultado' => $resultado, 'error' => false, 'nombre' => $nombre]);
		}
		else{
			return view('calculadora',['error' => $error, 'nombre' => $nombre]);
		}

		


	}
}
