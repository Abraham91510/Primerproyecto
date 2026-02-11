@extends('layouts.app')
@section('titulopagina', 'Empresa E-Commerce')
@push('css')
    <style>
        .fondo{
            background: #302886;
        }    
        
        .img-responsive{
            width: 100%;
            height:100%;
        }
    </style>
@endpush

@section('titulo')
    Bienvenido a la página de EC
@endsection

@section('subtitulo')
    Explorando las oportunidades con Laravel 12
@endsection

@section('link1', 'Active')
@section('titulo1')
    <h1>About Me</h1>
@endsection

@section("descripcion_about")
    {{$descripcion_about}}
@endsection

@section("Autor")
    {{$nombre}}
@endsection

@section("actividad",$actividad)
@section ("texto_ejemplo")
    {{$texto_ejemplo}}
@endsection

@section("contenido_listado")
    <h2>Listado de Usuarios Registrados</h2>
    
@endsection

