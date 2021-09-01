@extends('layouts.app')
@section('titulo','edit area')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <form  method="POST" action="{{route('area.update',[$area->id])}}">
                @csrf
                @method('PUT')
                <span class="titulo-index">  ACTUALIZANDO DATOS DEL AREA</span>
                <div>
                    <div>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" value="{{$area->descripcion}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div >
                        <div class="col s3 center">
                            <a class="btn" href="{{route('area.index')}}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
