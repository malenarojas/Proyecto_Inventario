@extends('layouts.app')
@section('titulo','index producto')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{ route('producto.create') }}">Registrate</a>
            <span>LISTA DE PRODUCTOS</span>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">codigo</th>
                    <th scope="col">nombre</th>
                    <th scope="col">Descripcion_tecnica</th>
                    <th scope="col">medida</th>
                    <th scope="col">stock minimo</th>
                    <th scope="col">cantidad</th>
                    <th scope="col">estado</th>
                    <th scope="col">precio compra USD</th>
                    <th scope="col">tipo cambio</th>
                    <th scope="col">precio compra BO</th>
                    <th scope="col">importe ganancia</th>
                    <th scope="col">precio venta BO</th>
                    <th scope="col">precio venta USD</th>
                    <th scope="col">categoria</th>
                    <th scope="col">nacionalidad</th>
                    <th scope="col">marca</th>
                </tr>
                </thead>
                <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td>{{$producto->codigo}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion_tecnica}}</td>
                        <td>{{$producto->medida}}</td>
                        <td>{{$producto->stock_minimo}}</td>
                        <td>{{$producto->cantidad}}</td>
                        <td>{{$producto->estado}}</td>
                        <td>{{$producto->precio_compra_USD.' $'}}</td>
                        <td>{{$producto->tipo_cambio}}</td>
                        <td>{{$producto->precio_compra_BO.' Bs.'}}</td>
                        <td>{{$producto->importe_ganacia}}</td>
                        <td>{{$producto->precio_venta_USD}}</td>
                        <td>{{$producto->precio_venta_BO}}</td>
                        <td>{{$producto->categoria_id}}</td>
                        <td>{{$producto->nacionalidad_id}}</td>
                        <td>{{$producto->marca_id}}</td>
                        <td>
                            <a href="{{route('producto.show', $producto->codigo)}}">show</a>
                            <a href="{{route('producto.edit',$producto->codigo)}}">edit</a>
                            <a href="{{route('producto.destroy',$producto->codigo)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
