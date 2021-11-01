<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'EXACT Sports Styles') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    </head>
    <body class="antialiased text-gray-100 bg-gray-800">
        <div class="relative flex justify-center min-h-screen py-4 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto text-center sm:px-6 lg:px-8">
                <x-headings.h1>EXACT Sports</x-headings.h1>
               @if (Route::has('login'))
                <div class="px-6 py-2 sm:block">
                    @auth
                    <a href="{{ url('/dashboard') }}" class="text-sm text-gray-100 hover:text-bright-orange">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-100 hover:text-bright-orange">Log in</a>
                
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-100 hover:text-bright-orange">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </body>
</html>
