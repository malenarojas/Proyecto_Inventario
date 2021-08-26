@extends('layouts.app')
@section('titulo','index personal')
@section('contenido')
    <div>
        <span>Datos del Personal</span>
        <div>
            <p>I.D {{$personal->id}}</p>
            <p>NOMBRE:{{$personal->nombre}}</p>
            <p>APELLIDO:{{$personal->apellido}}</p>
            <p>C.I:{{$personal->CI}}</p>
            <p>TELEFONO:{{$personal->telefono}}</p>
            <p>SEXO:{{$personal->sexo}}</p>
            <p>DIRECCION:{{$personal->direccion}}</p>
            <p>TIPO PERSONAL:{{$personal->tipopersonal_id}}</p>
        </div>
    </div>
@endsection
