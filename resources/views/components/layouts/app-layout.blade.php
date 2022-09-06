<div>
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

        <body>
            <div class="row container">
                <div class="">
                    <x-app-header/>
                </div>
                <div class="w-full border border-brand-dark-gray"></div>
            </div>
            <div class="container mx-auto max-w-screen-lg min-h-full">
                {{ $slot }}
            </div>
            <div class="bg-brand-dark-gray text-gray-300">
                <div class="container mx-auto max-w-screen-lg">
                    <x-app-footer/>
                </div>
            </div>
        </body>
    </html>
</div>
