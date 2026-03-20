<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;
use App\Models\Pagina;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/hello',HomeController::class);
Route::get('post/mensaje',[PostController::class, 'Mensaje']);
Route::get('post/about/{param?}/{name?}', [PostController::class, 'About']);
Route::get('/empresa',[HomeController::class,'empresa'])->name('empresa');

Route::get('/', function () {
    return view('welcome');
})->name('vista_inicio');

// Definimos el método a utilizar
Route::get('nuevoregistro', function(){

    $pagina = new Pagina;
    $pagina->name = 'CARLOS';
    $pagina->email = 'maria4@gmail.com';
    $pagina->email_verified_at = date('Y-m-d');
    $pagina->password = '123456';
    $pagina->avatar = 'user.png';
    $pagina->telefono = '999999';
    $pagina->calle = '89';
    $pagina->save();

    return $pagina;

});

// Definimos el método para buscar por el id
// Para obtener unicamente un registro

Route::get('buscarpaginaid', function(){

    $post = Pagina::find(2);
    return $post;

});

// Definimo el método para buscar por un campo determinado

Route::get('buscarxname', function(){

    $post = Pagina::where('name', 'carlos')->first();
    return $post;

});

// Para recuperar más de un registro

Route::get('obtenertodos', function(){

    $post = Pagina::all();
    return $post;

});

// Definimos el método para cambiar un registro

Route::get('updatename', function(){

    $post = Pagina::where('name','CARLOS')->first();
    $post->email = 'agongoraescalante125@gmail.com';
    $post->save();

    return $post;

});

//Definimos un método para obtener una lista conforme a un criterio determinado
// Para obtener más de un registro

Route::get('filter', function(){
    //$post=Pagina::where('calle','like','%123%')->get();
    $post=Pagina::where('calle', 'like', '%123%')->orderBy("id", "desc")->get();
    return $post;
});

// Para especificar unicamente los campos que quiera
Route::get('trescampos', function(){
    $post=Pagina::select('name','email','telefono')->get();
    return $post;
});

// Conforme a una selección solamente traerme un cierto número de registros
Route::get('filtroxnumreg', function() {
    $post = Pagina::select("name", "email")->orderBy("name")->take(2)->get();
    return $post;
});

// Para eliminar un determinado registro
Route::get('eliminar_registro', function() {
    $post = Pagina::find(2);
    $post->delete();
    return "Eliminado";
});

// Obtener la fecha conforme a un formato
Route::get('Obtenerfechaformato', function() {
    $post = Pagina::select("name", "email", "created_at")->find(1);
    //return $post->created_at->format('d-m-Y');
    //return $post->created_at->format('d/m/Y');
    return $post;
});

// Obtener el valor de is_active
Route::get('Obtenerestatus', function() {
    $post = Pagina::find(1);
    
    // return $post->created_at->format('d-m-Y');
    // return $post->is_active;
    
    // dd función de depuración que muestra el contenido de una variable
    dd($post->is_active);
});

// El siguiente método se debe de llamar mediante un método de tipo request (por ejemplo,
// utilizando AJAX o Postman)
Route::put('/actualizar-dato/{id}', [HomeController::class, 'update'])->name('dato.update');

Route::put('/eliminar-logicamente-dato/{id}', [HomeController::class, 'eliminarLogicamenteDato'])
     ->name('dato.eliminarLogicamente');

     Route::delete('/eliminar-definitivo-dato/{id}', [HomeController::class, 'eliminarDefinitivo'])->name('dato.eliminarDefinitivo');

Route::get('/contact', function () {
    $nombre = "Alejandro Góngora Escalante";
    return view('contact', ['nombre' => $nombre,'carrera' => 'Doctor en Sistemas 
        Computacionales']);
})->name('contact');


