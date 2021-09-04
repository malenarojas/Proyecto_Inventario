@extends('layouts.app')
@section('titulo','create venta ')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m4">
        </div>
        <div class="col s12 m6 offset-m3 " >
            <div class="row card" style="padding: 20px; vertical-align: center">
                <form  method="POST" action="{{route('venta.store')}}">
                    @csrf
                    <span class="titulo-index ">REGISTRO DE VENTA</span>
                    <div col s12 m6>
                        <label for="tipo_cambio">tipo cambio:</label>
                        <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="6.96">
                        @error('tipo_cambio')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col s12 m12">
                        <label for="forma_pago">forma pago:</label>
                        <select name="forma_pago" id="forma_pago">
                            <option value="AL CONTADO">AL CONTADO</option>
                            <option value="CREDITO">AL CREDITO</option>
                        </select>
                        @error('forma_pago')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col s12 m12">
                        <div class="row">
                            <input type="hidden" name="cliente_id" id="cliente_id" value="" required>
                            <div class="input-field col s12 m12">
                                <label for="buscarcliente">buscar cliente por id</label>
                                <input type="text" name="buscarcliente" id="buscarcliente" value="{{old('buscarcliente')}}">
                            </div>
                            <div class="col s12 m3">
                                <a href="{{route('cliente.create')}}">Nuevo cliente</a>
                            </div>
                            <div class="input-field col s12 m6">
                                <input type="text" name="nombre_cliente" id="nombre_cliente" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6 center">
                                <button class="btn" type="submit">Guardar</button>
                            </div>
                            <div class="col s6 center">
                                <a class="btn" href="{{route('venta.index')}}" type="sumit">Cancelar</a>
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
