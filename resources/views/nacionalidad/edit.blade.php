@extends('layouts.app')
@section('titulo','edit nacionalidad')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('nacionalidad.update',[$nacionalidad->id_nacionalidad])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DE LA NACIONALIDAD</span>
            <div>
                <div>
                    <label for="id_nacionalidad">id nacionalidad:</label>
                    <input type="text" id="id_nacionalidad" name="id_nacionalidad" value="{{$nacionalidad->id_nacionalidad}}">
                    @error('id_nacionalidad')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="nombre_pais">Nombre pais:</label>
                    <input type="text" id="nombre_pais" name="nombre_pais" value="{{$nacionalidad->nombre_pais}}">
                    @error('nombre_pais')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('nacionalidad.index')}}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
