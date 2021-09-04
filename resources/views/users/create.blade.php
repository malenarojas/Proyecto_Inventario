
        @extends('layouts.app')
        @section('titulo','users users')
        @section('contenido')
            <div class="row">
                <div class="col s12 m4">
                </div>
                <div class="col s12 m4 " >
                    <div class="row card" style="padding: 20px; vertical-align: center">
                    <form  method="POST" action="{{route('users.store')}}">
                        @csrf
                        <span class="titulo-index">REGISTRO DE USUARIOS</span>
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
                                <label for="personal_id">Id personal:</label>
                                <input type="text" id="personal_id" name="personal_id" value="{{old('personal_id')}}">
                                @error('personal_id')
                                <span>{{$message}}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col s6 center">
                                    <button class="btn" type="submit">Guardar</button>
                                </div >
                                <div class="col s3 center">
                                    <a class="btn" href="{{route('users.index')}}">Cancelar</a>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="col s12 m4">
                </div>
            </div>
@endsection
