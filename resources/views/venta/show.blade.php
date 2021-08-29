@extends('layouts.app')
@section('titulo','index venta')
@section('contenido')
    <div class="row">
        <div class=" card col s4">
            <span>Datos de las ventas</span>
            <div>
                <p> id {{$venta->id}}</p>
                <p>total USD {{$venta->total_USD}}</p>
                <p>tipo cambio {{$venta->tipo_cambio}}</p>
                <p>total BO {{$venta->total_BO}}</p>
                <p>fecha {{$venta->fecha}}</p>
                <p>forma de pago:{{$venta->forma_pago}}</p>
                <p>personal id {{$venta->personal_id}}</p>
                <p>cliente id {{$venta->cliente_id}}</p>
            </div>
        </div>
        <div class="card col s8">
            <div class="row">
                <div class="col s12 m12 "  >
                    <form  method="POST" action="{{route('venta.update',[$venta->id])}}">
                        @csrf
                        @method('PUT')
                        <span>REGISTRO DE DETALLE VENTA</span>
                        <div>
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                            @error('cantidad')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="tipo_cambio">Tipo Cambio:</label>
                            <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="{{old('tipo_cambio')}}">
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
                        <div>
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
        </div>
        <div class="row" >
            <div class="col s8 m5 offset-sm-2">
                <span>LISTA DE DETALLE VENTAS</span>
                <table class="striped">
                    <thead>
                    <tr>
                        <td>id </td>
                        <td>venta id</td>
                        <td>producto id</td>
                        <td>nombre producto</td>
                        <td>cantidad</td>
                        <td>precio_unitario</td>
                        <td>subtotal_USD</td>
                        <td>tipo cambio</td>
                        <td>subtotal_BO</td>
                        <td>ACCIONES</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($detalleventas as $detalle)
                        <tr>
                            <td>{{$detalle->id}}</td>
                            <td>{{$detalle->venta_id}}</td>
                            <td>{{$detalle->producto_id}}</td>
                            <td>{{$detalle->producto->nombre}}</td>
                            <td>{{$detalle->cantidad}}</td>
                            <td>{{$detalle->precio_unitaro}}</td>
                            <td>{{$detalle->subtotal_USD}}</td>
                            <td>{{$detalle->tipo_cambio}}</td>
                            <td>{{$detalle->subtotal_BO}}</td>
                            <td>
                                <a href="{{route('venta.eliminar_detalle',[$venta->id,$detalle->id])}}">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection
