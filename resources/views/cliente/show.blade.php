@extends('layouts.app')
@section('titulo','index cliente')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index" content="center">Datos del cliente</span>
                    <div class="row">
                        <div class="col m6 " ><p class="p-titulo" >ID:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$cliente->id}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >NOMBRE:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$cliente->nombre}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >DIRECCION:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$cliente->direccion}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >TELEFONO:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$cliente->telefono}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >correo:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$cliente->correo}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

