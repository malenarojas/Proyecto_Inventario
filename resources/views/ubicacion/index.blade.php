@extends('layouts.app')
@section('titulo','index ubicacion')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('ubicacion.create')}}">Registrate</a>
            <span>LISTA DE UBICACION</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id</td>
                    <td>Descripcion</td>
                    <td>area id</td>
                    <td>estante id</td>
                    <td>producto codigo</td>
                </tr>
                </thead>
                <tbody>
                @foreach($ubicaciones as $ubicacion)
                    <tr>
                        <td>{{$ubicacion->id}}</td>
                        <td>{{$ubicacion->descripcion}}</td>
                        <td>{{$ubicacion->area_id}}</td>
                        <td>{{$ubicacion->estante_id}}</td>
                        <td>{{$ubicacion->producto_codigo}}</td>
                        <td>
                            <a href="{{route('ubicacion.show', $ubicacion->id)}}">show</a>
                            <a href="{{route('ubicacion.edit',$ubicacion->id)}}">edit</a>
                            <a href="{{route('ubicacion.destroy',$ubicacion->id)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
