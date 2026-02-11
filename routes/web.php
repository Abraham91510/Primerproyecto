<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;

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

Route::get('/contact', function () {
    $nombre = "Alejandro Góngora Escalante";
    return view('contact', ['nombre' => $nombre,'carrera' => 'Doctor en Sistemas 
        Computacionales']);
})->name('contact');


