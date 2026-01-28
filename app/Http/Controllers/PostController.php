<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function Mensaje(){
        return "Hola desde el controlador de
        PostController";
    }    

    public function About($param=null,$nombre=null){
        $datos=['parametro'=>$param, 'nombre'=>$nombre];
        return view('about', $datos);
        //return view('about', compact('param', 'nombre'));
    }

    public function Contacto(){
        return view('contacto', ['mensaje'=>"Esto es un 
        mensaje"]);
    }    

}