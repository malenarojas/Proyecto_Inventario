@extends('layouts.app')
@section('titulo','edit nacionalidad')
@section('contenido')

        <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
            <div class="col s12 m4 offset-m4 " >
        <div class="row card" style="padding: 20px; vertical-align: center">
        <form  method="POST" action="{{route('nacionalidad.update',[$nacionalidad->id_nacionalidad])}}">
            @csrf
            @method('PUT')
            <span class="titulo-index">  ACTUALIZANDO DATOS DE LA NACIONALIDAD</span>
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
                <div class="row">
                    <div class="col s6 center">
                        <button class="btn" type="submit">Guardar</button>
                    </div >
                    <div class="col s3 center">
                        <a class="btn" href="{{route('nacionalidad.index')}}">Cancelar</a>
                    </div>
                </div>
            </div>
        </form>
        </div>
            </div>
            <div class="col s12 m4">
            </div>
    </div>
        </div>
@endsection
