@extends('layouts.app')
@section('titulo','create area')
@section('contenido')
    <div class="row">
        <div class="col s12 m4 ">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('area.store')}}">
                @csrf
                <span class="titulo-index">REGISTRO DE AREA</span>
                <div>
                    <div>
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div>
                        <div class="col s6 center">
                            <a href="{{route('area.index')}}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
