@extends('layouts.app')
@section('titulo','index users')
@section('contenido')
    <div class="row">
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE USUARIOS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a class=" waves-effect waves-light btn-large dark-primary-color" href="{{route('users.create')}}" >REGISTRAR</a>
            </div>
        </div>
        <div class="row card" style="padding: 20px; vertical-align: center">
            <div class="col s12">
                <table class="table centeder">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">PERSONAL</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $users)
                        <tr>

                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->password}}</td>
                            <td>{{$users->personal->tipopersonal->cargo}}</td>

                            <td>
                                <a class=" btn-small dark-primary-color " href="{{route('users.show', $users->id)}}">show</a>

                                <a class="btn-small red" href="{{route('users.destroy',$users->id)}}">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
