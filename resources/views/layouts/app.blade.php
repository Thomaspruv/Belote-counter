<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ url('/favicon.ico') }}">
        <link rel="shortcut icon" href="{{ url('/favicon.ico') }}" type="image/x-icon">
        <link rel="icon" sizes="16x16" href="{{ url('/favicon-16x16.png') }}" type="image/png">
        <link rel="icon" sizes="32x32" href="{{ url('/favicon-32x32.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @yield('head')

        @stack('css')

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-900 flex flex-col">

            @include('layouts.header')

            <!-- Page Content -->
            <main class="flex-1">
                {{ $slot }}
            </main>

            @include('layouts.footer')

        </div>

        @livewireScripts

        @stack('js')
    </body>
</html>
