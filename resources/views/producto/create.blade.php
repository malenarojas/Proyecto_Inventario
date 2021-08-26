@extends('layouts.app')
@section('titulo','create producto')
@section('contenido')
    <div class="row">
        <div class="col s12 m4">
        </div>
        <div class="col s12 m4 " >
            <form  method="POST" action="{{route('producto.store')}}">
                @csrf
                <span>REGISTRO DE PRODUCTOS</span>
                <div>

                    <div>
                        <label for="codigo">Codigo:</label>
                        <input type="text" id="codigo" name="codigo" value="{{old('codigo')}}">
                        @error('codigo')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                        @error('nombre')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="descripcion_tecnica">Descripcion Tecnica:</label>
                        <input type="text" id="descripcion_tecnica" name="descripcion_tecnica" value="{{old('descripcion_tecnica')}}">
                        @error('descripcion_tecnica')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="medida">Medida:</label>
                        <input type="text" id="medida" name="medida" value="{{old('medida')}}">
                        @error('medida')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="stock_minimo">stock_minimo:</label>
                        <input type="number" id="stock_minimo" name="stock_minimo" value="{{old('stock_minimo')}}">
                        @error('stock_minimo')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                        @error('cantidad')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="estado">estado:</label>
                        <input type="text" id="estado" name="estado" value="{{old('estado')}}">
                        @error('estado')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="precio_compra_USD">precio compra USD:</label>
                        <input type="number" id="precio_compra_USD" name="precio_compra_USD" step="any" value="{{old('precio_compra_USD')}}">
                        @error('precio_compra_USD')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="tipo_cambio">tipo cambio:</label>
                        <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="{{old('tipo_cambio')}}">
                        @error('tipo_cambio')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <label for="importe_ganacia">Importe ganacia:</label>
                        <input type="number" id="importe_ganacia" name="importe_ganacia" step="any" value="{{old('importe_ganacia')}}">
                        @error('importe_ganacia')
                        <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="input-field col s12 m6">
                        <label>Seleccione una Categoria:</label>
                        <select name="categoria_id" id="categoria_id">
                            <option value="" disabled selected>Seleccione una Categoria</option>
                            @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{$categoria->descripcion}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field col s12 m6">
                        <label>Seleccione una Nacionalidad:</label>
                        <select name="nacionalidad_id" id="nacionalidad_id">
                            <option value="" disabled selected>Seleccione una nacionalidad</option>
                            @foreach($nacionalidades as $nacionalidad)
                                <option value="{{ $nacionalidad->id_nacionalidad }}">{{$nacionalidad->nombre_pais}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="input-field col s12 m6">
                        <label>Seleccione una Marca:</label>
                        <select name="marca_id" id="marca_id">
                            <option value="" disabled selected>Seleccione una Marca</option>
                            @foreach($marcas as $marca)
                                <option value="{{ $marca->id }}">{{$marca->descripcion}}</option>
                            @endforeach
                        </select>

                    </div>

                    <div>
                        <button type="submit">Guardar</button>
                        <a href="{{route('producto.index')}}">Cancelar</a>
                    </div>

                </div>
            </form>

        </div>
        <div class="col s12 m4">
        </div>
    </div>
@endsection
