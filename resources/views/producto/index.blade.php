@extends('layouts.app')
@section('titulo','index producto')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE PRODUCTOS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{ route('producto.create') }}"class=" waves-effect waves-light btn-large dark-primary-color">Registrar</a>
            </div>
        </div>
        <div class="row card">
            <div class="col s12">
                <table class="table centered">
                    <thead>
                    <tr>
                        <th>codigo</th>
                        <th>nombre</th>
{{--                        <th>Descripcion_tecnica</th>--}}
{{--                        <th scope="col">medida</th>--}}
{{--                        <th scope="col">stock minimo</th>--}}
                        <th>cantidad</th>
                        <th>estado</th>
                        <th>precio compra USD</th>
{{--                        <th>tipo cambio</th>--}}
                        <th>precio compra BO</th>
                        <th>importe ganancia</th>
                        <th>precio venta BO</th>
                        <th>precio venta USD</th>
                        <th>categoria</th>
                        <th>Nac.</th>
                        <th>marca</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{$producto->codigo}}</td>
                            <td>{{$producto->nombre}}</td>
{{--                            <td>{{$producto->descripcion_tecnica}}</td>--}}
{{--                            <td>{{$producto->medida}}</td>--}}
{{--                            <td>{{$producto->stock_minimo}}</td>--}}
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->estado}}</td>
                            <td>{{$producto->precio_compra_USD.' $'}}</td>
{{--                            <td>{{$producto->tipo_cambio}}</td>--}}
                            <td>{{$producto->precio_compra_BO.' Bs.'}}</td>
                            <td>{{$producto->importe_ganacia.'%'}}</td>
                            <td>{{$producto->precio_venta_USD}}</td>
                            <td>{{$producto->precio_venta_BO}}</td>
                            <td>{{$producto->categoria->descripcion}}</td>
                            <td>{{$producto->nacionalidad_id}}</td>
                            <td>{{$producto->marca->descripcion}}</td>
                            <td>
                                <a href="{{route('producto.show', $producto->codigo)}}" class="btn-small dark-primary-color">show</a>
                                <a href="{{route('producto.edit',$producto->codigo)}}" class="btn-small orange">edit</a>
                                <a href="{{route('producto.destroy',$producto->codigo)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
