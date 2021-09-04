@extends('layouts.app')
@section('titulo','index categoria')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE CATEGORIAS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('categoria.create')}}" class="waves-effect waves-light btn-large dark-primary-color">Registrar</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12 ">
                <table class="table centeder">
                    <thead>
                    <tr>
                        <th>ID CATEGORIA</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->descripcion}}</td>
                            <td>
                                <a href="{{route('categoria.show',$categoria->id)}}" class=" btn-small dark-primary-color ">show</a>
                                <a href="{{route('categoria.edit',$categoria->id)}}" class="btn-small orange">edit</a>
                                <a href="{{route('categoria.destroy',$categoria->id)}}" class="btn-small red">destroy</a>
                            </td>

                        </tr>

                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>


    </div>
@endsection
