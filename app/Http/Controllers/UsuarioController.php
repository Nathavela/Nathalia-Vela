<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function store (Request $request) 
    { 
        $params = $request->all(); 
        $usuario = Usuario::create([ 
        'nombre' =>$params['nombre'], 
        'edad' =>$params['edad'],   

   ] ); 

    return $usuario; 

    }

    public function index (Request $request) 
    { 
        $params = $request->all();
        $size = isset($params['size']) ? $params['size'] : 5;
        $usuarios = Usuario::where('nombre','>=', $params['nombre']) 
        ->limit($size)->get(); 

    return $usuarios; 

    } 
}
