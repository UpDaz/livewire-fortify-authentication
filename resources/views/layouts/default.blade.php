<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Livewire authentication</title>

        <!-- Styles -->
        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="h-full">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @yield('content')
        </div>
        @vite('resources/js/app.js')
        @livewireScripts
    </body>
</html>
