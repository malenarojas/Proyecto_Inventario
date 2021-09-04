@extends('layouts.app')
@section('titulo','index nacionalidad')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE NACIONALIDADES</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('nacionalidad.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrar</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12 ">
                <table class="table centered">
                    <thead>
                    <tr>
                        <th>ID NACIONALIDAD</th>
                        <th>NOMBRE PAIS</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($nacionalidades as $nacionalidad)
                        <tr>
                            <td>{{$nacionalidad->id_nacionalidad}}</td>
                            <td>{{$nacionalidad->nombre_pais}}</td>
                            <td>
                                <a href="{{route('nacionalidad.show', $nacionalidad->id_nacionalidad)}}" class=" btn-small dark-primary-color ">show</a>
                                <a href="{{route('nacionalidad.edit',$nacionalidad->id_nacionalidad)}}" class="btn-small orange">edit</a>
                                <a href="{{route('nacionalidad.destroy',$nacionalidad->id_nacionalidad)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
