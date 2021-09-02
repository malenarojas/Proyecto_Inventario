@extends('layouts.app')
@section('contenido')
    <div class="row" style="padding: 40px">
        <div class="col s12 m6">
            <div class="card align-content-center" >
                <div class="card-image center blue-grey lighten-3 text-white">
                    <i class="material-icons " style="font-size: 100px; align-items: center "  >shopping_cart</i>
                </div>
                <div class="card-action center blue-grey lighten-3" >
                    <a href="{{ route('compra.index') }}" class="align-content-center dark-primary-color-text" >COMPRA</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">person</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('personal.index')}}"class="align-content-center dark-primary-color-text" >PERSONAL</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">add_shopping_cart</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('venta.index')}}"class="align-content-center dark-primary-color-text">VENTAS</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                  <i class="material-icons"style="font-size: 100px;  align-items: center ">people</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('cliente.index')}}"class="align-content-center dark-primary-color-text">CLIENTE</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">people</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('proveedor.index')}}" class="align-content-center dark-primary-color-text">PROVEEDOR</a>
                </div>
            </div>
        </div>

        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">construction</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('producto.index')}}"class="align-content-center dark-primary-color-text">PRODUCTO</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">pin_drop</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('ubicacion.index')}}" class="align-content-center dark-primary-color-text">UBICACION</a>
                </div>
            </div>
        </div>
        <div class="col s12 m6">
            <div class="card">
                <div class="card-image center blue-grey lighten-3">
                    <i class="material-icons"style="font-size: 100px;  align-items: center ">admin_panel_settings</i>
                </div>
                <div class="card-action center blue-grey lighten-3">
                    <a href="{{route('ubicacion.index')}}" class="align-content-center dark-primary-color-text">USUARIOS</a>
                </div>
            </div>
        </div>
      {{--<div class="row">
            <a href="{{route('cliente.create')}}">
                <div style="padding: 30px;" class="grey lighten-3 col s5 waves-effect">
                    <img class="activator" src="{{asset('storage/retener_clientes.jpg')}}" width="150" height="150">
                    <span class="indigo-text text-lighten-1"><h5>Registrar clientes</h5></span>
                </div>
            </a>
        </div> --}}

    </div>

@endsection
