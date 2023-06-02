<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        @include('layouts.head')

    </head>

    <body onload="init()">

        <div id="app">

            @include('layouts.topbar')

            <main class="py-0">

                @yield('content')

            </main>

        </div>

        @stack('scripts')

    </body>

</html>
