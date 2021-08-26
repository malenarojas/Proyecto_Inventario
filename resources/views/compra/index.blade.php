@extends('layouts.app')
@section('titulo','index compra')
@section('contenido')
    <div class="row" >
        <div class="col s12 m5">
            <a href="{{route('compra.create')}}">Registrate</a>
            <span>LISTA DE COMPRAS</span>
            <table class="striped">
                <thead>
                <tr>
                    <td>id </td>
                    <td>TOTAL USD</td>
                    <td>tipo_cambio</td>
                    <td>total_BO</td>
                    <td>fecha</td>
                    <td>personal_id</td>
                    <td>proveedor_id</td>
                </tr>
                </thead>
                <tbody>
                @foreach($compras as $compra)
                    <tr>
                        <td>{{$compra->id}}</td>
                        <td>{{$compra->total_USD}}</td>
                        <td>{{$compra->tipo_cambio}}</td>
                        <td>{{$compra->total_BO}}</td>
                        <td>{{$compra->fecha}}</td>
                        <td>{{$compra->personal_id}}</td>
                        <td>{{$compra->proveedor_id}}</td>
                        <td>
                            <a href="{{route('compra.show',$compra->id)}}">show</a>
                            <a href="{{route('compra.destroy',$compra->id)}}">destroy</a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
