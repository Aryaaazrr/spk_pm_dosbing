<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-blue-600 to-indigo-700  fixed w-full h-[68px] z-20 top-0 left-0 frame">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4" id="navheader">
            <div class="flex items-center space-x-3 rtl:space-x-reverse" id="navheader-left">
                <a href="/" class="flex items-center space-x-3">
                    <img src="{{ asset('static/image/logo_polije.png') }}" class="h-8" alt="logo">
                    <span class="font-semibold text-white text-lg">SPK PM</span>
                </a>
            </div>

            <div class="flex order-last space-x-3 md:space-x-0 rtl:space-x-reverse" id="navheader-right">
                <button id="navbutton"
                    class="relative flex flex-col justify-between w-[60px] h-[28px] group p-2 border-2 border-transparent">
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300"></span>
                    <span class="menu-line w-full h-[1px] bg-white transition-all duration-300"></span>
                </button>
            </div>
        </div>

        <svg class="overlay absolute inset-0 w-screen h-screen z-50 pointer-events-none" width="100%" height="100%"
            viewBox="0 0 100 100" preserveAspectRatio="none">

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
                                <a href="/" class="menu__item focus:outline-none hover-underline">X</a>
                            </span>
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Facebook</a>
                            </span>
                            <span>
                                <a href="/" class="menu__item focus:outline-none hover-underline">Linkedin</a>
                            </span>
                        </div>
                    </div>

                    <div
                        class="flex flex-col md:flex-row text-2xl font-[110] items-start justify-start w-full md:w-1/2">
                        <h1 class="text-2xl text-neutral-400 pb-4 mr-8">Menu</h1>
                        <div class="flex flex-col text-white space-y-9 md:space-y-6">
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Home</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Our
                                    Work</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">About
                                    Us</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">People</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">Services</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item {text-[40px] lg:text-5xl focus:outline-none hover-underline">Contact
                                    Us</a>
                            </span>
                            <span>
                                <a href=""
                                    class="menu__item text-[40px] lg:text-5xl focus:outline-none hover-underline">News</a>
                            </span>
                        </div>
                    </div>

                    <div class="absolute bottom-0 left-0 p-6">
                        <h1 class="text-2xl font-[110] text-neutral-400">Get in touch</h1>
                        <a href="/"
                            class="menu__item text-[32px] font-normal text-white focus:outline-none hover-underline">
                            info@reddarch.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700">
        <div class="max-w-screen-xl h-fit lg:h-screen mx-auto px-4 py-24 lg:flex lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <h1 class="text-3xl font-bold text-white sm:text-4xl leading-tight">
                    Sistem Pendukung Keputusan <br>
                    <span class="font-light">Profile Matching Method</span>
                </h1>
                <p class="mt-6 text-xl text-blue-100">
                    Create beautiful, modern, and responsive web applications with Tailwind CSS and Flowbite.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('login') }}"
                        class="px-8 py-4 text-blue-900 bg-white rounded-lg hover:bg-blue-50 transition duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl font-semibold">
                        Get Started
                    </a>
                    <a href="#"
                        class="px-8 py-4 text-white border-2 border-white rounded-lg hover:bg-white/10 transition duration-300 transform hover:-translate-y-1 font-semibold">
                        Download Proposal
                    </a>
                </div>
            </div>
            <div class="mt-10 lg:mt-0 lg:w-1/2">
                <img src="{{ asset('static/image/hero.png') }}" alt="Mockup"
                    class="w-full rounded-lg animate-CustomBounce">
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <!-- Pendahuluan -->
    <section class="bg-white py-20 space-y-28">
        <div class="max-w-screen-xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-4">Rumusan Masalah</h2>
            <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto">Rumusan masalah dari penulisan laporan ini
                adalah sebagai berikut</p>
            <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Feature 1 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-blue-50 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-telescope w-8 h-8 text-blue-600">
                            <path
                                d="m10.065 12.493-6.18 1.318a.934.934 0 0 1-1.108-.702l-.537-2.15a1.07 1.07 0 0 1 .691-1.265l13.504-4.44" />
                            <path d="m13.56 11.747 4.332-.924" />
                            <path d="m16 21-3.105-6.21" />
                            <path
                                d="M16.485 5.94a2 2 0 0 1 1.455-2.425l1.09-.272a1 1 0 0 1 1.212.727l1.515 6.06a1 1 0 0 1-.727 1.213l-1.09.272a2 2 0 0 1-2.425-1.455z" />
                            <path d="m6.158 8.633 1.114 4.456" />
                            <path d="m8 21 3.105-6.21" />
                            <circle cx="12" cy="13" r="2" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Implementasi Metode</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Bagaimana mengimplementasikan metode Profile
                        Matching untuk sistem pendukung keputusan pemilihan dosen pembimbing skripsi?</p>
                </div>

                <!-- Feature 2 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-green-50 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-code w-8 h-8 text-green-600">
                            <polyline points="16 18 22 12 16 6" />
                            <polyline points="8 6 2 12 8 18" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Rancang Bangun Sistem</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Bagaimana merancang dan membangun sistem
                        pendukung keputusan pemilihan dosen pembimbing skripsi?</p>
                </div>

                <!-- Feature 3 -->
                <div class="p-8 bg-white rounded-xl shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="flex items-center justify-center w-14 h-14 bg-yellow-50 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-notebook-pen w-8 h-8 text-yellow-300">
                            <path d="M13.4 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7.4" />
                            <path d="M2 6h4" />
                            <path d="M2 10h4" />
                            <path d="M2 14h4" />
                            <path d="M2 18h4" />
                            <path
                                d="M21.378 5.626a1 1 0 1 0-3.004-3.004l-5.01 5.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z" />
                        </svg>
                    </div>
                    <h3 class="mt-6 text-2xl font-bold text-gray-900">Evaluasi Sistem</h3>
                    <p class="mt-4 text-lg text-gray-600 leading-relaxed">Bagaimana mengevaluasi sistem pendukung
                        keputusan dalam pemilihan dosen pembimbing skripsi menggunakan Profile Matching?</p>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white py-20 space-y-28">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-12">
                <div class="lg:w-3/4">
                    <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl dark:text-white">
                        Tujuan Penelitian
                    </h2>
                    <p class="mt-3 text-gray-800 dark:text-neutral-400">
                        Tujuan dari penelitian skripsi ini adalah sebagai berikut.
                    </p>
                    <p class="mt-5">
                        <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                            href="#">
                            Contact sales to learn more
                            <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </p>
                </div>
                <!-- End Col -->

                <div class="space-y-6 lg:space-y-10">
                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Kesesuaian Profile Matching dalam Pemilihan Dosen
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Mengetahui tingkat kesesuaian metode Profile Matching dalam pemilihan dosen pembimbing
                                skripsi
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                                <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Hasil Sistem
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Menghasilkan sistem pedukung keputusan pemilihan dosen pembimbing skripsi.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-5 sm:gap-x-8">
                        <!-- Icon -->
                        <span
                            class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M7 10v12" />
                                <path
                                    d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                            </svg>
                        </span>
                        <div class="grow">
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Hasil Pengujian Sistem Profile Matching
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                Mengetahui hasil dari pengujian terhadap sistem pendukung keputusan menggunakan metode
                                Profile Matching dalam pemilihan dosen pembimbing skripsi.
                            </p>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
                <!-- End Col -->
            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-20 space-y-28">
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="relative p-6 md:p-16">
                <!-- Grid -->
                <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                    <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                        <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200">
                            Manfaat Penelitian
                        </h2>

                        <!-- Tab Navs -->
                        <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist"
                            aria-orientation="vertical">
                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 active"
                                id="tabs-with-card-item-1" aria-selected="true" data-hs-tab="#tabs-with-card-1"
                                aria-controls="tabs-with-card-1" role="tab">
                                <span class="flex gap-x-6">
                                    <svg class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="m12 3-1.912 5.813a2 2 0 0 1-1.275 1.275L3 12l5.813 1.912a2 2 0 0 1 1.275 1.275L12 21l1.912-5.813a2 2 0 0 1 1.275-1.275L21 12l-5.813-1.912a2 2 0 0 1-1.275-1.275L12 3Z" />
                                        <path d="M5 3v4" />
                                        <path d="M19 17v4" />
                                        <path d="M3 5h4" />
                                        <path d="M17 19h4" />
                                    </svg>
                                    <span class="grow">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Kontribusi Positif</span>
                                        <span
                                            class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Memberikan
                                            kontribusi positif terhadap kualitas penelitian skripsi mahasiswa dengan
                                            memastikan bahwa mereka mendapatkan bimbingan dari beberapa kriteria dosen
                                            pembimbing yang paling sesuai dengan topik penelitian mereka.</span>
                                    </span>
                                </span>
                            </button>

                            <button type="button"
                                class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-start hover:bg-gray-200 focus:outline-none focus:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                id="tabs-with-card-item-2" aria-selected="false" data-hs-tab="#tabs-with-card-2"
                                aria-controls="tabs-with-card-2" role="tab">
                                <span class="flex gap-x-6">
                                    <svg class="shrink-0 mt-2 size-6 md:size-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m12 14 4-4" />
                                        <path d="M3.34 19a10 10 0 1 1 17.32 0" />
                                    </svg>
                                    <span class="grow">
                                        <span
                                            class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Efisiensi administratif</span>
                                        <span
                                            class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Membantu meningkatkan efisiensi administratif dalam proses pemilihan dosen pembimbing skripsi di Program Studi D4-Teknik Informatika Jurusan Teknologi Informasi Politeknik Negeri Jember dengan memanfaatkan teknologi informasi dan sistem pendukung keputusan.</span>
                                    </span>
                                </span>
                            </button>
                        </nav>
                        <!-- End Tab Navs -->
                    </div>
                    <!-- End Col -->

                    <div class="lg:col-span-6">
                        <div class="relative">
                            <!-- Tab Content -->
                            <div>
                                <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                        src="https://images.unsplash.com/photo-1605629921711-2f6b00c6bbf4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80"
                                        alt="Features Image">
                                </div>

                                <div id="tabs-with-card-2" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-2">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                        src="https://images.unsplash.com/photo-1665686306574-1ace09918530?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80"
                                        alt="Features Image">
                                </div>

                                <div id="tabs-with-card-3" class="hidden" role="tabpanel"
                                    aria-labelledby="tabs-with-card-item-3">
                                    <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/20"
                                        src="https://images.unsplash.com/photo-1598929213452-52d72f63e307?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&h=720&q=80"
                                        alt="Features Image">
                                </div>
                            </div>
                            <!-- End Tab Content -->

                            <!-- SVG Element -->
                            <div class="hidden absolute top-0 end-0 translate-x-20 md:block lg:translate-x-20">
                                <svg class="w-16 h-auto text-orange-500" width="121" height="135"
                                    viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                    <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874"
                                        stroke="currentColor" stroke-width="10" stroke-linecap="round" />
                                </svg>
                            </div>
                            <!-- End SVG Element -->
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->

                <!-- Background Color -->
                <div class="absolute inset-0 grid grid-cols-12 size-full">
                    <div
                        class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-neutral-800">
                    </div>
                </div>
                <!-- End Background Color -->
            </div>
        </div>
    </section>

    <section class="section-our-work" id="our-work">
        <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">What Our Users Say</h2>
        <div class="max-w-screen-xl mx-auto px-4">
            <div class="swiper-container w-full h-[500px] md:h-[400px] mt-16 slider-testimonials  overflow-hidden">
                <div class="swiper-wrapper flex w-full h-full" id="portfolio-swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide cursor-pointer">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "This platform has completely transformed how I build websites. The tools are intuitive
                                and the results are stunning!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer
                                for modern web design."
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "The combination of Tailwind CSS and this platform has significantly boosted my
                                productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Sarah Johnson</h4>
                                    <p class="text-sm text-gray-600">Web Developer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "This platform has completely transformed how I build websites. The tools are intuitive
                                and the results are stunning!"
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Michael Chen</h4>
                                    <p class="text-sm text-gray-600">UI/UX Designer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "I've never worked with a more efficient and customizable framework. It's a game-changer
                                for modern web design."
                            </p>
                        </div>
                    </div>
                    <div class="swiper-slide cursor-pointer ">
                        <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                            <div class="flex items-center gap-4 mb-6" id="profile-card">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="User"
                                    class="w-12 h-12 rounded-full">
                                <div>
                                    <h4 class="font-bold text-gray-900">Emily Davis</h4>
                                    <p class="text-sm text-gray-600">Frontend Engineer</p>
                                </div>
                            </div>
                            <p class="text-gray-600 leading-relaxed text-center text-content-swipper hidden">
                                "The combination of Tailwind CSS and this platform has significantly boosted my
                                productivity. Highly recommend!"
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="relative w-full">
                    <div class="absolute h-10 bottom-6 left-0 right-4 flex items-center justify-end space-x-2 z-10">
                        <div class="swiper-pagination flex-grow h-[1px] bg-transparent rounded-full "></div>
                        <div id="button-prev"
                            class="p-3 hover:scale-125 rounded-full bg-white shadow-xl cursor-pointer transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-left text-primary">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                        </div>
                        <div id="button-next"
                            class="p-3 hover:scale-125 rounded-full bg-white shadow-xl cursor-pointer transition-all duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-right text-primary">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <div class="max-w-screen-xl mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="font-bold text-lg mb-4">SPK PDP-PM</h3>
                    <p class="text-sm text-gray-400">Decision Support System using Profile Matching Method</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#about" class="text-gray-400 hover:text-white">About</a></li>
                        <li><a href="#testimonials" class="text-gray-400 hover:text-white">Testimonials</a></li>
                        <li><a href="#profile-matching" class="text-gray-400 hover:text-white">Profile Matching</a>
                        </li>
                        <li><a href="#research-methods" class="text-gray-400 hover:text-white">Research Methods</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Contact</h4>
                    <p class="text-gray-400">Email: info@spkpm.com</p>
                    <p class="text-gray-400">Phone: +62 123 4567</p>
                </div>
                <div>
                    <h4 class="font-semibold mb-4">Follow Us</h4>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm text-gray-400">
                &copy; 2025 SPK PDP-PM. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // const btn = document.querySelector("button.mobile-menu-button");
        // const menu = document.querySelector(".mobile-menu");

        // btn.addEventListener("click", () => {
        //     menu.classList.toggle("hidden");
        // });
    </script>
</body>

</html>
