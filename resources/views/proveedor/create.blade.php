@extends('layouts.app')
@section('titulo','create proveedor')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <div class="row card" style="padding: 20px; vertical-align: center">
            <form  method="POST" action="{{route('proveedor.store')}}">
                @csrf
                <span class="titulo-index">REGISTRO DE PROVEEDOR</span>
                <div>

                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                        @error('nombre')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="direccion">Direccion:</label>
                        <input type="text" id="direccion" name="direccion" value="{{old('direccion')}}">
                        @error('direccion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" value="{{old('telefono')}}">
                        @error('telefono')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="correo">Correo:</label>
                        <input type="text" id="correo" name="correo" value="{{old('correo')}}">
                        @error('correo')
                        <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div >
                        <div class="col s3 center">
                            <a class="btn" href="{{route('proveedor.index')}}">Cancelar</a>
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
