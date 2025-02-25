@extends('layouts.home')

@section('Home', 'title')

@section('content')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-600 to-indigo-700 -mt-14">
        <div class="max-w-screen-xl h-fit lg:h-screen mx-auto px-4 py-24 lg:flex lg:items-center lg:justify-between">
            <div class="max-w-2xl">
                <h1 class="text-3xl font-bold text-white sm:text-4xl leading-tight">
                    Sistem Pendukung Keputusan <br>
                    <span class="font-light">Pemilihan Dosen Pembimbing Skripsi</span>
                </h1>
                <p class="mt-6 text-xl text-blue-100">
                    Sistem ini membantu mahasiswa D4-Teknik Informatika memilih dosen pembimbing skripsi dengan menggunakan
                    metode <i><b>Profile Matching</b></i>.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('login') }}"
                        class="px-8 py-4 text-blue-900 bg-white rounded-lg hover:bg-blue-50 transition duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-xl font-semibold">
                        Isi Kuisioner
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

    <!-- content -->
    <div id="content-report">
        <section class="bg-white py-20 space-y-28" id="rumusan">
            <div class="max-w-screen-xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-3">Rumusan Masalah</h2>
                <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto">Rumusan masalah dari penulisan laporan
                    ini
                    adalah sebagai berikut</p>
                <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- Feature 1 -->
                    <div class="p-8 bg-white rounded-xl cursor-default hover:shadow-xl transition-shadow duration-300">
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
                        <p class="mt-4 text-lg text-gray-600 leading-relaxed">Bagaimana mengimplementasikan metode
                            Profile
                            Matching untuk sistem pendukung keputusan pemilihan dosen pembimbing skripsi?</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="p-8 bg-white rounded-xl cursor-default hover:shadow-xl transition-shadow duration-300">
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
                    <div class="p-8 bg-white rounded-xl cursor-default hover:shadow-xl transition-shadow duration-300">
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

        <section class="bg-white py-20 space-y-28" id="tujuan">
            <div class="max-w-screen-xl mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12">
                    <div class="lg:w-3/4">
                        <h2
                            class="text-4xl text-center md:text-start  mb-3 text-gray-800 font-bold lg:text-4xl dark:text-white">
                            Tujuan Penelitian
                        </h2>
                        <p class="text-xl text-center md:text-start text-gray-800 dark:text-neutral-400">
                            Penelitian ini bertujuan untuk mengembangkan sistem pendukung keputusan dalam pemilihan
                            dosen
                            pembimbing skripsi dengan metode Profile Matching.
                        </p>
                    </div>
                    <!-- End Col -->

                    <div class="space-y-6 lg:space-y-10">
                        <!-- Icon Block -->
                        <div class="flex gap-x-5 sm:gap-x-8">
                            <!-- Icon -->
                            <span
                                class="shrink-0 inline-flex justify-center items-center size-[46px] rounded-full border border-gray-200 bg-white text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-move-diagonal-2 shrink-0 size-5">
                                    <path d="M19 13v6h-6" />
                                    <path d="M5 11V5h6" />
                                    <path d="m5 5 14 14" />
                                </svg>
                            </span>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Kesesuaian Profile Matching dalam Pemilihan Dosen
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Mengetahui tingkat kesesuaian metode Profile Matching dalam pemilihan dosen
                                    pembimbing
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-monitor-cog shrink-0 size-5">
                                    <path d="M12 17v4" />
                                    <path d="m15.2 4.9-.9-.4" />
                                    <path d="m15.2 7.1-.9.4" />
                                    <path d="m16.9 3.2-.4-.9" />
                                    <path d="m16.9 8.8-.4.9" />
                                    <path d="m19.5 2.3-.4.9" />
                                    <path d="m19.5 9.7-.4-.9" />
                                    <path d="m21.7 4.5-.9.4" />
                                    <path d="m21.7 7.5-.9-.4" />
                                    <path d="M22 13v2a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7" />
                                    <path d="M8 21h8" />
                                    <circle cx="18" cy="6" r="3" />
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-bug-off shrink-0 size-5">
                                    <path d="M15 7.13V6a3 3 0 0 0-5.14-2.1L8 2" />
                                    <path d="M14.12 3.88 16 2" />
                                    <path d="M22 13h-4v-2a4 4 0 0 0-4-4h-1.3" />
                                    <path d="M20.97 5c0 2.1-1.6 3.8-3.5 4" />
                                    <path d="m2 2 20 20" />
                                    <path d="M7.7 7.7A4 4 0 0 0 6 11v3a6 6 0 0 0 11.13 3.13" />
                                    <path d="M12 20v-8" />
                                    <path d="M6 13H2" />
                                    <path d="M3 21c0-2.1 1.7-3.9 3.8-4" />
                                </svg>
                            </span>
                            <div class="grow">
                                <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                    Hasil Pengujian Sistem Profile Matching
                                </h3>
                                <p class="mt-1 text-gray-600 dark:text-neutral-400">
                                    Mengetahui hasil dari pengujian terhadap sistem pendukung keputusan menggunakan
                                    metode
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

        <section class="bg-gray-100 py-20 space-y-28" id="manfaat">
            <div class="max-w-screen-xl mx-auto px-4">
                <div class="relative p-6 md:p-16">
                    <!-- Grid -->
                    <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
                        <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
                            <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-neutral-200 mb-3">
                                Manfaat Penelitian
                            </h2>
                            <p class="text-xl text-gray-600 max-w-2xl mx-auto">Manfaat dari penelitian ini
                                adalah sebagai berikut</p>

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
                                                class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Kontribusi
                                                Positif</span>
                                            <span
                                                class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Memberikan
                                                kontribusi positif terhadap kualitas penelitian skripsi mahasiswa dengan
                                                memastikan bahwa mereka mendapatkan bimbingan dari beberapa kriteria
                                                dosen
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
                                                class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-neutral-200">Efisiensi
                                                administratif</span>
                                            <span
                                                class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-neutral-200">Membantu
                                                meningkatkan efisiensi administratif dalam proses pemilihan dosen
                                                pembimbing
                                                skripsi di Program Studi D4-Teknik Informatika Jurusan Teknologi
                                                Informasi
                                                Politeknik Negeri Jember dengan memanfaatkan teknologi informasi dan
                                                sistem
                                                pendukung keputusan.</span>
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
                                        <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor"
                                            stroke-width="10" stroke-linecap="round" />
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

        <!-- FAQ -->
        <section class="bg-white py-20 space-y-28" id="faq">
            <div class="max-w-screen-xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
                <!-- Grid -->
                <div class="grid md:grid-cols-5 gap-10">
                    <div class="md:col-span-2">
                        <div class="max-w-xs">
                            <h2 class="text-2xl font-bold md:text-4xl md:leading-tight dark:text-white">
                                Metode<br>Profile
                                Matching</h2>
                            <p class="mt-1 hidden md:block text-gray-600 dark:text-neutral-400">Berikut 6 tahapan yang
                                harus dilalui dalam menggunakan perhitungan metode Profile Matching.</p>

                            <blockquote class="mt-6 p-4 border-l-4 border-blue-500 bg-gray-100 dark:bg-neutral-800">
                                <p class="text-gray-800 dark:text-neutral-200 italic">
                                    "Profile Matching merupakan proses membandingkan antara kompetensi individu ke dalam
                                    kompetensi jabatan sehingga dapat diketahui perbedaan kompetensinya (disebut juga
                                    GAP),
                                    semakin kecil GAP yang dihasilkan maka bobot nilainya semakin besar. (Muhdi Al
                                    Miftahurrahman, 2024)"
                                </p>
                            </blockquote>

                            <p class="mt-5">
                                <a class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500"
                                    href="#">
                                    Pelajari lebih lanjut
                                    <svg class="shrink-0 size-4 transition ease-in-out group-hover:translate-x-1 group-focus:translate-x-1"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </p>
                        </div>
                    </div>
                    <!-- End Col -->

                    <div class="md:col-span-3">
                        <!-- Accordion -->
                        <div class="hs-accordion-group divide-y divide-gray-200 dark:divide-neutral-700">
                            <div class="hs-accordion pb-3 active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                    Penentuan Variable
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        Proses perhitungan pada penggunaan metode Profile Matching didahului memberikan
                                        value pada setiap variabel kriteria.
                                        Berikut data yang telah ditentukan.<br>
                                        a. Kuota Bimbingan<br>
                                        b. Kepakaran atau Bidang Keahlian<br>
                                        c. Riset Penelitian<br>

                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-two">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-two">
                                    Perhitungan GAP Profil
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-two">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        Once your team signs up for a subscription plan. This is where we sit down, grab
                                        a
                                        cup
                                        of coffee and dial in the details.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                    Menghitung Bobot Dari Pemetaan GAP Kompetensi
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        Our subscriptions are tiered. Understanding the task at hand and ironing out the
                                        wrinkles is key.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-four">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-four">
                                    Mengelompokkan dan menghitung Core Factor dan Secondary Factor
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-four"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-four">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        Protecting the data you trust to Preline is our first priority. This part is
                                        really
                                        crucial in keeping the project in line to completion.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-five">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-five">
                                    Menghitung nilai total dari tiap aspek dan kriteria
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-five"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-five">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        If you lose the link for a theme you purchased, don't panic! We've got you
                                        covered.
                                        You
                                        can login to your account, tap your avatar in the upper right corner, and tap
                                        Purchases.
                                        If you didn't create a login or can't remember the information, you can use our
                                        handy
                                        Redownload page, just remember to use the same email you originally made your
                                        purchases
                                        with.
                                    </p>
                                </div>
                            </div>

                            <div class="hs-accordion pt-6 pb-3" id="hs-basic-with-title-and-arrow-stretched-heading-six">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-six">
                                    Perangkingan
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-six"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-six">
                                    <p class="text-gray-600 dark:text-neutral-400">
                                        There may be times when you need to upgrade your license from the original type
                                        you
                                        purchased and we have a solution that ensures you can apply your original
                                        purchase
                                        cost
                                        to the new license purchase.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Accordion -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
        </section>
        <!-- End FAQ -->

        <section class="section-our-work bg-white space-y-28" id="our-work">
            <div class="max-w-screen-xl mx-auto px-4">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-3">Pendapat Mahasiswa</h2>
                <p class="text-xl text-gray-600 text-center max-w-2xl mx-auto mb-4">Berikut pendapat mahasiswa
                    berdasarkan hasil pengisian kuisioner</p>
                <div class="flex justify-center">
                    <a class="group inline-flex flex-wrap items-center bg-gradient-to-tl from-blue-600 to-violet-600 hover:from-violet-600 hover:to-blue-600 focus:outline-none p-1 ps-4 rounded-full shadow-md"
                        href="#">
                        <p class="me-2 text-white text-sm">
                            Tautan Kuisioner.
                        </p>
                        <span
                            class="group-hover:bg-white/10 group-focus:bg-white/10 py-1.5 px-2.5 inline-flex justify-center items-center gap-x-2 rounded-full bg-white/10 font-semibold text-white text-sm">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </span>
                    </a>
                </div>
                <div class="swiper-container w-full h-[480px] md:h-[500px] mt-14 slider-testimonials  overflow-hidden">
                    <div class="swiper-wrapper flex w-full h-full" id="portfolio-swiper-wrapper">
                        <!-- Slides -->
                    </div>

                    <!-- Pagination -->
                    <div class="relative w-full">
                        <div class="absolute h-10 bottom-6 left-0 right-4 flex items-center justify-end space-x-2 z-10">
                            <div class="swiper-pagination flex-grow h-[1px] bg-transparent rounded-full "></div>
                            <div id="button-prev"
                                class="p-3 hover:scale-125 rounded-full bg-white shadow-xl cursor-pointer transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-left text-primary">
                                    <path d="m15 18-6-6 6-6" />
                                </svg>
                            </div>
                            <div id="button-next"
                                class="p-3 hover:scale-125 rounded-full bg-white shadow-xl cursor-pointer transition-all duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-chevron-right text-primary">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section('scripts')
    <script>
        async function fetchGoogleSheetData() {
            const apiKey = 'AIzaSyBlLYhjGHFQDgkTIM77OSQz8boWAwSK9PM';
            const spreadsheetId = '1WpS5Rqfjn2M9weDbOm7KQaRvqZkZxJY_nNbTbDUfi2A';
            const range = 'Form Responses 1!C2:AA';

            const response = await fetch(
                `https://sheets.googleapis.com/v4/spreadsheets/${spreadsheetId}/values/${range}?key=${apiKey}`
            );

            try {
                const data = await response.json();
                const testimonialsContainer = document.querySelector('.swiper-wrapper');

                testimonialsContainer.innerHTML = '';

                data.values.forEach(item => {
                    const name = item[0];
                    const feedback = item[24];

                    const testimonialHTML = `
                        <div class="swiper-slide cursor-pointer">
                            <div class="p-8 bg-white rounded-xl shadow-lg h-fit">
                                <div class="flex items-center gap-4 mb-6" id="profile-card">
                                    <img src="{{ asset('static/image/profile-placeholder.jpg') }}" alt="User" class="w-12 h-12 rounded-full">
                                    <div>
                                        <h4 class="font-bold text-gray-900">${name}</h4>
                                        <p class="text-sm text-gray-600">Teknik Informatika</p>
                                    </div>
                                </div>
                                <p class="text-gray-600 leading-relaxed text-center text-content-swipper">${feedback}</p>
                            </div>
                        </div>
                    `;

                    testimonialsContainer.innerHTML += testimonialHTML;
                });
            } catch (error) {
                console.error('Invalid JSON response:', error);
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            fetchGoogleSheetData();
        });
    </script>
@endsection
