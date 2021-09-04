@extends('layouts.app')
@section('titulo','index tipo personal')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE TIPOS PERSONAL</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('tipopersonal.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrate</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12 ">
                <table class="table centered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CARGO</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipopersonales as $tipopersonal)
                        <tr>
                            <td>{{$tipopersonal->id}}</td>
                            <td>{{$tipopersonal->cargo}}</td>
                            <td>
                                <a href="{{route('tipopersonal.show',$tipopersonal->id)}}"class=" btn-small dark-primary-color ">show</a>
                                <a href="{{route('tipopersonal.edit',$tipopersonal->id)}}" class="btn-small orange">edit</a>
                                <a href="{{route('tipopersonal.destroy',$tipopersonal->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
