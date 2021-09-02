@extends('layouts.app')
@section('titulo','index proveedor')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index" content="center">Datos del proveedor</span>
                    <div class="row">
                        <div class="col m6 " ><p class="p-titulo" >ID:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$proveedor->id}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >NOMBRE:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$proveedor->nombre}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >DIRECCION:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$proveedor->direccion}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >TELEFONO:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$proveedor->telefono}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >CORREO:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$proveedor->correo}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
