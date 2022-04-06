<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @stack('meta')

    <!-- Styles -->
    <link href="{{ mix('css/frontend/app.css') }}" rel="stylesheet">
    @stack('styles')
    @livewireStyles
</head>

<body data-spy="scroll" data-target=".fixed-top">

    @include('layouts.frontend.navbar')

    {{ $slot }}

    @include('layouts.frontend.footer')
    <!-- Main Scripts -->
    @livewireScripts
    @stack('scripts')

    <script src="{{ asset('js/frontend/custom/jquery.min.js') }}"></script> <!-- jQuery for JavaScript plugins -->
    <script src="{{ asset('js/frontend/custom/jquery.easing.min.js') }}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{ asset('js/frontend/custom/swiper.min.js') }}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{ asset('js/frontend/custom/jquery.magnific-popup.js') }}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{ asset('js/frontend/custom/scripts.js') }}"></script> <!-- Custom scripts -->

    @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">
            document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>"
                .replace("HOST", location.hostname));
        </script>
    @endif
</body>

</html>
