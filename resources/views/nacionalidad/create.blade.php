@extends('layouts.app')
@section('titulo','create nacionalidad')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3 " >
            <div>  <div class="row card" style="padding: 20px; vertical-align: center">
            <form  method="POST" action="{{route('nacionalidad.store')}}">
                @csrf
                <span class="titulo-index">REGISTRO DE NACIONALIDAD</span>
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
                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div>
                        <div class="col s6 center">
                            <a  class="btn" href="{{route('nacionalidad.index')}}">Cancelar</a>
                        </div>

                </div>
            </form>
                </div>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
