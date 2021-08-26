@extends('layouts.app')
@section('titulo','create categoria')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('categoria.store')}}">
                @csrf
                <span>REGISTRO DE CATEGORIA</span>
                <div>
                    <div>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('categoria.index')}}">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
