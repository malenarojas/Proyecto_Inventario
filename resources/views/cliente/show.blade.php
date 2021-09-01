@extends('layouts.app')
@section('titulo','index cliente')
@section('contenido')
    <div>
        <span>Datos del Cliente</span>
        <div>
            <p>I.D {{$cliente->id}}</p>
            <p>NOMBRE:{{$cliente->nombre}}</p>
            <p>DIRECCION:{{$cliente->direccion}}</p>
            <p>TELEFONO:{{$cliente->telefono}}</p>
            <p>CORREO:{{$cliente->correo}}</p>

        </div>
    </div>
@endsection
