<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('layouts.styles')
    @stack('styles')
</head>
<body  >
    @include('layouts.header')
    <main class="primary-background">
        <div class="container"></div>
        <div class="row">
            <div class="col s12 m12 l12 l12 xl10 offset-xl1 ">
                @include('layouts.response')
                @yield('contenido')
            </div>
        </div>

        @include('layouts.preloader')
        @include('layouts.footer')
    </main>

    @include('layouts.scripts')
    @stack('scripts')
</html>
