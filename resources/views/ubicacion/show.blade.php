@extends('layouts.app')
@section('titulo','index ubicacion')
@section('contenido')
    <div>
        <span>Datos de la ubicacion del producto</span>
        <div>
            <p>id ubicacion {{$ubicacion->id}}</p>
            <p>descripcion:{{$ubicacion->descripcion}}</p>
            <p>Area:{{$ubicacion->area_id}}</p>
            <p>Estante:{{$ubicacion->estante_id}}</p>
            <p>producto:{{$ubicacion->producto_codigo}}</p>
        </div>
    </div>
@endsection
