@extends('layouts.app')
@section('titulo','index producto')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3" >
            <div class="card">
                <div class="card-content">
                    <span class="titulo-index">DATOS DEL PRODUCTO</span>
                    <div class="row">
                        <div class="col m3 " ><p class="p-titulo" > CODIGO:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->codigo}}</p></div>
                        <p>NOMBRE:{{$producto->nombre}}</p>
                        <p>DESCRIPCION TECNICA:{{$producto->descripcion_tecnica}}</p>
                        <p>MEDIDA:{{$producto->medida}}</p>
                        <p>STOCK MINIMO:{{$producto->stock_minimo}}</p>
                        <p>CANTIDAD:{{$producto->cantidad}}</p>
                        <p>ESTADO:{{$producto->estado}}</p>
                        <p>PRECIO COMPRA USD:{{$producto->precio_compra_USD}}</p>
                        <p>TIPO CAMBIO:{{$producto->tipo_cambio}}</p>
                        <p>PRECIO COMPRA BO:{{$producto->precio_compra_BO}}</p>
                        <p>IMPORTE GANANCIA:{{$producto->importe_ganacia}}</p>
                        <p>PRECIO VENTA BO:{{$producto->precio_venta_BO}}</p>
                        <p>PRECIO VENTA USD:{{$producto->precio_venta_USD}}</p>
                        <p>CATEGORIA:{{$producto->categoria_id}}</p>
                        <p>nacionalidad:{{$producto->nacionalidad_id}}</p>
                        <p>marca:{{$producto->marca_id}}</p>
                    </div>
                    <div class="table">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
