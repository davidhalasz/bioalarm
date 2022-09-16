<header x-data="{
    navbarOpen: false,
}" class="absolute left-0 top-0 z-50 w-full">
    <div class="container mx-auto">
        <div class="relative -mx-4 flex items-center justify-between">
            <div class="w-60 max-w-full px-4">
                <a href="javascript:void(0)" class="block w-full py-5">
                    <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                </a>
            </div>
            <div class="flex w-full items-center justify-between px-4">
                <div>
                    <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'"
                        id="navbarToggler"
                        class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden">
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                        <span class="relative my-[6px] block h-[2px] w-[30px] bg-body-color"></span>
                    </button>
                    <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                        class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-white py-5 px-6 shadow transition-all lg:static lg:block lg:w-full lg:max-w-full lg:shadow-none">
                        <ul class="blcok lg:flex">
                            <li>
                                <a onclick="scrollTo('rolunk')" href="#rolunk"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Rólunk
                                </a>
                            </li>
                            <li>
                                <a onclick="scrollTo('szolgaltatasaink')" href="#szolgaltatasaink"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Szolgaltatásaink
                                </a>
                            </li>
                            <li>
                                <a onclick="scrollTo('projekt')" href="#projekt"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Projekt
                                </a>
                            </li>
                            <li>
                                <a onclick="scrollTo('hirek-esemenyek')" href="#hirek-esemenyek" 
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Hírek, események
                                </a>
                            </li>
                            <li>
                                <a onclick="scrollTo('galeria')" href="#galeria" 
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Galéria
                                </a>
                            </li>
                            <li>
                                <a onclick="scrollTo('kapcsolat')" href="#kapcsolat"
                                    class="flex py-2 text-base font-medium text-dark hover:text-primary lg:ml-12 lg:inline-flex">
                                    Kapcsolat
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
