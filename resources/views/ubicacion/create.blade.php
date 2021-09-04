@extends('layouts.app')
@section('titulo','create ubicacion')
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
        <div class="col s12 m6 offset-m3">
            <div class="row card " style="padding: 20px; vertical-align: center" >
                <form  method="POST" action="{{route('ubicacion.store')}}">
                    @csrf
                    <span class="titulo-index">REGISTRO DE UBICACION</span>
                    <div>
                        <div>
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" value="{{old('descripcion')}}">
                            @error('descripcion')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="input-field col s12 m6">

                            <select name="area_id" id="area_id">
                                <option value="" disabled selected>Seleccione una Area</option>
                                @foreach($areas as $area)
                                    <option value="{{ $area->id }}">{{$area->descripcion}}</option>
                                @endforeach
                            </select>
                            <label>Seleccione una Area:</label>
                        </div>
                        <div class="input-field col s12 m6">
                            <select name="estante_id" id="estante_id">
                                <option value="" disabled selected>Seleccione un Estante</option>
                                @foreach($estantes as $estante)
                                    <option value="{{ $estante->id }}">{{$estante->descripcion}}</option>
                                @endforeach
                            </select>
                            <label>Seleccione un Estante:</label>
                        </div>
                        <div class="row">
                            <input type="hidden" name="producto_codigo" id="producto_codigo" value="" required>
                            <div class="input-field col s12 m4">
                                <label for="buscar">buscar producto por codigo</label>
                                <input type="text" name="buscar" id="buscar" value="{{old('buscar')}}">
                            </div>
                            <div class="col s12 m2">
                                <a href="{{route('producto.create')}}">Nuevo Producto</a>
                            </div>
                            <div class="input-field col s12 m6">
                                <input type="text" name="nombre_producto" id="nombre_producto" disabled>

                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col s6 center">
                                    <button type="submit" class="btn">Guardar</button>
                                </div>
                                <div  class="col s6 center">
                                    <a href="{{route('compra.index')}}" class="btn">Cancelar</a>
                                </div>

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
