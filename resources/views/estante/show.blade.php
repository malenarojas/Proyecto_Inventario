@extends('layouts.app')
@section('titulo','index estante')
@section('contenido')
    <div>
        <span>Datos del estante</span>
        <div>
            <p>I.D {{$estante->id}}</p>
            <p>Descripcion:{{$estante->descripcion}}</p>
        </div>
    </div>
@endsection
