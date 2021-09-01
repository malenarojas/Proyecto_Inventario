@extends('layouts.app')
@section('titulo','index estante')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE ESTANTES</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('estante.create')}}" class="btn btn-large">Registrate</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12">
                <table class="striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>DESCRIPCION </th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estantes as $estante)
                        <tr>
                            <td>{{$estante->id}}</td>
                            <td>{{$estante->descripcion}}</td>
                            <td>
                                <a href="{{route('estante.show', $estante->id)}}" class="btn-small">show</a>
                                <a href="{{route('estante.edit',$estante->id)}}" class="btn-small orange">edit</a>
                                <a href="{{route('estante.destroy',$estante->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>


    </div>
@endsection
