@extends('layouts.app')
@section('titulo','edit tipo personal')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('tipopersonal.update',[$tipopersonal->id])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL TIPO PERSONAL</span>
            <div>
                <div>
                    <label for="cargo">Cargo:</label>
                    <input type="text" id="cargo" name="cargo" value="{{$tipopersonal->cargo}}">
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
@endsection
