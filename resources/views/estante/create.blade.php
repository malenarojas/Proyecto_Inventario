@extends('layouts.app')
@section('titulo','create estante')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('estante.store')}}">
                @csrf
                <span>REGISTRO DE ESTANTE</span>
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
                        <a href="{{route('estante.index')}}">Cancelar</a>
                    </div>

                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
