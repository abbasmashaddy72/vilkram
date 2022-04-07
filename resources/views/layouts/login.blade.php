<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/backend/app.css') }}">
</head>

<body class="overflow-x-hidden " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">

    <!-- Loader -->
    @include('layouts.backend.loader')
    <div class="bg-body wrapper">
        <section class="block">
            <div class="flex flex-wrap items-center h-screen m-0 bg-white">
                {{ $slot }}
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/backend/hope-ui.js') }}"></script>
    <script src="{{ mix('js/backend/app.js') }}" defer></script>
</body>

</html>
