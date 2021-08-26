@extends('layouts.app')
@section('titulo','index area')
@section('contenido')
    <div>
        <span>Datos del Area</span>
        <div>
            <p>I.D {{$area->id}}</p>
            <p>Descripcion:{{$area->descripcion}}</p>
        </div>
    </div>
@endsection
