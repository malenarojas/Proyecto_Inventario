@extends('layouts.app')
@section('titulo','index categoria')
@section('contenido')
    <div>
        <span>Datos de las categorias</span>
        <div>
            <p>I.D {{$categoria->id}}</p>
            <p>Descripcion:{{$categoria->descripcion}}</p>
        </div>
    </div>
@endsection
