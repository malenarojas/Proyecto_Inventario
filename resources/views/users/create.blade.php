
        @extends('layouts.app')
        @section('titulo','users proveedor')
        @section('contenido')
            <div class="row">
                <div class="col s12 m4">
                </div>
                <div class="col s12 m4 " >
                    <form  method="POST" action="{{route('users.store')}}">
                        @csrf
                        <span>REGISTRO DE USUARIOS</span>
                        <div>

                            <div>
                                <label for="name">Nombre:</label>
                                <input type="text" id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="email">correo:</label>
                                <input type="text" id="email" name="email" value="{{old('email')}}">
                                @error('email')
                                <span>{{$message}}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="password">contraseña:</label>
                                <input type="text" id="password" name="password" value="{{old('password')}}">
                                @error('password')
                                <span>{{$message}}</span>
                                @enderror
                            </div>

                            <div>
                                <button type="submit">Guardar</button>
                                <a href="{{route('users.index')}}">Cancelar</a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col s12 m4">
                </div>
            </div>
@endsection
