@extends('layouts.app')
@section('titulo','create estante')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m4">
        </div>
        <div class="col s12 m6 offset-m3 ">
            <div class="row card" style="padding: 20px; vertical-align: center" >
                <form  method="POST" action="{{route('estante.store')}}">
                    @csrf
                    <span class="titulo-index">REGISTRO DE ESTANTE</span>
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
                                <a href="{{route('estante.index')}}">Cancelar</a>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
