<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    public function mostrarCalculadora(Request $request)
    {
    	$nombre = $request -> input("nombre");

    	return view('calculadora', ['nombre' => $nombre]);
    }
}
