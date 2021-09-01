@extends('layouts.app')
@section('titulo','index users')
@section('contenido')
    <a class="btn btn-outline-success mb-3" href="{{route('users.create')}}" role="button">REGISTRAR</a>
    <span class="display-1">LISTA DE USUARIOS</span>
    <table class="table table-success table-striped">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">PERSONAL_ID</th>


        </tr>
        </thead>
        <tbody>
        @foreach($users as $users)
            <tr>

                <td>{{$users->id}}</td>
                <td>{{$users->name}}</td>
                <td>{{$users->email}}</td>
                <td>{{$users->password}}</td>
                <td>{{$users->personal_id}}</td>

                <td>
                    <a CLASS="btn btn-outline-info" href="{{route('users.show', $users->id)}}">show</a>
                    <a  class="btn btn-outline-secondary" href="{{route('users.edit',$users->id)}}">edit</a>
                    <a  class="btn btn-outline-danger" href="{{route('users.destroy',$users->id)}}">destroy</a>
                </td>
            </tr>

        @endforeach
        </tbody>
@endsection
