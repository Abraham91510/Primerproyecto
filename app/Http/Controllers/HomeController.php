<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagina;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\DataTables;


class HomeController extends Controller
{
    public function __invoke(){
        return view ('hello');
    }

    public function empresa(){
        $datos["nombre"]="Carlos Abraham Ojeda Pereira";
        $datos["fecha"]="2026-12-15";
        $datos["actividad"]="Desarrollo de Software";
        $datos["descripcion_about"]="Empresa dedicada al desarrollo de software a la medida de sus clientes";
        $datos["texto_ejemplo"]="Aquí va la descripción del texto de ejemplo";

        $usuarios=new Pagina();
        $datos["listadousuarios"]=$usuarios->ObtenerListado();
        return view('empresa', $datos);
    }

    public function update(Request $request)
{
    $usuarios = new Pagina();
    $respuesta = $usuarios->BuscarId($request->id);

    if (!empty($respuesta)) {
        $respuesta->name = $request->name;
        $respuesta->calle = $request->calle;
        $respuesta->save();
    }

    return $respuesta;
}

public function eliminarLogicamenteDato(Request $request)
{
    // Crear instancia del modelo
    $usuarios = new Pagina();

    // Usar el método BuscarId para obtener el registro
    $respuesta = $usuarios->BuscarId($request->id);

    if (!empty($respuesta)) {
        // Alternar entre activo (1) e inactivo (0)
        $respuesta->is_active = $respuesta->is_active ? 0 : 1;
        $respuesta->save();
    }

    // Redirige a la vista de empresa
    return redirect()->route('empresa');
}

public function eliminarDefinitivo($id)
{
    $usuarios = new Pagina();
    $registro = $usuarios->BuscarId($id);

    if(!empty($registro)){
        $registro->delete(); // elimina definitivamente
    }

    return redirect()->route('empresa');
}




}

