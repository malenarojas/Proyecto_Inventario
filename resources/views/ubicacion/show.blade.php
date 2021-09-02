@extends('layouts.app')
@section('titulo','index ubicacion')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index">Datos de la ubicacion del producto</span>
                    <div class="row">
                        <div class="col m3 " ><p class="p-titulo" > ID:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$ubicacion->id}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > DESCRIPCION:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$ubicacion->descripcion}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" >AREA:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$ubicacion->area->descripcion}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > ESTANTE:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$ubicacion->estante->descripcion}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > PRODUCTO:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$ubicacion->producto->nombre}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
