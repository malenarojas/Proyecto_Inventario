@extends('layouts.app')
@section('titulo','edit marca')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('marca.update',[$marca->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DE LAS MARCAS</span>
            <div>

                <div>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="{{$marca->descripcion}}">
                    @error('descripcion')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('marca.index')}}">Cancelar</a>
                </div>

            </div>
        </form>
    </div>
@endsection
