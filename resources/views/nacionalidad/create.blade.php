@extends('layouts.app')
@section('titulo','create nacionalidad')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('nacionalidad.store')}}">
                @csrf
                <span>REGISTRO DE NACIONALIDAD</span>
                <div>
                    <div>
                        <label for="id_nacionalidad">id nacionalidad:</label>
                        <input type="text" id="id_nacionalidad" name="id_nacionalidad" value="{{old('id_nacionalidad')}}">
                        @error('id_nacionalidad')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nombre_pais">Nombre pais:</label>
                        <input type="text" id="nombre_pais" name="nombre_pais" value="{{old('nombre_pais')}}">
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
        <div class="col s12 m4">
        </div>
    </div>
@endsection
