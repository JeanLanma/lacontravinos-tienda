<header class="bg-main-black w-full fixed">
    <div class="w-full px-40 flex justify-between items-center">    
        <!-- Logo -->
        <div>
            <div class="w-48">
                <img src="{{ asset('assets/logo-lacontravinos.png') }}" alt="Logo la contravinos">
            </div>
        </div>
        <!-- Nav Links -->
        <div>
            <nav class="text-white font-semibold text-xl">
                <ul class="flex items-center gap-6">
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Nosotros</a>
                    </li>
                    <li class="group transition-opacity duration-200 relative">
                        <a class="group-hover:opacity-70 transition-opacity duration-200" href="#">Sucursales <span><img class="inline" src="{{ asset('assets/icons/chevron-down.svg') }}" alt=""></span></a>
                        <ul class="pr-20 focus-within:flex hidden group-hover:flex flex-col gap-3 bg-main-black opacity-100 absolute z-50 border-t-2 border-t-acent-blue px-12 py-6">
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
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">15 Aniversario</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Eventos</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Blog</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#"><img src="{{ asset('assets/icons/search.svg') }}" alt="icon"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>