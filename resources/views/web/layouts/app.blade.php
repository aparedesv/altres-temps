<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.head')
    @include('web.layouts.head')

    @if(isset($view) && view()->exists($view.'head'))

        @include($view.'head')

    @endif

</head>

<body>

    <div id="app" class="m-0 p-0">

        @include('web.layouts.topbar')

        <main class="p-0 m-0">

            @yield('content')

        </main>

    </div>

    @stack('scripts')

</body>

</html>
