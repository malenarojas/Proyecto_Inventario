@extends('layouts.app')
@section('titulo','index marca')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE LAS MARCAS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('marca.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrate</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12">
                <table class="table centered">
                    <thead>
                    <tr>
                        <th>ID MARCA</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marcas as $marca)
                        <tr>
                            <td>{{$marca->id}}</td>
                            <td>{{$marca->descripcion}}</td>
                            <td>
                                <a href="{{route('marca.show', $marca->id)}}" class=" btn-small dark-primary-color ">show</a>
                                <a href="{{route('marca.edit',$marca->id)}}" class="btn-small orange">edit</a>
                                <a href="{{route('marca.destroy',$marca->id)}}"  class="btn-small red">destroy</a>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>


    </div>
@endsection
