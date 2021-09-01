{{--@extends('layouts.app')
@section('titulo','index cliente')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('cliente.create')}}">Registrate</a>
            <span>LISTA DE CLIENTES</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id_cliente</td>
                    <td>nombre</td>
                    <td>direccion</td>
                    <td>telefono</td>
                    <td>correo</td>
                    <td>Acciones</td>

                </tr>
                </thead>
                <tbody>
                @foreach($cliente as $cliente)
                    <tr>
                        <td>{{$cliente->id_cliente}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>
                            <a href="{{route('cliente.show',$cliente->id_cliente)}}">show</a>
                            <a href="{{route('cliente.edit',$cliente->id_cliente)}}">edit</a>
                            <a href="{{route('cliente.destroy',$cliente->id_cliente)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection--}}

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
        @foreach($cliente as $cliente)
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
@endsection
