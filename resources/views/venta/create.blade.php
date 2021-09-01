@extends('layouts.app')
@section('titulo','create venta ')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('venta.store')}}">
                @csrf
                <span>REGISTRO DE VENTA</span>
                <div>
                    <label for="tipo_cambio">tipo cambio:</label>
                    <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="{{old('tipo_cambio')}}">
                    @error('tipo_cambio')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <label for="forma_pago">forma pago:</label>
                    <input type="text" id="forma_pago" name="forma_pago" step="any" value="{{old('forma_pago')}}">
                    @error('forma_pago')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div>
                    <div class="row">
                        <input type="hidden" name="cliente_id" id="cliente_id" value="" required>
                        <div class="input-field col s12 m4">
                            <label for="buscarcliente">buscar cliente por id</label>
                            <input type="text" name="buscarcliente" id="buscarcliente" value="{{old('buscarcliente')}}">
                        </div>
                        <div class="col s12 m2">
                            <a href="{{route('cliente.create')}}">Nuevo cliente</a>
                        </div>
                        <div class="input-field col s12 m6">
                            <input type="text" name="nombre_cliente" id="nombre_cliente" disabled>
                        </div>
                    </div>
                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('venta.index')}}">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
