@extends('layouts.app')
@section('titulo','create tipo personal')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('tipo personal.store')}}">
                @csrf
                <span>REGISTRO DE TIPO PERSONAL</span>
                <div>

                    <div>
                        <label for="cargo">Cargo:</label>
                        <input type="text" id="Cargo" name="Cargo" value="{{old('Cargo')}}">
                        @error('cargo')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('tipopersonal.index')}}">Cancelar</a>
                    </div>
                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
