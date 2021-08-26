@auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth

<nav class="navbar nav-extended no-padding dark-primary-color">
    <div class="nav-wrapper">
        @auth
        <a href="#" class="brand-logo center hide-on-small-only">DIESEL BRAS-CRUZ</a>
        <ul id="nav-mobile" class="right">
{{--            <li>--}}
{{--                <a href="{{ route('home') }}"--}}
{{--                   class="waves-effect dark-primary-color-text"--}}
{{--                   type="submit">--}}
{{--                    <i class="material-icons">person</i>--}}
{{--                </a>--}}
{{--            </li>--}}

            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li>
                    <a href="#">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <div>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                            <i class="material-icons">logout</i>
{{--                            {{ __('Logout') }}--}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest


        </ul>
        <a href="#!" data-target="sidenav-left" class="sidenav-trigger left show-on-medium-and-up"><i class="material-icons dark-primary-color-icon">menu</i></a>

        @endauth

        @yield('breadcrumb')
    </div>
</nav>
