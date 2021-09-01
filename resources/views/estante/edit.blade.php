@extends('layouts.app')
@section('titulo','edit estante')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <form  method="POST" action="{{route('estante.update',[$estante->id])}}">
                @csrf
                @method('PUT')
                <span class="titulo-index">  ACTUALIZANDO DATOS DEL ESTANTE</span>
                <div>
                    <div>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" value="{{$estante->descripcion}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <button  class="btn" type="submit">Guardar</button>
                        </div>
                        <div class="col s3 center">
                            <a class="btn" href="{{route('estante.index')}}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
