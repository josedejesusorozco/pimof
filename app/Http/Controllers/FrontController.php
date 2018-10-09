<?php

namespace Pimof\Http\Controllers;

use Illuminate\Http\Request;
use Pimof\Arbol;

class FrontController extends Controller
{
    public function index() {

    	$arbol = new Arbol();
    	$resultado = $arbol->cuenta_registros();

    	//dd($resultado[0]->registros);

    	return view('index')
    		->with('arboles', $resultado[0]->registros)
    		->with('modelos', $resultado[1]->registros)
    		->with('densidades', $resultado[2]->registros)
    		->with('fracciones', $resultado[3]->registros);
    }
}
