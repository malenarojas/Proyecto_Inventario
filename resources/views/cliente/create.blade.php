@extends('layouts.app')
@section('titulo','create cliente')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3 ">
            <div class="row card" style="padding: 30px; vertical-align: center" >
                <form  method="POST" action="{{route('cliente.store')}}">
                    @csrf
                    <span class="titulo-index">REGISTRO DEL CLIENTE</span>
                    <div>
                        <div>
                            <label for="nombre">NOMBRE:</label>
                            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                            @error('nombre')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="direccion">DIRECCION:</label>
                            <input type="text" id="direccion" name="direccion" value="{{old('direccion')}}">
                            @error('direccion')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="telefono">TELEFONO:</label>
                            <input type="text" id="telefono" name="telefono" value="{{old('telefono')}}">
                            @error('telefono')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="correo">CORREO:</label>
                            <input type="text" id="correo" name="correo" value="{{old('correo')}}">
                            @error('correo')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col s6 center">
                                <button class="btn" type="submit">Guardar</button>
                            </div>
                            <div class="col s6 center">
                                <a  class="btn" href="{{route('cliente.index')}}">Cancelar</a>
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
