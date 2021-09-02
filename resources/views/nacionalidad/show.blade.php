@extends('layouts.app')
@section('titulo','index nacionalidad')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index">Datos de la nacionalidad</span>
                    <div class="row">
                        <div class="col m5 " ><p class="p-titulo" > ID:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$nacionalidad->id_nacionalidad}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > NOMBRE PAIS:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$nacionalidad->nombre_pais}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
