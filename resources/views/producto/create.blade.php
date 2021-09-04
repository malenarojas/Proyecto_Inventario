@extends('layouts.app')
@section('titulo','create producto')
@section('contenido')
    <div class="row">
        <div class="col s12 m6 offset-m3 " >
            <div class="row card"style="padding: 20px; vertical-align: center">
                <form  method="POST" action="{{route('producto.store')}}">
                    @csrf
                    <span class="titulo-index">REGISTRO DE PRODUCTOS</span>
                    <div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="codigo">Codigo:</label>
                                <input type="text" id="codigo" name="codigo" value="{{old('codigo')}}">
                                @error('codigo')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}">
                                @error('nombre')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12">
                                <label for="descripcion_tecnica">Descripcion Tecnica:</label>
                                <input type="text" id="descripcion_tecnica" name="descripcion_tecnica" value="{{old('descripcion_tecnica')}}">
                                @error('descripcion_tecnica')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="medida">Medida:</label>
                                <input type="text" id="medida" name="medida" value="{{old('medida')}}">
                                @error('medida')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="stock_minimo">stock_minimo:</label>
                                <input type="number" id="stock_minimo" name="stock_minimo" value="{{old('stock_minimo')}}">
                                @error('stock_minimo')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" id="cantidad" name="cantidad" value="{{old('cantidad')}}">
                                @error('cantidad')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="estado">estado:</label>
                                <select name="estado" id="estado">
                                    <option value="disponible">Disponible</option>
                                    <option value="no disponible">No Disponible</option>
                                </select>
                                @error('estado')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="precio_compra_USD">precio compra USD:</label>
                                <input type="number" id="precio_compra_USD" name="precio_compra_USD" step="any" value="{{old('precio_compra_USD')}}">
                                @error('precio_compra_USD')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12 m6">
                                <label for="tipo_cambio">tipo cambio:</label>
                                <input type="number" id="tipo_cambio" name="tipo_cambio" step="any" value="6.96">
                                @error('tipo_cambio')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="col s12">
                                <label for="importe_ganacia">Importe ganacia:</label>
                                <input type="number" id="importe_ganacia" name="importe_ganacia" step="any" value="{{old('importe_ganacia')}}">
                                @error('importe_ganacia')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m6">
                                <select name="categoria_id" id="categoria_id">
                                    <option value="" disabled selected>Seleccione una Categoria</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{$categoria->descripcion}}</option>
                                    @endforeach
                                </select>
                                <label for="categoria_id">Seleccione una Categoria:</label>
                            </div>
                            <div class="input-field col s12 m6">

                                <select name="nacionalidad_id" id="nacionalidad_id">
                                    <option value="" disabled selected>Seleccione una nacionalidad</option>
                                    @foreach($nacionalidades as $nacionalidad)
                                        <option value="{{ $nacionalidad->id_nacionalidad }}">{{$nacionalidad->nombre_pais}}</option>
                                    @endforeach
                                </select>
                                <label for="nacionalidad_id">Seleccione una Nacionalidad:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12 m6">
                                <select name="marca_id" id="marca_id">
                                    <option value="" disabled selected>Seleccione una Marca</option>
                                    @foreach($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{$marca->descripcion}}</option>
                                    @endforeach
                                </select>
                                <label for="marca_id">Seleccione una Marca:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s6 center">
                                <button class="btn" type="submit">Guardar</button>
                            </div>
                            <div class="col s6 center">
                                <a href="{{route('producto.index')}}" class="btn">Cancelar</a>
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
