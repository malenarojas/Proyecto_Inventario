@extends('layouts.app')
@section('titulo','index categoria')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('categoria.create')}}">Registrate</a>
            <span>LISTA DE CATEGORIAS</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id categoria</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td>{{$categoria->id}}</td>
                        <td>{{$categoria->descripcion}}</td>
                        <td>
                            <a href="{{route('categoria.show',$categoria->id)}}">show</a>
                            <a href="{{route('categoria.edit',$categoria->id)}}">edit</a>
                            <a href="{{route('categoria.destroy',$categoria->id)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
