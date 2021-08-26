@extends('layouts.app')
@section('titulo','index tipo perosnal')
@section('contenido')
    <div>
        <span>Datos del tipo personal</span>
        <div>
            <p>I.D {{$tipopersonal->id}}</p>
            <p>Descripcion:{{$tipopersonal->descripcion}}</p>
        </div>
    </div>
@endsection
