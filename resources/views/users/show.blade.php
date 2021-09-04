@extends('layouts.app')
@section('titulo','index users')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m10 offset-m3">
            <div class=" row card">
                <div class="card-content">
                    <span class="titulo-index" content="center">DATOS DEL USUARIO</span>
                    <div class="row">
                        <div class="col m5 " ><p class="p-titulo" > ID:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$users->id}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > NOMBRE:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$users->name}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > CORREO:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$users->email}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > PASSWORD:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$users->password}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > PERSONAL ID:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$users->personal_id}}</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
