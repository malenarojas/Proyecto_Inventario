@extends('layouts.app')
@section('titulo','index estante')
@section('contenido')
    <div>
        <span class="titulo-index">DATOS DEL ESTANTE </span>
        <div>
            <p>I.D {{$estante->id}}</p>
            <p>Descripcion:{{$estante->descripcion}}</p>
        </div>
    </div>
@endsection
