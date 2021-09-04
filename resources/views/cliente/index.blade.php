@extends('layouts.app')
@section('titulo','index cliente')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE CLIENTES</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a  class=" waves-effect waves-light btn-large dark-primary-color" href="{{route('cliente.create')}}" >REGISTRAR</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12">
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
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->direccion}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->correo}}</td>
                            <td>
                                <a  href="{{route('cliente.show', $cliente->id)}}" class="btn-small dark-primary-color">show</a>
                                <a   href="{{route('cliente.edit',$cliente->id)}}" class="btn-small orange">edit</a>
                                <a  href="{{route('cliente.destroy',$cliente->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
