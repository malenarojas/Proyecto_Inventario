@extends('layouts.app')
@section('titulo','index tipopersonal')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index" content="center">Datos del tipo personal</span>
                    <div class="row">
                        <div class="col m6 " ><p class="p-titulo" >ID:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$tipopersonal->id}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" >CARGO:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$tipopersonal->cargo}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
