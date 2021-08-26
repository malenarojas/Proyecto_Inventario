@extends('layouts.app')
@section('titulo','create compra ')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('compra.store')}}">
                @csrf
                <span>REGISTRO DE COMPRA</span>
                <div>
                    <label for="tipo_cambio">tipo cambio:</label>
                    <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="{{old('tipo_cambio')}}">
                    @error('tipo_cambio')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <div class="row">
                        <input type="hidden" name="proveedor_id" id="proveedor_id" value="" required>
                        <div class="input-field col s12 m4">
                            <label for="buscarproveedor">buscar proveedor por id</label>
                            <input type="text" name="buscarproveedor" id="buscarproveedor" value="{{old('buscarproveedor')}}">
                        </div>
                        <div class="col s12 m2">
                            <a href="{{route('proveedor.create')}}">Nuevo Proveedor</a>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" name="nombre_proveedor" id="nombre_proveedor" disabled>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('compra.index')}}">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
