@extends('layouts.frontstore')

@section('content')
<div class="h-full w-full min-h-screen min-w-full py-12" style="background-image: url('{{asset('assets/hero-main2.png')}}'); background-size: cover; background-position: center;">
    <div class="flex flex-col items-center w-full">
        
        <div class="px-10 md:px-0 text-center">
            <h1 class="text-2xl md:text-4xl md:text-[2.5rem] font-bold text-white">¡Bienvenido a La Contra, La Tienda del Vino Mexicano!</h1>
        </div>

        <div class="w-full mt-12 lg:mt-36 text-center flex flex-col justify-center">
            
            <div class="mb-16">
                <h3 class="text-xl md:text-4xl font-bold text-white">ELIGE TU CIUDAD MÁS CERCANA</h3>
            </div>
            
            <div class="flex justify-center h-[27rem] md:h-auto">
                <ul class="flex flex-col md:flex-row gap-6 bg-black absolute px-12 md:px-12 xl:px-24 py-5 text-white font-bold text-2xl">
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Ensenada</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Tijuana</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Guadalajara</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Querétaro</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Roma</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Coyoacán</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Mérida</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Oaxaca</a>
                    </li>
                </ul>
            </div>

        </div>
    
    </div>
</div>
@endsection