@extends('layouts.app')
@section('titulo','index compra')
@section('contenido')
    <div class="row">
        <div class="col s6">
            <span>Datos de las compras</span>
            <div>
                <p> id {{$compra->id}}</p>
                <p>total USD {{$compra->total_USD}}</p>
                <p>tipo cambio {{$compra->tipo_cambio}}</p>
                <p>total BO {{$compra->total_BO}}</p>
                <p>fecha {{$compra->fecha}}</p>
                <p>personal id {{$compra->personal_id}}</p>
                <p>proveedor id {{$compra->proveedor_id}}</p>
            </div>
        </div>
        <div class="col s6">
            <div class="row">
                <div class="col s12 m4">
                </div>
                <div class="col s12 m4 " >
                    <form  method="POST" action="{{route('compra.update',[$compra->id])}}">
                        @csrf
                        @method('PUT')
                        <span>REGISTRO DE DETALLE COMPRA</span>
                        <div>
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                            @error('cantidad')
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
                        </div>
                        <div>
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
        </div>
        <div class="row" >
            <div class="col s8 m5 offset-sm-2">
                <span>LISTA DE COMPRAS</span>
                <table class="striped">
                    <thead>
                    <tr>
                        <td>id </td>
                        <td>compra id</td>
                        <td>producto id</td>
                        <td>cantidad</td>
                        <td>precio_unitario</td>
                        <td>subtotal_USD</td>
                        <td>tipo cambio</td>
                        <td>subtotal_BO</td>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($detallecompras as $detalle)
                        <tr>
                            <td>{{$detalle->id}}</td>
                            <td>{{$detalle->compra_id}}</td>
                            <td>{{$detalle->producto_id}}</td>
                            <td>{{$detalle->cantidad}}</td>
                            <td>{{$detalle->precio_unitaro}}</td>
                            <td>{{$detalle->subtotal_USD}}</td>
                            <td>{{$detalle->tipo_cambio}}</td>
                            <td>{{$detalle->subtotal_BO}}</td>
                            <td>
                                {{--<a href="{{route('det.destroy',$compra->id)}}">destroy</a>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>

@endsection
