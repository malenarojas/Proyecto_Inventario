@extends('layouts.app')
@section('titulo','edit cliente')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="row card" style="padding: 20px; vertical-align: center">
                <form  method="POST" action="{{route('cliente.update',[$cliente->id])}}">
                    @csrf
                    @method('PUT')
                    <span class="titulo-index">  ACTUALIZANDO DATOS DEL CLIENTE</span>
                    <div>
                        <div>
                            <label for="nombre">Nombre:</label>
                            <input type="text" id="nombre" name="nombre" value="{{$cliente->nombre}}">
                            @error('nombre')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="direccion">Direccion:</label>
                            <input type="text" id="direccion" name="direccion" value="{{$cliente->direccion}}">
                            @error('direccion')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="telefono">Telefono:</label>
                            <input type="text" id="telefono" name="telefono" value="{{$cliente->telefono}}">
                            @error('telefono')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="correo">Correo:</label>
                            <input type="text" id="correo" name="correo" value="{{$cliente->correo}}">
                            @error('correo')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col s6 center">
                                <button class="btn"type="submit">Guardar</button>
                            </div>
                            <div class="col s6 center">
                                <a  class="btn"href="{{route('cliente.index')}}">Cancelar</a>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
