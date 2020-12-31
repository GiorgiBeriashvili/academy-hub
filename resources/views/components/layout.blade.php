<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Meta tags -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicon and title -->
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <title>Academy Hub</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="with-custom-webkit-scrollbars with-custom-css-scrollbars css-scrollbar-transparent-track" data-dm-shortcut-enabled="true" data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">
        {{--        @if (Route::has('login'))--}}
        {{--            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">--}}
        {{--                @auth--}}
        {{--                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>--}}
        {{--                @else--}}
        {{--                    <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>--}}

        {{--                    @if (Route::has('register'))--}}
        {{--                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>--}}
        {{--                    @endif--}}
        {{--                @endauth--}}
        {{--            </div>--}}
        {{--        @endif--}}

        <!-- Modals go here -->
        <!-- Reference: https://www.gethalfmoon.com/docs/modal -->
        <x-image-modal/>

        <!-- Page wrapper start -->
{{--        data-sidebar-hidden="hidden"--}}
        <div class="page-wrapper with-navbar @auth with-sidebar @endauth with-navbar-fixed-bottom" data-sidebar-hidden="hidden">
            <!-- Sticky alerts (toasts), empty container -->
            <!-- Reference: https://www.gethalfmoon.com/docs/sticky-alerts-toasts -->
            <x-sticky-alert/>

            <!-- Header start -->
            <x-header/>
            <!-- Header end -->

            <!-- Sidebar start -->
            @auth <x-sidebar/> @endauth
            <!-- Sidebar end -->

            <!-- Content wrapper start -->
            {{ $slot }}
            <!-- Content wrapper end -->

            <!-- Footer start -->
            <x-footer/>
            <!-- Footer end -->
        </div>
    </body>
</html>

<script defer>
    document.addEventListener('DOMContentLoaded', (event) => {
        halfmoon.onDOMContentLoaded();
    });
</script>
