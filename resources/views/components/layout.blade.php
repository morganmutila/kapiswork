<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="{{ request()->routeIs('home') ? 'mb-[4rem]' : '' }}">

            @includeUnless(request()->routeIs(['signup', 'login', 'password.request']), 'layouts.navigation')

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
            @includeUnless(request()->routeIs(['home', 'signup', 'login']), 'layouts.footer')
            @include('layouts.mobile-menu')
        </div>
    </body>
</html>
