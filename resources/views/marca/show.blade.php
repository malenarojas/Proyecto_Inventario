@extends('layouts.app')
@section('titulo','index marca')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index">Datos de la marca</span>
                    <div class="row">
                        <div class="col m5 " ><p class="p-titulo" > ID:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$marca->id}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > DESCRIPCION:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$marca->descripcion}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
