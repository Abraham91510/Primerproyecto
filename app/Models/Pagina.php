<?php

namespace App\Models;

use Iluminate\Database\Eloquent\Model;

class Pagina extends Model
{
    protected $table='paginas';
    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

}

