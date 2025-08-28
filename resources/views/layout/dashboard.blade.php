<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="cupcake">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Task Manager') }} - Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Icons (Heroicons) -->
    <script src="https://unpkg.com/@heroicons/react@2.0.0/24/outline/index.js" type="module"></script>

    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="font-sans antialiased" x-data="{ sidebarOpen: false }">
    <!-- Sidebar backdrop (mobile) -->
    <livewire:component.side-menu />

    <!-- Main content -->
    <div class="lg:pl-64">
         <!-- Top navigation -->
        <livewire:component.top-header />

        <!-- Page content -->
        <main class="flex-1" data-theme="cupcake">
            <div class="py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    @if(isset($slot))
                        {{ $slot }}
                    @else
                        @yield('content')
                    @endif
                </div>
            </div>
        </main>
    </div>
    @livewireScripts
</body>
</html>
