@extends('layouts.app')
@section('titulo','index personal')
@section('contenido')
    <div class="row">
        <div class="col s12">
            <div class="divider"></div>
        </div >
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE PERSONAL</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a class="btn btn-large dark-primary-color-text" href="{{route('personal.create')}}" role="button">REGISTRAR</a>
            </div>
        </div>
        <div class="row card">
            <div col s12>
                <table class="tablecenteder">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">CI</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">SEXO</th>
                        <th scope="col">DIRECCION</th>
                        <th scope="col">TIPO PERSONAL</th>
                        <th scope="col">ACCIONES</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($personales as $personal)
                        <tr>

                            <td>{{$personal->id}}</td>
                            <td>{{$personal->nombre}}</td>
                            <td>{{$personal->apellido}}</td>
                            <td>{{$personal->CI}}</td>
                            <td>{{$personal->telefono}}</td>
                            <td>{{$personal->sexo}}</td>
                            <td>{{$personal->direccion}}</td>
                            <td>{{$personal->tipopersonal->cargo}}</td>
                            <td>
                                <a CLASS="btn btn-outline-info" href="{{route('personal.show', $personal->id)}}">show</a>
                                <a  class="btn btn-outline-secondary" href="{{route('personal.edit',$personal->id)}}">edit</a>
                                <a  class="btn btn-outline-danger" href="{{route('personal.destroy',$personal->id)}}">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>



@endsection
