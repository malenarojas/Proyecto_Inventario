<ul id="sidenav-left" class="sidenav">
    <li>
        <div class="user-view">
            <div class="background">
                <img src="{{ asset('imgs/background.jpg') }}">
            </div>
            <a href="#user"><img class="circle center" src="{{ asset('imgs/profile.jpg') }}"></a>
            <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>
    <li><a class="waves-effect" href="{{route('producto.index')}}">Modulo Producto<i class="material-icons">apps</i></a></li>
    <li><a class="waves-effect" href="{{route('ubicacion.index')}}">Modulo Ubicacion<i class="material-icons">apps</i></a></li>
     @if(auth()->user()->personal->tipopersonal->cargo=='vendedor')
        <li><a class="waves-effect" href="#">Modulo compra <i class="material-icons">apps</i></a></li>
     @endif
    @if(auth()->user()->personal->tipopersonal->cargo=='comprador')
        <li><a class="waves-effect" href="#">Modulo compra <i class="material-icons">apps</i></a></li>
    @endif
    @if(auth()->user()->personal->tipopersonal->cargo=='administrador')
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE PERSONAL</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('personal.index')}}">Gestionar personal <i class="material-icons">person_pin</i></a></li>
                            <li><a class="waves-effect" href="{{ route('tipopersonal.index') }}">Gestionar tipo personal<i class="material-icons">person_pin</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li><a class="waves-effect" href="{{route('users.index')}}">Modulo administrativo <i class="material-icons">apps</i></a></li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE PERSONAL</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('personal.index')}}">Gestionar personal <i class="material-icons">person_pin</i></a></li>
                            <li><a class="waves-effect" href="{{ route('tipopersonal.index') }}">Gestionar tipo personal<i class="material-icons">person_pin</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>

        <li><a class="waves-effect" href="{{route('compra.index')}}">Modulo compra <i class="material-icons">apps</i></a></li>
        <li><a class="waves-effect" href="{{route('venta.index')}}">Modulo venta <i class="material-icons">apps</i></a></li>

    @endif

</ul>
