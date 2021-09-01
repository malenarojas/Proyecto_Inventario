@extends('layouts.app')
@section('titulo','index area')
@section('contenido')
    <div>
        <span class="titulo-index">DATOS DEL AREA</span>
        <div>
            <p>I.D {{$area->id}}</p>
            <p>DESCRIPCION:{{$area->descripcion}}</p>
        </div>
    </div>
@endsection
