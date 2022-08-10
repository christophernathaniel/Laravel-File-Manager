<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Styles -->
        @livewireStyles

        <!-- Scripts -->
        @vite(['resources/scss/website.scss', 'resources/js/website.js'])

    </head>
    <body class="font-sans antialiased">
        <style>
            .loading-view {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                width: 100vw;
                height: 100vh;
                background-color: #fff;
                z-index: 1000;
            }
        </style>
        <div class="loading-view"></div>
        <x-jet-banner />

        <div>
            @livewire('website.navigation')

          

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
