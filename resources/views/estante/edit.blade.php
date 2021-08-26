@extends('layouts.app')
@section('titulo','edit estante')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('estante.update',[$estante->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL ESTANTE</span>
            <div>

                <div>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="{{$estante->descripcion}}">
                    @error('descripcion')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('estante.index')}}">Cancelar</a>
                </div>

            </div>
        </form>
    </div>
@endsection
