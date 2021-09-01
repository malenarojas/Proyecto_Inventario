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
                        <div class="col m3 " ><p class="p-titulo" > NOMBRE:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->nombre}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" > DESCRIPCION TECNICA:</p></div>
                        <div class="col m6 "><p class="p-contenido">{{$producto->descripcion_tecnica}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > MEDIDA:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->medida}}</p></div>
                        <div class="col m6 " ><p class="p-titulo" > STOCK MINIMO:</p></div>
                        <div class="col m6 "><p class="">{{$producto->stock_minimo}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > CANTIDAD:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$producto->cantidad}}</p></div>
                        <div class="col m5 " ><p class="p-titulo" > ESTADO:</p></div>
                        <div class="col m7 "><p class="p-contenido">{{$producto->estado}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > PRECIO COMPRA USD:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->precio_compra_USD}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > TIPO CAMBIO:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->tipo_cambio}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > PRECIO COMPRA BO:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->precio_compra_BO}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > IMPORTE GANACIA:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->importe_ganacia}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > PRECIO VENTA BO:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->precio_venta_BO}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > PRECIO VENTA USD:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->precio_venta_USD}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > CATEGORIA:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->categoria->descripcion}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > NACIONALIDAD:</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->nacionalidad_id}}</p></div>
                        <div class="col m3 " ><p class="p-titulo" > MARCA :</p></div>
                        <div class="col m9 "><p class="p-contenido">{{$producto->marca->descripcion}}</p></div>
                    </div>
                    <div class="table">

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
