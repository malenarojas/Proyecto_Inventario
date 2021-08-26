@extends('layouts.app')
@section('titulo','create personal')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('personal.store')}}">
                @csrf
                <span>REGISTRO DEL PERSONAL</span>
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
                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('personal.index')}}">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
