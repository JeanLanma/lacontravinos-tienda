@extends('layouts.store')

@section('content')
<section class="w-full min-h-[14rem] lg:h-72 min-w-full py-12" style="background-image: url('{{asset('assets/img/portada_tienda-1.jpg')}}'); background-size: cover; background-position: center;">
    <div class="flex flex-col items-center w-full">
        
        <div class="px-10 md:px-0 text-center">
            <h2 class="text-[2.5rem] text-white">Tienda</h2>
        </div>
        <div class="text-white text-lg flex items-center gap-2">
            <div>
                <p class="text-main-black-2">Inicio</p>
            </div>
            <div>
                <p class="text-main-black-2 text-base">|</p>
            </div>
            <div>
                <p class="opacity-100">Tienda</p>
            </div>
        </div>
    </div>
</section>
<!-- main - products -->
<section class="bg-black px-4">
<div class="flex flex-wrap justify-center">
    <div class="md:order-2 md:flex md:flex-col md:justify-center md:items-end">
        <!-- Filters and sorting -->
        <div class="py-8 lg:py-2">
            <div class="flex flex-col lg:flex-row items-end lg:justify-end gap-4 lg:gap-8 lg:items-center">
                <div>
                    <span class="inline-flex items-center gap-2 bg-white h-10 px-4 group">Orden por defecto <span class="group-hover:rotate-180 transition-transform duration-300"><img src="{{ asset('assets/icons/chevron-down.svg') }}" alt="arrow down"></span></span>
                </div>
                <div class="hidden md:block">
                    <p class="text-white">Showing <span>1</span>– <span>12</span> of <span>257</span> item(s)</p>
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
        <div class="md:flex md:max-w-4xl">
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
    </div>
    
    <!-- Pagination -->
    <div class="md:order-2">
        @include('store.shared.pagination')
    </div>
    <!-- search, categories and filter by price -->
    <section class="md:order-0">
        <div>
            <!-- search -->
            <aside>
                <div>
                    <form action="#">
                        <div class="flex flex-col gap-2 w-full">
                            <div>
                                <label for="search_prduct" class="text-white">Buscar</label>
                            </div>
                            <div class="w-full flex gap-4">
                                <input class="flex-grow" name="search_prduct" type="text" placeholder="Buscar prodcutos...">
                                <button class="border border-white w-10 h-10 flex justify-center items-center  hover:bg-main-black-2" type="submit">
                                    <img src="{{ asset('assets/icons/search.svg') }}" alt="search">
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div>

                </div>
            </aside>
            <!-- categories -->
            <aside>
                <div>
                    <div class="w-full border-b border-b-main-black-2">
                        <h4 class="text-white text-xl pb-2 relative header-title">Categorías</h4>
                    </div>
                </div>
                <div>
                    <ul class="text-main-black-2 text-base py-4">
                        <li class="py-1">
                            <div class="flex justify-between items-center">
                                <span class="flex">
                                    <img src="{{ asset('assets/icons/chevron-forward.svg') }}" alt="">
                                    <span class="ml-2">
                                        Accerios (18)
                                    </span>
                                </span>
                                <span>
                                    <img class="rotate-90" src="{{ asset('assets/icons/chevron-forward.svg') }}" alt="icon">
                                </span>
                            </div>
                            <ul class="ml-8">
                                <li class="flex justify-between items-center py-1">
                                    <span class="flex">
                                        <img src="{{ asset('assets/icons/chevron-forward.svg') }}" alt="">
                                        <span class="ml-2">
                                            Bolsas (1)
                                        </span>
                                    </span>
                                </li>
                                <li class="flex justify-between items-center py-1">
                                    <span class="flex">
                                        <img src="{{ asset('assets/icons/chevron-forward.svg') }}" alt="">
                                        <span class="ml-2">
                                            Cajas (8)
                                        </span>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="py-1">
                            <div class="flex justify-between items-center">
                                <span class="flex">
                                    <img src="{{ asset('assets/icons/chevron-forward.svg') }}" alt="">
                                    <span class="ml-2">
                                        Accerios (18)
                                    </span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
            <aside>
                <div>
                    <div class="w-full border-b border-b-main-black-2">
                        <h4 class="text-white text-xl pb-2 relative header-title">Precio</h4>
                    </div>
                    <div>
                        <div class="range_container">
                            <div class="sliders_control">
                                <input id="fromSlider" type="range" value="10" min="0" max="100"/>
                                <input id="toSlider" type="range" value="40" min="0" max="100"/>
                            </div>
                            <div>
                                <div>
                                    <p class="text-main-black-2">Rango: $<span id="min_price_range">0</span> - $<span id="max_price_range">999</span> </p>
                                </div>
                            </div>
                            <div class="form_control">
                                <div class="form_control_container">
                                    <div class="form_control_container__time">Min</div>
                                    <input class="form_control_container__time__input" type="number" id="fromInput" value="10" min="0" max="100"/>
                                </div>
                                <div class="form_control_container">
                                    <div class="form_control_container__time">Max</div>
                                    <input class="form_control_container__time__input" type="number" id="toInput" value="40" min="0" max="100"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </section>
</div>
</section>

@push('scripts')
<script src="//unpkg.com/alpinejs" defer></script>
<script>

function controlFromInput(fromSlider, fromInput, toInput, controlSlider) {
    const [from, to] = getParsed(fromInput, toInput);
    fillSlider(fromInput, toInput, '#C6C6C6', '#BE161D', controlSlider);
    if (from > to) {
        fromSlider.value = to;
        fromInput.value = to;
    } else {
        fromSlider.value = from;
    }
}
    
function controlToInput(toSlider, fromInput, toInput, controlSlider) {
    const [from, to] = getParsed(fromInput, toInput);
    fillSlider(fromInput, toInput, '#C6C6C6', '#BE161D', controlSlider);
    setToggleAccessible(toInput);
    if (from <= to) {
        toSlider.value = to;
        toInput.value = to;
    } else {
        toInput.value = from;
    }
}

function controlFromSlider(fromSlider, toSlider, fromInput) {
  const [from, to] = getParsed(fromSlider, toSlider);
  fillSlider(fromSlider, toSlider, '#C6C6C6', '#BE161D', toSlider);
  controlToRangeDisplay(fromSlider, toSlider, toInput);
  if (from > to) {
    fromSlider.value = to;
    fromInput.value = to;
  } else {
    fromInput.value = from;
  }
}

function controlToSlider(fromSlider, toSlider, toInput) {
  const [from, to] = getParsed(fromSlider, toSlider);
  fillSlider(fromSlider, toSlider, '#C6C6C6', '#BE161D', toSlider);
  setToggleAccessible(toSlider);
  controlToRangeDisplay(fromSlider, toSlider, toInput);
  if (from <= to) {
    toSlider.value = to;
    toInput.value = to;
  } else {
    toInput.value = from;
    toSlider.value = from;
  }
}

function controlToRangeDisplay(fromSlider, toSlider, toInput) {
    const [from, to] = getParsed(fromSlider, toSlider);
    const minPriceRange = document.querySelector('#min_price_range');
    const maxPriceRange = document.querySelector('#max_price_range');
    minPriceRange.innerHTML = from;
    maxPriceRange.innerHTML = to;
}

function getParsed(currentFrom, currentTo) {
  const from = parseInt(currentFrom.value, 10);
  const to = parseInt(currentTo.value, 10);
  return [from, to];
}

function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
    const rangeDistance = to.max-to.min;
    const fromPosition = from.value - to.min;
    const toPosition = to.value - to.min;
    controlSlider.style.background = `linear-gradient(
      to right,
      ${sliderColor} 0%,
      ${sliderColor} ${(fromPosition)/(rangeDistance)*100}%,
      ${rangeColor} ${((fromPosition)/(rangeDistance))*100}%,
      ${rangeColor} ${(toPosition)/(rangeDistance)*100}%, 
      ${sliderColor} ${(toPosition)/(rangeDistance)*100}%, 
      ${sliderColor} 100%)`;
}

function setToggleAccessible(currentTarget) {
  const toSlider = document.querySelector('#toSlider');
  if (Number(currentTarget.value) <= 0 ) {
    toSlider.style.zIndex = 2;
  } else {
    toSlider.style.zIndex = 0;
  }
}

const fromSlider = document.querySelector('#fromSlider');
const toSlider = document.querySelector('#toSlider');
const fromInput = document.querySelector('#fromInput');
const toInput = document.querySelector('#toInput');
fillSlider(fromSlider, toSlider, '#C6C6C6', '#BE161D', toSlider);
setToggleAccessible(toSlider);

fromSlider.oninput = () => controlFromSlider(fromSlider, toSlider, fromInput);
toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
fromInput.oninput = () => controlFromInput(fromSlider, fromInput, toInput, toSlider);
toInput.oninput = () => controlToInput(toSlider, fromInput, toInput, toSlider);
</script>
@endpush
@endsection