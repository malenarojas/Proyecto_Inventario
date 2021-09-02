@extends('layouts.app')
@section('titulo','index compra')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class=" col s12">
                <span class="titulo-index">LISTA DE COMPRAS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('compra.create')}}" class="btn btn-large">Registrate</a>
            </div>
        </div>
        <div class=" row card">
            <div class="col s12 ">
                <table class="table centeder">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>TOTAL USD</th>
                        <th>TIPO DE CAMBIO</th>
                        <th>TOTAL BO</th>
                        <th>FECHA</th>
                        <th>PERSONAL</th>
                        <th>PROVEEDOR</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($compras as $compra)
                        <tr>
                            <td>{{$compra->id}}</td>
                            <td>{{$compra->total_USD.' $'}}</td>
                            <td>{{$compra->tipo_cambio}}</td>
                            <td>{{$compra->total_BO.' Bs.'}}</td>
                            <td>{{$compra->fecha}}</td>
                            <td>{{$compra->personal->nombre}}</td>
                            <td>{{$compra->proveedor->nombre}}</td>
                            <td>
                                <a href="{{route('compra.show',$compra->id)}}" class="btn-small">show</a>
                                <a href="{{route('compra.destroy',$compra->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
