<!-- ========== HEADER ========== -->
<header
    class="fixed top-4 inset-x-0 before:absolute before:inset-0 before:max-w-screen-xl before:mx-2 before:lg:mx-auto before:rounded-[26px] after:absolute after:inset-0 after:-z-[1] after:max-w-screen-xl after:mx-2 after:lg:mx-auto after:rounded-[26px] after:bg-white/10 dark:bg-neutral-900 after:backdrop-blur-lg lg:flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full ">
    <nav
        class="relative max-w-screen-xl w-full md:flex md:items-center md:justify-between md:gap-3 ps-5 pe-2 mx-2 lg:mx-auto py-2 hidden">
        <!-- Logo w/ Collapse Button -->
        <div class="flex items-center justify-between">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white"
                href="#" aria-label="Brand">
                <span class="flex items-center space-x-3">
                    <img src="{{ asset('static/image/logo_polije.png') }}" class="h-8" alt="logo">
                    <h1 class="text-white" id="brand">SPK PM</h1>
                </span>
            </a>
            <!-- Collapse Button -->
            <div class="md:hidden">
                <button type="button"
                    class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-full border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                    id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic"
                    aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                    <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="3" x2="21" y1="6" y2="6" />
                        <line x1="3" x2="21" y1="12" y2="12" />
                        <line x1="3" x2="21" y1="18" y2="18" />
                    </svg>
                    <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                    <span class="sr-only">Toggle navigation</span>
                </button>
            </div>
            <!-- End Collapse Button -->
        </div>
        <!-- End Logo w/ Collapse Button -->

        <!-- Collapse -->
        <div id="hs-header-classic"
            class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block"
            aria-labelledby="hs-header-classic-collapse">
            <div
                class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end gap-0.5 md:gap-1">
                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-300 dark:text-blue-500 dark:focus:text-blue-500"
                        href="/" aria-current="page" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                        </svg>
                        Beranda
                    </a>

                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="/pendahuluan" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                            <circle cx="12" cy="7" r="4" />
                        </svg>
                        Pendahuluan
                    </a>

                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="#" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 12h.01" />
                            <path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
                            <path d="M22 13a18.15 18.15 0 0 1-20 0" />
                            <rect width="20" height="14" x="2" y="6" rx="2" />
                        </svg>
                        Tinjauan
                    </a>

                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="#" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                        Metode
                    </a>

                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="#" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                        Hasil
                    </a>

                    <a class="p-2 flex items-center text-sm text-white hover:text-neutral-700 focus:outline-none focus:text-neutral-700 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                        href="#" id="nav-link">
                        <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path
                                d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                            <path d="M18 14h-8" />
                            <path d="M15 18h-5" />
                            <path d="M10 6h8v4h-8V6Z" />
                        </svg>
                        Kesimpulan
                    </a>

                    <!-- Button Group -->
                    <div
                        class="relative flex flex-wrap items-center gap-x-1.5 md:ps-2.5  md:ms-1.5 before:block before:absolute before:top-1/2 before:-start-px before:w-px before:h-4 before:bg-gray-300 before:-translate-y-1/2 dark:before:bg-neutral-700">
                        <a class="p-2 w-full flex items-center text-sm text-white hover:text-neutral-800 focus:outline-none focus:text-neutral-800 dark:text-neutral-200 dark:hover:text-neutral-500 dark:focus:text-neutral-500"
                            href="{{ route('login') }}" id="nav-link">
                            <svg class="shrink-0 size-4 me-3 md:me-2" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
                                <circle cx="12" cy="7" r="4" />
                            </svg>
                            Log in
                        </a>
                    </div>
                    <!-- End Button Group -->
                </div>
            </div>
        </div>
        <!-- End Collapse -->
    </nav>
    <nav
        class="bg-gradient-to-r from-blue-600 to-indigo-700 fixed lg:hidden lg:h-0 w-full h-[68px] z-20 lg:-z-50 top-0 left-0 frame">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4" id="navheader">
            <div class="flex items-center space-x-3 rtl:space-x-reverse" id="navheader-left">
                <a href="/" class="flex items-center space-x-3 lg:hidden">
                    <img src="{{ asset('static/image/logo_polije.png') }}" class="h-8" alt="logo">
                    <span class="font-semibold text-white text-lg">SPK PM</span>
                </a>
            </div>

            <div class="flex order-last space-x-3 md:space-x-0 rtl:space-x-reverse" id="navheader-right">
                <button id="navbutton"
                    class="relative flex flex-col justify-between w-[60px] h-[28px] group p-2 border-2 border-transparent lg:hidden">
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300 lg:hidden"></span>
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300 lg:hidden"></span>
                </button>
            </div>
        </div>

        <svg class="overlay absolute inset-0 w-screen h-screen z-50 pointer-events-none" width="100%"
            height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">

            <defs>
                <linearGradient id="gradient-bg" x1="0%" y1="50%" x2="100%" y2="50%">
                    <stop offset="0%" style="stop-color:#2563eb; stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#4f46e5; stop-opacity:1" />
                </linearGradient>
            </defs>

            <path class="overlay__path" vector-effect="non-scaling-stroke" d="M 0 100 V 100 Q 50 100 100 100 V 100 z"
                fill="url(#gradient-bg)" />
        </svg>

        <div
            class="relative menu-wrap h-screen w-screen transition-all duration-300 ease-in-out pointer-events-none opacity-0">

            <div class="flex h-full relative">
                <div
                    class="flex flex-wrap md:flex-row items-start justify-between flex-1 bg-gradient-to-r from-blue-600 to-indigo-700 text-white z-20 py-20 lg:py-40 px-10 space-y-6 md:space-y-0 transition-all duration-500">

                    <div class="hidden md:flex flex-row text-2xl font-[110] items-start justify-start w-1/2">
                        <h1 class="text-neutral-400 mr-8">Social Media</h1>
                        <div class="flex flex-col text-white space-y-3 md:space-y-6">
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Instagram</a>
                            </span>
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Linkedin</a>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex flex-col md:flex-row text-2xl font-[110] items-start justify-start w-full md:w-1/2">
                        <h1 class="text-2xl text-neutral-200 pb-4 mr-8">Menu</h1>
                        <div class="flex flex-col text-white space-y-9 md:space-y-6">
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Home</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Pendahuluan</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Tinjauan</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Metode</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Hasil</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Kesimpulan</a>
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6">
                        <h1 class="text-2xl font-[110] text-neutral-200">Get in touch</h1>
                        <a href="/"
                            class="menu__item text-[24px] font-normal text-white focus:outline-none hover-underline">
                            info@skripsi.achmadzakariya.my.id
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

{{-- <header>
    <nav
        class="bg-gradient-to-r from-blue-600 to-indigo-700 fixed lg:h-0 w-full h-[68px] z-20 lg:-z-50 top-0 left-0 frame">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4" id="navheader">
            <div class="flex items-center space-x-3 rtl:space-x-reverse" id="navheader-left">
                <a href="/" class="flex items-center space-x-3 lg:hidden">
                    <img src="{{ asset('static/image/logo_polije.png') }}" class="h-8" alt="logo">
                    <span class="font-semibold text-white text-lg">SPK PM</span>
                </a>
            </div>

            <div class="flex order-last space-x-3 md:space-x-0 rtl:space-x-reverse" id="navheader-right">
                <button id="navbutton"
                    class="relative flex flex-col justify-between w-[60px] h-[28px] group p-2 border-2 border-transparent lg:hidden">
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300 lg:hidden"></span>
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300 lg:hidden"></span>
                </button>
            </div>
        </div>

        <svg class="overlay absolute inset-0 w-screen h-screen z-50 pointer-events-none" width="100%"
            height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">

            <defs>
                <linearGradient id="gradient-bg" x1="0%" y1="50%" x2="100%" y2="50%">
                    <stop offset="0%" style="stop-color:#2563eb; stop-opacity:1" />
                    <stop offset="100%" style="stop-color:#4f46e5; stop-opacity:1" />
                </linearGradient>
            </defs>

            <path class="overlay__path" vector-effect="non-scaling-stroke" d="M 0 100 V 100 Q 50 100 100 100 V 100 z"
                fill="url(#gradient-bg)" />
        </svg>

        <div
            class="relative menu-wrap h-screen w-screen transition-all duration-300 ease-in-out pointer-events-none opacity-0">

            <div class="flex h-full relative">
                <div
                    class="flex flex-wrap md:flex-row items-start justify-between flex-1 bg-gradient-to-r from-blue-600 to-indigo-700 text-white z-20 py-20 lg:py-40 px-10 space-y-6 md:space-y-0 transition-all duration-500">

                    <div class="hidden md:flex flex-row text-2xl font-[110] items-start justify-start w-1/2">
                        <h1 class="text-neutral-400 mr-8">Social Media</h1>
                        <div class="flex flex-col text-white space-y-3 md:space-y-6">
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Instagram</a>
                            </span>
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Linkedin</a>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex flex-col md:flex-row text-2xl font-[110] items-start justify-start w-full md:w-1/2">
                        <h1 class="text-2xl text-neutral-200 pb-4 mr-8">Menu</h1>
                        <div class="flex flex-col text-white space-y-9 md:space-y-6">
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Home</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Pendahuluan</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Tinjauan</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Metode</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Hasil</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Kesimpulan</a>
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6">
                        <h1 class="text-2xl font-[110] text-neutral-200">Get in touch</h1>
                        <a href="/"
                            class="menu__item text-[24px] font-normal text-white focus:outline-none hover-underline">
                            info@skripsi.achmadzakariya.my.id
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header> --}}
<!-- ========== END HEADER ========== -->
