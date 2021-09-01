@extends('layouts.app')
@section('titulo','index venta')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('venta.create')}}">Registrate</a>
            <span>LISTA DE VENTAS</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id </td>
                    <td>TOTAL USD</td>
                    <td>tipo_cambio</td>
                    <td>total_BO</td>
                    <td>fecha</td>
                    <td>tipo_pago</td>
                    <td>personal_id</td>
                    <td>cliente_id</td>
                </tr>
                </thead>
                <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{$venta->id}}</td>
                        <td>{{$venta->total_USD}}</td>
                        <td>{{$venta->tipo_cambio}}</td>
                        <td>{{$venta->total_BO}}</td>
                        <td>{{$venta->fecha}}</td>
                        <td>{{$venta->forma_pago}}</td>
                        <td>{{$venta->personal_id}}</td>
                        <td>{{$venta->cliente_id}}</td>
                        <td>
                            <a href="{{route('venta.show',$venta->id)}}">show</a>
                            <a href="{{route('venta.destroy',$venta->id)}}">destroy</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
