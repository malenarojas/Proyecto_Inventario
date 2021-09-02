@extends('layouts.app')
@section('titulo','index personal')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index" content="center">Datos del Personal</span>
                        <div class="row">
                            <div class="col m6 " ><p class="p-titulo" >ID:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->id}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >NOMBRE:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->nombre}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >APELLIDO:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->apellido}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >CI:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->CI}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >TELEFONO:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->telefono}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >SEXO:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->sexo}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >DIRECCION:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->direccion}}</p></div>
                            <div class="col m6 " ><p class="p-titulo" >TIPO PERSONAL:</p></div>
                            <div class="col m6 "><p class="p-contenido">{{$personal->tipopersonal->cargo}}</p></div>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection
