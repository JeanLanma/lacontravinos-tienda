<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'La Contravinos') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- favicon -->
        <link rel="icon" href="{{asset('assets/favicon.jpg')}}" type="image/png" sizes="16x16">
        <link rel="icon" href="{{asset('assets/favicon.jpg')}}" type="image/png" sizes="32x32">
        <link rel="icon" href="{{asset('assets/favicon.jpg')}}" type="image/png" sizes="192x192">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-main-black">
        <div class="min-h-screen bg-gray-100">
            <div class="xl:min-h-[12rem] md:min-h-[6rem] h-72">
                @include('layouts.navigation-store')
            </div>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>

            <footer class="bg-main-black w-full flex justify-between items-center text-center md:px-16 xl:px-44">

                <div>
                    <div class="w-24">
                        <img src="{{ asset('assets/logo-lacontravinos.png') }}" alt="Logo la contravinos">
                    </div>
                </div>
                <div class="text-center">
                    <h5 class="text-white text-center">Todos los derechos reservados La Contra 2023</h5>
                </div>
                <div>
                    <ul class="flex items-center gap-4">
                        <li>
                            <a href="#">
                                <img class="stroke-white fill-white w-8" src="{{ asset('assets/icons/f-facebook.svg') }}" alt="facebook">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="stroke-white fill-white w-6" src="{{ asset('assets/icons/instagram.svg') }}" alt="instagram">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="stroke-white fill-white w-8" src="{{ asset('assets/icons/twitter-x.svg') }}" alt="twitter">
                            </a>
                        </li>
                    </ul>
                </div>

            </footer>
        </div>
    </body>
</html>
