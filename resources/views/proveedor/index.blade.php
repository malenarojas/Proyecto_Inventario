@extends('layouts.app')
@section('titulo','index proveedor')
@section('contenido')
    <div class="row" >
        <div class="col s12">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE PROVEEDORES</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('proveedor.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrate</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12 ">
                <table class="table centered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>DIRECCION</th>
                        <th>TELEFONO</th>
                        <th>CORREO </th>
                        <th>ACCIONES</th>
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
                                <a href="{{route('proveedor.show',$proveedor->id)}}" class="btn-small dark-primary-color">show</a>
                                <a href="{{route('proveedor.edit',$proveedor->id)}}" class="btn-small orange">edit</a>
                                <a href="{{route('proveedor.destroy',$proveedor->id)}}"class="btn-small red">destroy</a>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>


    </div>
@endsection
