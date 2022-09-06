<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ isset($title) ? $title . ' - ' : '' }}{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        {{--        <!-- Styles -->--}}
        {{--        <link rel="stylesheet" href="{{ asset('css/app.css') }}">--}}

        {{--        <!-- Scripts -->--}}
        {{--        <script src="{{ asset('js/app.js') }}" defer></script>--}}

        @vite('resources/js/app.js')
        {{--        <livewire:styles />--}}
    </head>
    <body class="bg-white">
        <div class="">
            <div class="container mx-auto max-w-screen-lg">
                <x-app-header/>
            </div>
            <div class="w-full border-t border-brand-dark-gray"></div>
        </div>
        <div class="flex">
            <div class="min-h-screen w-1/4  top-0 left-0 bg-gray-100 overflow-hidden border-r border-gray-400">
                <ul class="text-center text-2xl p-0">
                    <li class="bg-gray-100 py-4 hover:bg-white"></li>
                    <li class="bg-gray-100 py-2 hover:bg-white"><a href="/admin/dashboard" class="nav-link"><span>Dashboard</span></a></li>
                    <li class="bg-gray-100 py-2 hover:bg-white"><a href="/admin/products" class="nav-link"><span>Products</span></a></li>
                </ul>
            </div>
            <div class="container mx-auto max-w-screen-lg min-h-full">
                {{ $slot }}
            </div>
        </div>
        <div class="bg-brand-dark-gray text-gray-300">
            <div class="container mx-auto max-w-screen-lg">
                <x-app-footer/>
            </div>
        </div>
    </body>
</html>
