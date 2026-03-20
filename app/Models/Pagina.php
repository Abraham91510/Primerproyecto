<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Pagina extends Model
{
    protected $table='paginas';



    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }



// Creamos un atributo mediante cast para el guardado y la obtención de los datos
protected function casts(): array
{
    return [
        'created_at' => 'datetime:d-m-Y',
        'is_active' => 'boolean'
    ];
}

protected function name(): Attribute
{
    return Attribute::make(
        set: function ($value) { // Mutador
            return strtolower($value);
        },
        get: function ($value) { // Accesor
            return ucfirst($value);
        }
    );

}
public function BuscarId($id){
    $registro = Pagina::find($id);
    return $registro;
}



}