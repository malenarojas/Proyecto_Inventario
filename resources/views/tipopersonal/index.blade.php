@extends('layouts.app')
@section('titulo','index tipo personal')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('tipopersonal.create')}}">Registrate</a>
            <span>LISTA DE TIPOS PERSONAL</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id</td>
                    <td>Cargo</td>
                </tr>
                </thead>
                <tbody>
                @foreach($tipopersonales as $tipopersonal)
                    <tr>
                        <td>{{$tipopersonal->id}}</td>
                        <td>{{$tipopersonal->cargo}}</td>
                        <td>
                            <a href="{{route('tipopersonal.show',$tipopersonal->id)}}">show</a>
                            <a href="{{route('tipopersonal.edit',$tipopersonal->id)}}">edit</a>
                            <a href="{{route('tipopersonal.destroy',$tipopersonal->id)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
