@extends('layouts.app')
@section('titulo','index venta')
@section('contenido')
    <div class="row">
        <div class=" card col s5"style="padding: 20px; vertical-align: center">
            <span class="titulo-index">DATOS DE LA VENTA</span>
            <div class="row">
            </div>
            <div class="row">
                <div class="col s12 container">
                    <p> id {{$venta->id}}</p>
                    <p>total USD {{$venta->total_USD.' $'}}</p>
                    <p>tipo cambio {{$venta->tipo_cambio}}</p>
                    <p>total BO {{$venta->total_BO.' Bs'}}</p>
                    <p>fecha {{$venta->fecha}}</p>
                    <p>forma de pago:{{$venta->forma_pago}}</p>
                    <p>personal {{$venta->personal->nombre}}</p>
                    <p>cliente {{$venta->cliente->nombre}}</p>

                </div>
            </div>
            <div class="row"></div>
        </div>
        <div class="card col s7" style="padding: 20px; vertical-align: center">
            <div class="row">
                <div class="col s12 m12 "  >
                    <form  method="POST" action="{{route('venta.update',[$venta->id])}}">
                        @csrf
                        @method('PUT')
                        <span class="titulo-index">REGISTRO DE DETALLE VENTA</span>
                        <div>
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                            @error('cantidad')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="tipo_cambio">Tipo Cambio:</label>
                            <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="6.96">
                            @error('tipo_cambio')
                            <span>{{$message}}</span>
                            @enderror
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
                            <div>
                                <label for="precio_unitario">Precio Unitario:</label>
                                <input type="number" id="precio_unitario" name="precio_unitario" step="any" value="{{old('precio_unitario')}}">
                                @error('precio_unitario')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col s12">
                            <div class="col s12 m3 offset-m4">
                                <button type="submit" class="btn-small">Guardar</button>
                            </div>
                            <div class="col s12 m3">
                                <a href="{{route('compra.index')}}" class="btn-small">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col s12 m4">
                </div>
            </div>
        </div>
    </div>
    <div class="row card" style="padding: 20px; vertical-align: center">
        <div class="col s12">
            <span class="titulo-index">LISTA DE DETALLE VENTAS</span>
            <table class="table-centered">
                <thead>
                <tr>
                    <th>venta id</th>
                    <th>producto id</th>
                    <th>cantidad</th>
                    <th>precio_unitario</th>
                    <th>subtotal_USD</th>
                    <th>tipo cambio</th>
                    <th>subtotal_BO</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($detalleventas as $detalle)
                    <tr>
                        <td>{{$detalle->venta_id}}</td>
                        <td>{{$detalle->producto_id}}</td>
                        <td>{{$detalle->cantidad}}</td>
                        <td>{{$detalle->precio_unitario}}</td>
                        <td>{{$detalle->subtotal_USD}}</td>
                        <td>{{$detalle->tipo_cambio}}</td>
                        <td>{{$detalle->subtotal_BO}}</td>
                        <td>
                            <a href="{{route('venta.eliminar_detalle',[$venta->id,$detalle->id])}}" class="btn-small red">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
