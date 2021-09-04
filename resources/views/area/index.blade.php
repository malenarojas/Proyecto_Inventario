@extends('layouts.app')
@section('titulo','index area')
@section('contenido')
    <div class="row">
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE AREAS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a  href="{{route('area.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">REGISTRAR</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12">
                <table class="table table-success table-striped">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">ACCION</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($areas as $area)
                        <tr>
                            <td>{{$area->id}}</td>
                            <td>{{$area->descripcion}}</td>
                            <td>
                                <a  href="{{route('area.show', $area->id)}}" class="btn-small dark-primary-color ">show</a>
                                <a  href="{{route('area.edit',$area->id)}}" class="btn-small orange">edit</a>
                                <a  href="{{route('area.destroy',$area->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
