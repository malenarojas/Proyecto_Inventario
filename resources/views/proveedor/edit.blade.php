@extends('layouts.app')
@section('titulo','edit proveedor')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <div class="row card" style="padding: 20px; vertical-align: center">
         {{--<form  method="POST" action="{{route('proveedor.update')}}">--}}
                <form  method="POST" action="{{route('proveedor.update',[$proveedor->id])}}">
                @csrf
                @method('PUT')
                <span class="titulo-index">ACTUALIZANDO DATOS DEL PROVEEDOR</span>
                <div>

                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{$proveedor->nombre}}">
                        @error('nombre')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="direccion">Direccion:</label>
                        <input type="text" id="direccion" name="direccion" value="{{$proveedor->direccion}}">
                        @error('direccion')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="telefono">Telefono:</label>
                        <input type="text" id="telefono" name="telefono" value="{{$proveedor->telefono}}">
                        @error('telefono')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="correo">Correo:</label>
                        <input type="text" id="correo" name="correo" value="{{$proveedor->correo}}">
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


{{--@extends('layouts.app')
@section('titulo','edit proveedor')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('proveedor.update',[$proveedor->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL PERSONAL</span>
            <div>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" value="{{$personal->nombre}}">
                    @error('nombre')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" value="{{$personal->apellido}}">
                    @error('apellido')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="C.I">C.I:</label>
                    <input type="text" id="C.I" name="C.I" value="{{$personal->C.I}}">
                    @error('C.I')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="telefono">Telefono:</label>
                    <input type="text" id="telefono" name="telefono" value="{{$personal->telefono}}">
                    @error('telefono')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="sexo">Sexo:</label>
                    <input type="text" id="sexo" name="sexo" value="{{$personal->sexo}}">
                    @error('sexo')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="direccion">direccion:</label>
                    <input type="text" id="direccion" name="direccion" value="{{$personal->direccion}}">
                    @error('direccion')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="tipopersonal_id">Tipo personal:</label>
                    <input type="text" id="tipopersonal_id" name="tipopersonal_id" value="{{$personal->tipopersonal_id}}">
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
@endsection
--}}
