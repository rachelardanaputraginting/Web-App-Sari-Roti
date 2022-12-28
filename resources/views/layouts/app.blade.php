<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="dark:bg-dark">
    <!-- Page Content -->

    @if (Route::is('admin.*'))
        @livewire('admin.component.navigation')
        {{-- @livewire('admin.component.sidebar') --}}
    @elseif(Route::is('register') || Route::is('login'))
    @else
        @livewire('component.navigation')
    @endif

    <div class="dark:bg-dark">
        {{ $slot }}
    </div>

    @if (Route::is('admin.*'))
        @livewire('component.footer')
    @elseif(Route::is('register') || Route::is('login'))
    @else
        @livewire('component.footer')
    @endif


    @livewireScripts
</body>

</html>
