@extends('layouts.app')
@section('titulo','index marca')
@section('contenido')
    <div>
        <span>Datos de las marcas</span>
        <div>
            <p>I.D {{$marca->id}}</p>
            <p>Descripcion:{{$marca->descripcion}}</p>
        </div>
    </div>
@endsection
