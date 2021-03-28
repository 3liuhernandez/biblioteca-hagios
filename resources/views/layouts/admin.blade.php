<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/admin.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('includes.navbar')
        <main class="py-4 d-flex">
            <div class="col-md-3 col-lg-2 col-sm-2 hidden-xs bg-dark d-flex flex-wrap">
                <h2>@yield('section_name')</h2>
                @include('includes.admin.sidenav')
                <hr class="d-md-none">
            </div>
            <div class="col-md-9 col-lg-10 col-12 col-sm-10 col-12d-flex flex-wrap align-items-center">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
