@extends('layouts.app')
@section('titulo','index marca')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('marca.create')}}">Registrate</a>
            <span>LISTA DE LAS MARCAS</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id marca</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($marcas as $marca)
                    <tr>
                        <td>{{$marca->id}}</td>
                        <td>{{$marca->descripcion}}</td>
                        <td>
                            <a href="{{route('marca.show', $marca->id)}}">show</a>
                            <a href="{{route('marca.edit',$marca->id)}}">edit</a>
                            <a href="{{route('marca.destroy',$marca->id)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
