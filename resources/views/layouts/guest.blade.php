<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon" />

    <!-- Styles -->
    <link href="{{ asset('css/frontend/app.css') }}" rel="stylesheet">
    @stack('styles')
    @livewireStyles
</head>

<body class="bg-body">

    @include('layouts.frontend.navbar')

    {{ $slot }}

    @include('layouts.frontend.footer')

    <!-- Main Scripts -->
    @livewireScripts

    <script src="{{ asset('js/frontend/app.js') }}"></script>
    @stack('scripts')

    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
        </script>
    @endif
</body>

</html>
