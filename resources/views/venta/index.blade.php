@extends('layouts.app')
@section('titulo','index venta')
@section('contenido')
    <div class="row" >
        <div class="row">
            <div class="divider"></div>
        </div>
        <div class="row">
            <div class="col s12">
                <span class="titulo-index">LISTA DE VENTAS</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <a href="{{route('venta.create')}}" class=" waves-effect waves-light btn-large dark-primary-color">Registrate</a>
            </div>
        </div>
        <div class=" row card" style="padding: 20px; vertical-align: center">
            <div class="col s12 ">
                <table class="table centeder">
                    <thead>
                    <tr>
                        <th>ID </th>
                        <th>TOTAL USD</th>
                        <th>TIPO CAMBIO</th>
                        <th>TOTAL BO</th>
                        <th>FECHA</th>
                        <th>TIPO PAGO</th>
                        <th>PERSONAL</th>
                        <th>CLIENTE</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($ventas as $venta)
                        <tr>
                            <td>{{$venta->id}}</td>
                            <td>{{$venta->total_USD.' $'}}</td>
                            <td>{{$venta->tipo_cambio}}</td>
                            <td>{{$venta->total_BO.' Bs.'}}</td>
                            <td>{{$venta->fecha}}</td>
                            <td>{{$venta->forma_pago}}</td>
                            <td>{{$venta->personal->nombre}}</td>
                            <td>{{$venta->cliente->nombre}}</td>
                            <td>
                                <a href="{{route('venta.show',$venta->id)}}" class="btn-small">show</a>
                                <a href="{{route('venta.destroy',$venta->id)}}" class="btn-small red">destroy</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
