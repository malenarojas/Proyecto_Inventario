@extends('layouts.app')
@section('titulo','index nacionalidad')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('nacionalidad.create')}}">Registrar</a>
            <span>LISTA DE NACIONALIDADES</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id nacionalidad</td>
                    <td>nombre_pais</td>
                </tr>
                </thead>
                <tbody>
                @foreach($nacionalidades as $nacionalidad)
                    <tr>
                        <td>{{$nacionalidad->id_nacionalidad}}</td>
                        <td>{{$nacionalidad->nombre_pais}}</td>
                        <td>
                            <a href="{{route('nacionalidad.show', $nacionalidad->id_nacionalidad)}}">show</a>
                            <a href="{{route('nacionalidad.edit',$nacionalidad->id_nacionalidad)}}">edit</a>
                            <a href="{{route('nacionalidad.destroy',$nacionalidad->id_nacionalidad)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$nacionalidades}}
        </div>
    </div>
@endsection
