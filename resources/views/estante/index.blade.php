@extends('layouts.app')
@section('titulo','index estante')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('estante.create')}}">Registrate</a>
            <span>LISTA DE ESTANTE</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($estantes as $estante)
                    <tr>
                        <td>{{$estante->id}}</td>
                        <td>{{$estante->descripcion}}</td>
                        <td>
                            <a href="{{route('estante.show', $estante->id)}}">show</a>
                            <a href="{{route('estante.edit',$estante->id)}}">edit</a>
                            <a href="{{route('estante.destroy',$estante->id)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
