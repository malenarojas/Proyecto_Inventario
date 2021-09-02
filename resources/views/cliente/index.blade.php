@extends('layouts.app')
@section('titulo','index cliente')
@section('contenido')
    <ul></ul>
    <a class="btn btn-outline-success mb-3" href="{{route('cliente.create')}}" role="button">REGISTRAR</a>
    <span class="display-1">LISTA DE CLIENTE</span>
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">CORREO</th>
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
                    <a CLASS="btn btn-outline-info" href="{{route('cliente.show', $cliente->id)}}">show</a>
                    <a  class="btn btn-outline-secondary" href="{{route('cliente.edit',$cliente->id)}}">edit</a>
                    <a  class="btn btn-outline-danger" href="{{route('cliente.destroy',$cliente->id)}}">destroy</a>
                </td>
            </tr>

        @endforeach
        </tbody>
    </table>
@endsection
