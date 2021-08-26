@extends('layouts.app')
@section('titulo','index nacionalidad')
@section('contenido')
    <div>
        <span>Datos de la nacionalidad</span>
        <div>
            {{$nacionalidad}}
            <p>id nacionalidad {{$nacionalidad->id_nacionalidad}}</p>
            <p>Nombre pais:{{$nacionalidad->nombre_pais}}</p>
        </div>
    </div>
@endsection
