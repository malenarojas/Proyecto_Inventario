@extends('layouts.app')
@section('titulo','edit producto')
@section('contenido')
    <div>
        <form  method="POST" action="{{route('producto.update',[$producto->codigo])}}">
            @csrf
            @method('PUT')
            <span>  ACTUALIZANDO DATOS DEL PRODUCTO</span>
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{$producto->nombre}}">
                @error('nombre')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="descripcion_tecnica">Descripcion Tecnica:</label>
                <input type="text" id="descripcion_tecnica" name="descripcion_tecnica" value="{{$producto->descripcion_tecnica}}">
                @error('descripcion_tecnica')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="medida">Medida:</label>
                <input type="text" id="medida" name="medida" value="{{$producto->medida}}">
                @error('medida')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="stock_minimo">stock_minimo:</label>
                <input type="number" id="stock_minimo" name="stock_minimo" value="{{$producto->stock_minimo}}">
                @error('stock_minimo')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="cantidad">Cantidad:</label>
                <input type="number" id="cantidad" name="cantidad" value="{{$producto->cantidad}}">
                @error('cantidad')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="estado">estado:</label>
                <input type="text" id="estado" name="estado" value="{{$producto->estado}}">
                @error('estado')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="precio_compra_USD">precio compra USD:</label>
                <input type="number" id="precio_compra_USD" name="precio_compra_USD" step="any" value="{{$producto->precio_compra_USD}}">
                @error('precio_compra_USD')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="tipo_cambio">tipo cambio:</label>
                <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="{{$producto->tipo_cambio}}">
                @error('tipo_cambio')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div>
                <label for="importe_ganacia">Importe ganancia:</label>
                <input type="number" id="importe_ganacia" name="importe_ganacia" step="any" value="{{$producto->importe_ganacia}}">
                @error('importe_ganacia')
                <span>{{$message}}</span>
                @enderror
            </div>
            <div class="input-field col s12 m6">
                <label>Seleccione una Categoria:</label>
                <select name="categoria_id" id="categoria_id">
                    <option value="" disabled selected>Seleccione una Categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{$producto->categoria_id ==$categoria->id ? 'selected':' '}}>{{$categoria->descripcion}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-field col s12 m6">
                <label>Seleccione una Nacionalidad:</label>
                <select name="nacionalidad_id" id="nacionalidad_id">
                    <option value="" disabled selected>Seleccione una nacionalidad</option>
                    @foreach($nacionalidades as $nacionalidad)
                        <option value="{{ $nacionalidad->id_nacionalidad }}"{{$producto->nacionalidad_id ==$nacionalidad->id_nacionalidad ? 'selected':' '}}>{{$nacionalidad->nombre_pais}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-field col s12 m6">
                <label>Seleccione una Marca:</label>
                <select name="marca_id" id="marca_id">
                    <option value="" disabled selected>Seleccione una Marca</option>
                    @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}"{{$producto->marca_id ==$marca->id ? 'selected':' '}}>{{$marca->descripcion}}</option>
                    @endforeach
                </select>
            </div>
            <div>

                <div>
                    <button type="submit">Guardar</button>
                    <a href="{{route('producto.index')}}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
@endsection
