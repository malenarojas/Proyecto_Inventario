@extends('layouts.app')
@section('titulo','index proveedor')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('proveedor.create')}}">Registrate</a>
            <span>LISTA DE PROVEEDORES</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id</td>
                    <td>nombre</td>
                    <td>direccion</td>
                    <td>telefono</td>
                    <td>correo</td>
                    <td>Acciones</td>

                </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{$proveedor->id}}</td>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td>{{$proveedor->telefono}}</td>
                        <td>{{$proveedor->correo}}</td>
                        <td>
                            <a href="{{route('proveedor.show',$proveedor->id)}}">show</a>
                            <a href="{{route('proveedor.edit',$proveedor->id)}}">edit</a>
                            <a href="{{route('proveedor.destroy',$proveedor->id)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
