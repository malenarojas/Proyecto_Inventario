@extends('layouts.app')
@section('titulo','create tipo personal')
@section('contenido')
    <div class="row">
        <div class="col s12">&nbsp;</div>
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <div class="row card" style="padding: 20px; vertical-align: center">
            <form  method="POST" action="{{route('tipopersonal.store')}}">
                @csrf
                <span class="titulo-index">REGISTRO DE TIPO PERSONAL</span>
                <div>

                    <div>
                        <label for="cargo">Cargo:</label>
                        <input type="text" id="Cargo" name="Cargo" value="{{old('Cargo')}}">
                        @error('cargo')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col s6 center">
                            <button class="btn" type="submit">Guardar</button>
                        </div>
                        <div class="col s6 center">
                            <a  class="btn" href="{{route('tipopersonal.index')}}">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
