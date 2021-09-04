@extends('layouts.app')
@section('titulo','edit tipo personal')
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
        <form  method="POST" action="{{route('tipopersonal.update',[$tipopersonal->id])}}">
            @csrf
            @method('PUT')
            <span class="titulo-index">  ACTUALIZANDO DATOS DEL TIPO PERSONAL</span>
            <div>
                <div>
                    <label for="cargo">Cargo:</label>
                    <input type="text" id="cargo" name="cargo" value="{{$tipopersonal->cargo}}">
                    @error('cargo')
                    <span>{{$message}}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col s6 center">
                        <button class="btn" type="submit">Guardar</button>
                    </div >
                    <div class="col s3 center">
                        <a class="btn" href="{{route('tipopersonal.index')}}">Cancelar</a>
                    </div>
                </div>

            </div>
        </form>
        </div>
    </div>
    </div>
@endsection
