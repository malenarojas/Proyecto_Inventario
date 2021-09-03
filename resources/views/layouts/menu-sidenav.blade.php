<ul id="sidenav-left" class="sidenav">
    <li>
        <div class="user-view dark-primary-color">
            <a href="#user"><img class="circle center" src="{{ asset('imgs/inyector.jpeg') }}"></a>
            <a href="#name"><span class="white-text name">{{ auth()->user()->personal->nombre }}</span></a>
            <a href="#email"><span class="white-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader">Administración</a></li>

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
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE PRODUCTO</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('producto.index')}}">Gestionar Producto<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('ubicacion.index')}}">Gestionar Ubicacion<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('area.index')}}">Gestionar Area<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('estante.index')}}">Gestionar Estante<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('marca.index')}}">Gestionar marca<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('nacionalidad.index')}}">Gestionar nacionalidad<i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{route('categoria.index')}}">Gestionar categoria<i class="material-icons">apps</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
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
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE ADMINISTTRATIVO</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('users.index')}}">Gestionar usuarios <i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{ route('tipopersonal.index') }}">Gestionar tipo personal<i class="material-icons">person_pin</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE COMPRA</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('compra.index')}}">Gestionar compra <i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{ route('proveedor.index') }}">Gestionar proveedor<i class="material-icons">person_pin</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
        <li class="no-padding">
            <ul class="collapsible collapsible-accordion">
                <li>
                    <div class="collapsible-header"><i class="material-icons">folder_shared</i>MODULO DE VENTA</div>
                    <div class="collapsible-body blue lighten-5">
                        <ul>
                            <li><a class="waves-effect" href="{{route('venta.index')}}">Gestionar venta <i class="material-icons">apps</i></a></li>
                            <li><a class="waves-effect" href="{{ route('cliente.index') }}">Gestionar proveedor<i class="material-icons">person_pin</i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    @endif

</ul>
