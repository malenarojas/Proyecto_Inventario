@extends('layouts.app')
@section('titulo','create proveedor')
@section('contenido')
    <div>
        <span>DATOS DEL PROVEEDOR</span>
            <div>
                <p>I.D:{{$proveedores->id}}</p>
                <p>NOMBRE:{{$proveedores->nombre}}</p>
                <p>DIRECCION:{{$proveedores->direccion}}</p>
                <p>TELEFONO:{{$proveedores->telefono}}</p>
                <p>CORREO:{{$proveedores->correo}}</p>

            </div>
    </div>
@endsection
