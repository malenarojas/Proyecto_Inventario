<ul id="sidenav-left" class="sidenav">
<<<<<<< HEAD
    <li><div class="user-view dark-primary-color">
{{--            <a href="#users"><img class="circle" src="images/yuna.jpg"></a>--}}
            <a href="#name"><span class="white-text name">Malena Rojas Camargo</span></a>
            <a href="#email"><span class="white-text email">malenarojas2021@gmail.com</span></a>
=======
    <li>
        <div class="user-view">
            <div class="background">
                <img src="{{ asset('imgs/background.jpg') }}">
            </div>
            <a href="#user"><img class="circle center" src="{{ asset('imgs/profile.jpg') }}"></a>
            <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
>>>>>>> 541b572b90052cf7430d904d7528136cb268ed03
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>
    <li><a class="waves-effect" href="{{route('producto.index')}}">Modulo Producto<i class="material-icons">apps</i></a></li>
     @if(auth()->user()->personal->tipopersonal->cargo=='vendedor')
        <li><a class="waves-effect" href="#">Modulo compra <i class="material-icons">apps</i></a></li>
     @endif
    @if(auth()->user()->personal->tipopersonal->cargo=='comprador')
        <li><a class="waves-effect" href="#">Modulo compra <i class="material-icons">apps</i></a></li>
    @endif
    @if(auth()->user()->personal->tipopersonal->cargo=='administrador')
        <li><a class="waves-effect" href="{{route('personal.index')}}">Modulo personal <i class="material-icons">apps</i></a></li>
        <li><a class="waves-effect" href="{{route('user.index')}}">Modulo administrativo <i class="material-icons">apps</i></a></li>
        <li><a class="waves-effect" href="{{route('compra.index')}}">Modulo compra <i class="material-icons">apps</i></a></li>
        <li><a class="waves-effect" href="{{route('venta.index')}}">Modulo venta <i class="material-icons">apps</i></a></li>

    @endif

</ul>
