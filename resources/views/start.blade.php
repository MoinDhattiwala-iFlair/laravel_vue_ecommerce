@php
$config = [
'appName' => config('app.name'),
'locale' => $locale = app()->getLocale(),
'locales' => config('app.locales'),
'githubAuth' => config('services.github.client_id'),
];
@endphp
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">


        <title>{{ config('app.name') }}</title>

        <link rel="stylesheet" href="{{ asset('css/vendors.bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.bundle.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" >
        <div id="root">
            <app></app>
        </div>

        {{-- Global configuration object --}}
        <script>
            window.config = @json($config);
        </script>

        {{-- Load the application scripts --}}
        <script src="{{ asset('js/vendors.bundle.js') }}"></script>
        <script src="{{ asset('js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>

</html>