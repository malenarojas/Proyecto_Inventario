@extends('layouts.app')
@section('titulo','edit categoria')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m6 offset-m3">
            <div class="row card" style="padding: 20px; vertical-align: center">
                <form  method="POST" action="{{route('categoria.update',[$categoria->id])}}">
                    @csrf
                    @method('PUT')
                    <span class="titulo-index">  ACTUALIZANDO DATOS DE LA CATEGORIA</span>
                    <div>
                        <div>
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" id="descripcion" name="descripcion" value="{{$categoria->descripcion}}">
                            @error('descripcion')
                            <span>{{$message}}</span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col s6 center">
                                <button class="btn" type="submit">Guardar</button>
                            </div>
                            <div class="col s6 center">
                                <a class="btn" href="{{route('categoria.index')}}">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
@endsection
