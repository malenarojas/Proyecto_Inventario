@extends('layouts.app')
@section('titulo','edit area')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('area.update',[$area->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL AREA</span>
            <div>

                <div>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="{{$area->descripcion}}">
                    @error('descripcion')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('area.index')}}">Cancelar</a>
                </div>

            </div>
        </form>
    </div>
@endsection
