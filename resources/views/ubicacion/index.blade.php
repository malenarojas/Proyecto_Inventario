@extends('layouts.app')
@section('titulo','index ubicacion')
@section('contenido')
    <div class="row" >
            <div class="row">
                <div class="divider"></div>
            </div>
            <div class="row">
                <div class="col s12">
                    <span class="titulo-index">LISTA DE UBICACION</span>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <a href="{{route('ubicacion.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrar</a>
                </div>
            </div>
            <div class="row card" style="padding: 20px; vertical-align: center">
                <div class="col s12">
                    <table class="table centered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>DESCRIPCION</th>
                            <th>AREA</th>
                            <th >ESTANTE</th>
                            <th>PRODUCTO</th>
                            <th>ACCIONES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ubicaciones as $ubicacion)
                            <tr>
                                <td>{{$ubicacion->id}}</td>
                                <td>{{$ubicacion->descripcion}}</td>
                                <td>{{$ubicacion->area->descripcion}}</td>
                                <td>{{$ubicacion->estante->descripcion}}</td>
                                <td>{{$ubicacion->producto->nombre}}</td>
                                <td>
                                    <a href="{{route('ubicacion.show', $ubicacion->id)}}" class="btn small">show</a>
                                    <a href="{{route('ubicacion.edit',$ubicacion->id)}}" class="btn small orange">edit</a>
                                    <a href="{{route('ubicacion.destroy',$ubicacion->id)}}" class="btn small red">destroy</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
    </div>
@endsection
