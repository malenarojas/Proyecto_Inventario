@extends('layouts.app')
@section('titulo','edit ubicacion')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('ubicacion.update',[$ubicacion->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DE LA UBICACION</span>
            <div>
                <div>
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" id="descripcion" name="descripcion" value="{{$ubicacion->descripcion}}">
                    @error('descripcion')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="input-field col s12 m6">
                    <label>Seleccione una Area:</label>
                    <select name="area_id" id="area_id">
                        <option value="" disabled selected>Seleccione una Area</option>
                        @foreach($areas as $area)
                            <option value="{{ $area->id }}" {{$ubicacion->area_id ==$area->id ? 'selected':' '}} >{{$area->descripcion}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-field col s12 m6">
                    <label>Seleccione un Estante:</label>
                    <select name="estante_id" id="estante_id">
                        <option value="" disabled selected>Seleccione un Estante</option>
                        @foreach($estantes as $estante)
                            <option value="{{ $estante->id }}" {{$ubicacion->estante_id==$estante->id ? 'selected': ' '}}>{{$estante->descripcion}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="row">
                    <input type="hidden" name="producto_codigo" id="producto_codigo" value="" required>
                    <div class="input-field col s12 m4">
                        <label for="buscar">buscar producto por codigo</label>
                        <input type="text" name="buscar" id="buscar" value="{{$ubicacion->producto_codigo}}">
                    </div>
                    <div class="col s12 m2">
                        <a href="{{route('producto.create')}}">Nuevo Producto</a>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" name="nombre_producto" id="nombre_producto" disabled>

                    </div>
                </div>
                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('nacionalidad.index')}}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
