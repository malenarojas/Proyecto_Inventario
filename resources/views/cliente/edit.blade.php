@extends('layouts.app')
@section('titulo','edit cliente')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('cliente.update',[$cliente->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL CLIENTE</span>
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


                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('cliente.index')}}">Cancelar</a>
                </div>

            </div>
        </form>
    </div>
@endsection
