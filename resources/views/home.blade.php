@extends('layouts.app')
@section('contenido')
    <div class="row" style="padding: 40px">
        <div class="col s12 m3">
            <div class="card align-content-center" >
                <div class="card-image center">
                    <i class="material-icons" style="font-size: 100px;  align-items: center " >shopping_cart</i>
                </div>
                <div class="card-action center" >
                    <a href="{{ route('cliente.index') }}" class="align-content-center" style="color: #1b5e20 ">CLIENTE</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">person</i>
                </div>
                <div class="card-action">
                    <a href="{{route('personal.index')}}">PERSONAL</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <i class="material-icons" style="font-size: 100px;  align-items: center ">add_shopping_cart</i>
                </div>
                <div class="card-action">
                    <a href="{{route('venta.index')}}">VENTAS</a>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">

                </div>
                <div class="card-content">
                </div>
                <div class="card-action">
                    <a href="#">This is a link</a>
                </div>
            </div>
        </div>
    </div>
@endsection
