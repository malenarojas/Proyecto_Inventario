@extends('layouts.app')
@section('titulo','create personal')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3 " >
        <div class="row card" style="padding: 20px; vertical-align: center">
            <form  method="POST" action="{{route('personal.store')}}">
                @csrf
                <span class="titulo-index">REGISTRO DEL PERSONAL</span>
                <div>

                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="apellido">Apellido:</label>
                        <input type="text" id="apellido" name="apellido" value="{{old('apellido')}}">
                        @error('apellido')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="CI">CI:</label>
                        <input type="text" id="CI" name="CI" value="{{old('CI')}}">
                        @error('CI')
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
                        <label for="sexo">Sexo:</label>
                        <input type="text" id="sexo" name="sexo" value="{{old('sexo')}}">
                        @error('sexo')
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
                        <label for="tipopersonal_id">Tipo personal :</label>
                        <input type="text" id="tipopersonal_id" name="tipopersonal_id" value="{{old('tipopersonal_id')}}">
                        @error('descripcion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div>
                        <div class="col s6 center">
                            <a  class="btn" href="{{route('personal.index')}}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
