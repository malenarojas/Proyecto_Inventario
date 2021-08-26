@extends('layouts.app')
@section('titulo','index area')
@section('contenido')
    <a class="btn btn-outline-success mb-3" href="{{route('area.create')}}" role="button">REGISTRAR</a>
    <span class="display-1">LISTA DE AREAS</span>
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
                    <a CLASS="btn btn-outline-info" href="{{route('area.show', $area->id)}}">show</a>
                    <a  class="btn btn-outline-secondary" href="{{route('area.edit',$area->id)}}">edit</a>
                    <a  class="btn btn-outline-danger" href="{{route('area.destroy',$area->id)}}">destroy</a>
                </td>

            </tr>

        @endforeach
        </tbody>
    </table>
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('area.create')}}">Registrate</a>
            <span>LISTA DE AREAS</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id</td>
                    <td>Descripcion</td>
                </tr>
                </thead>
                <tbody>
                @foreach($areas as $area)
                    <tr>
                        <td>{{$area->id}}</td>
                        <td>{{$area->descripcion}}</td>
                        <td>
                            <a href="{{route('area.show', $area->id)}}">show</a>
                            <a href="{{route('area.edit',$area->id)}}">edit</a>
                            <a href="{{route('area.destroy',$area->id)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>

        </div>

    </div>
@endsection
