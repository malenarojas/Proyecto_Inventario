@extends('layouts.app')
@section('contenido')
    <div class="row" style="padding: 40px">
        <div class="col s12 m3">
            <div class="card align-content-center" >
                <div class="card-image center">
                    <i class="material-icons" style="font-size: 100px;  align-items: center " >shopping_cart</i>
                </div>
                <div class="card-action center" >
                    <a href="{{ route('compra.index') }}" class="align-content-center" style="color: #1b5e20 ">COMPRA</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">person</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('personal.index')}}">PERSONAL</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">add_shopping_cart</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('venta.index')}}">VENTAS</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                  <i class="material-icons"style="font-size: 100px;  align-items: center ">people</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('cliente.index')}}">CLIENTE</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">people</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('proveedor.index')}}">PROVEEDOR</a>
                </div>
            </div>
        </div>

        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">construction</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('producto.index')}}">PRODUCTO</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">pin_drop</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('ubicacion.index')}}">UBICACION</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image center">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">admin_panel_settings</i>
                </div>
                <div class="card-action center">
                    <a href="{{route('ubicacion.index')}}">USUARIOS</a>
                </div>
            </div>
        </div>
    </div>
@endsection
