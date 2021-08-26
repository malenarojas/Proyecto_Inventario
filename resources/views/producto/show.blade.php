@extends('layouts.app')
@section('titulo','index producto')
@section('contenido')
    <div>
        <span>Datos del producto</span>
        <div>
            <p>codigo {{$producto->codigo}}</p>
            <p>nombre:{{$producto->nombre}}</p>
            <p>descripcion tecnica:{{$producto->descripcion_tecnica}}</p>
            <p>medida:{{$producto->medida}}</p>
            <p>stock minimo:{{$producto->stock_minimo}}</p>
            <p>cantidad:{{$producto->cantidad}}</p>
            <p>estado:{{$producto->estado}}</p>
            <p>precio compra USD:{{$producto->precio_compra_USD}}</p>
            <p>tipo cambio:{{$producto->tipo_cambio}}</p>
            <p>precio compra BO:{{$producto->precio_compra_BO}}</p>
            <p>importe ganancia:{{$producto->importe_ganacia}}</p>
            <p>precio venta BO:{{$producto->precio_venta_BO}}</p>
            <p>precio venta USD:{{$producto->precio_venta_USD}}</p>
            <p>categoria:{{$producto->categoria_id}}</p>
            <p>nacionalidad:{{$producto->nacionalidad_id}}</p>
            <p>marca:{{$producto->marca_id}}</p>
        </div>
    </div>
@endsection
