<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ALPA Template') }} - @yield('title', 'Landing Page Modern')</title>
    <meta name="description" content="@yield('meta_description', 'Template landing page modern untuk Laravel dengan TailwindCSS, AlpineJS, Livewire, Folio, dan Volt.')">
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Scripts and Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        @include('components.header')
        
        <!-- Main Content -->
        <main class="flex-grow">
            @yield('content')
        </main>
        
        <!-- Footer -->
        @include('components.footer')
    </div>
    
    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
