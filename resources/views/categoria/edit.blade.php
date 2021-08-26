@extends('layouts.app')
@section('titulo','edit categoria')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('categoria.update',[$categoria->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DE LA CATEGORIA</span>
            <div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="{{$categoria->descripcion}}">
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
@endsection
