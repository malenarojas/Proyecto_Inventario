@extends('layouts.app')
@section('titulo','index estante')
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
                    <span class="titulo-index">DATOS DEL ESTANTE </span>
                    <div class="row">
                        <div class="col m5 " ><p class="p-titulo" > ID:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$estante->id}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > DESCRIPCION:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$estante->descripcion}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
