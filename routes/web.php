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