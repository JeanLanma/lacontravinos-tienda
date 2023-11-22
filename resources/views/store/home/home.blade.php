@extends('layouts.store')

@section('content')
<div class="w-full min-h-[14rem] min-w-full py-12" style="background-image: url('{{asset('assets/img/portada_tienda-1.jpg')}}'); background-size: cover; background-position: center;">
    <div class="flex flex-col items-center w-full">
        
        <div class="px-10 md:px-0 text-center">
            <h2 class="text-[2.5rem] text-white">Tienda</h2>
        </div>
        <div class="text-white text-lg flex items-center gap-2">
            <div>
                <p class="opacity-70">Inicio</p>
            </div>
            <div>
                <p class="opacity-70 text-base">|</p>
            </div>
            <div>
                <p class="opacity-100">Tienda</p>
            </div>
        </div>
    </div>
</div>
<!-- main - products -->
<section class="bg-black px-4">
    <!-- Filters and sorting -->
    <div class="py-8">
        <div class="flex flex-col items-end gap-4">
            <div>
                <span class="inline-flex items-center gap-2 bg-white h-10 px-4 group">Orden por defecto <span class="group-hover:rotate-180 transition-transform duration-300"><img src="{{ asset('assets/icons/chevron-down.svg') }}" alt="arrow down"></span></span>
            </div>
            <div>
                <div class="inline-flex items-center gap-2 bg-white h-10 px-4 group">
                    <span class="text-sm">
                        Mostrar
                    </span>
                    <ul class="flex gap-4 text-sm">
                        <li class="text-main-red">12</li>
                        <li>24</li>
                        <li>36</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Products -->
    <div>
        <a href="#">
            <article class="py-4 flex flex-col items-center gap-1">
                <div>
                    <img src="{{ asset('assets/tmp/18-Cosechas-2-600x899.png') }}" alt="Producto 18 cosechas">
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h3 class="text-white text-base">18 cosechas</h3>
                    <p class="text-main-red-2 text-lg">$4,856.00</p>
            </article>
        </a>
        
        <a href="#">
            <article class="py-4 flex flex-col items-center gap-1">
                <div>
                    <img src="{{ asset('assets/tmp/18-Cosechas-2-600x899.png') }}" alt="Producto 18 cosechas">
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h3 class="text-white text-base">18 cosechas</h3>
                    <p class="text-main-red-2 text-lg">$4,856.00</p>
            </article>
        </a>
        
        
        <a href="#">
            <article class="py-4 flex flex-col items-center gap-1">
                <div>
                    <img src="{{ asset('assets/tmp/18-Cosechas-2-600x899.png') }}" alt="Producto 18 cosechas">
                </div>
                <div class="flex flex-col items-center gap-3">
                    <h3 class="text-white text-base">18 cosechas</h3>
                    <p class="text-main-red-2 text-lg">$4,856.00</p>
            </article>
        </a>
        
    </div>
    <!-- Pagination -->
    <div>
        <div>
            <span class="text-white bg-main-red w-10 h-10">1</span>
        </div>
    </div>
</section>
@endsection