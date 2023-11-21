<header class="hidden lg:block bg-main-black w-full fixed">
    <div class="w-full px-40 md:px-16 xl:px-[9.75rem] flex justify-between items-center">    
        <!-- Logo -->
        <div>
            <div class="xl:w-48 md:w-24">
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
<header class="lg:hidden bg-main-black w-full h-full z-10">
    <div class="w-full h-20 flex flex-col justify-between items-center px-9">    
        <!-- Logo -->
        <div>
            <div class="w-60 md:w-24 xl:w-48">
                <img src="{{ asset('assets/logo-lacontravinos.png') }}" alt="Logo la contravinos">
            </div>
        </div>
        <!-- Nav Links -->
        <div class="flex justify-between w-full">

            <div>
                <div class="border-y-2 border-y-main-red">
                    <button class="text-main-red leading-6 text-center pb-1">Menu</button>
                </div>
            </div>
                
            <div class="flex items-center gap-4">
                <div class="hover:opacity-70 transition-opacity duration-200">
                    <a href="#"><img class="w-6" src="{{ asset('assets/icons/person-outline.svg') }}" alt="icon"></a>
                </div>

                <div class="hover:opacity-70 transition-opacity duration-200">
                    <a href="#">
                        <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.02721 17.4475L7.51883 13.9559C8.63792 14.7965 10.0001 15.2503 11.3997 15.2488C14.9749 15.2488 17.8835 12.3401 17.8835 8.765C17.8835 5.18988 14.9749 2.28125 11.3997 2.28125C7.82462 2.28125 4.91598 5.18988 4.91598 8.765C4.91445 10.1646 5.36825 11.5268 6.20887 12.6459L2.71725 16.1375C2.55926 16.3143 2.47492 16.5448 2.48155 16.7818C2.48818 17.0187 2.58528 17.2442 2.75291 17.4118C2.92055 17.5795 3.14599 17.6766 3.38297 17.6832C3.61994 17.6898 3.85047 17.6055 4.02721 17.4475ZM11.3997 4.13375C12.3157 4.13375 13.2111 4.40537 13.9727 4.91426C14.7343 5.42315 15.3279 6.14645 15.6785 6.9927C16.029 7.83895 16.1207 8.77014 15.942 9.66851C15.7633 10.5669 15.3222 11.3921 14.6745 12.0398C14.0268 12.6875 13.2016 13.1286 12.3032 13.3073C11.4049 13.486 10.4737 13.3942 9.62743 13.0437C8.78118 12.6932 8.05788 12.0996 7.54899 11.338C7.0401 10.5764 6.76848 9.68097 6.76848 8.765C6.76996 7.53717 7.25836 6.36005 8.12657 5.49184C8.99478 4.62363 10.1719 4.13522 11.3997 4.13375Z" fill="#ff0013"/>
                        </svg>
                    </a>
                </div>
                
                <div class="w-10" id="mobile-menu-btn">
                    <img class="w-8" src="{{ asset('assets/icons/cart-outline.svg') }}" alt="menu icon">
                </div>
            </div>
            
            <nav id="mobile-menu-container" class="hidden absolute right-0 mt-5 z-50 w-72 py-8 text-white font-semibold text-xl bg-main-black border-t-2 border-t-acent-blue">
                <ul class="flex flex-col pl-8 gap-6">
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Inicio</a>
                    </li>
                    <li class="hover:opacity-70 transition-opacity duration-200">
                        <a href="#">Nosotros</a>
                    </li>
                    <li class="group">
                        <a class="group-hover:opacity-70 transition-opacity duration-200" href="#">Sucursales <span><img class="inline" src="{{ asset('assets/icons/chevron-down.svg') }}" alt=""></span></a>
                        <ul class="flex flex-col gap-3 pl-9 pt-4">
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
                </ul>
            </nav>

        </div>
    </div>
</header>