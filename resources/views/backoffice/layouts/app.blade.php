<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('backoffice.layouts.head')

    @if(isset($view) && view()->exists($view.'head'))

        @include($view.'head')

    @endif

</head>

<body>

    <div id="app" class="mx-auto p-0">

        @include('backoffice.layouts.topbar')

        <main id="content" class="p-0 m-0">

            @yield('content')

        </main>

    </div>

    @include('backoffice.layouts.includes')

    @stack('scripts')

</body>

</html>
