@extends('layouts.home')

@section('content')
    <div id="content-report" class="lg:-mt-14">
        <section class="relative flex items-center justify-center overflow-hidden">
            <!-- Gradiens -->
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                <div
                    class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
                </div>
                <div
                    class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
                </div>
            </div>
            <!-- End Gradients -->

            <div class="relative z-10">
                <div class="max-w-[85rem] mt-28 mx-auto px-4 sm:px-6 lg:px-8 py-10 lg:py-16">
                    <div class="max-w-2xl text-center mx-auto">
                        <p
                            class="inline-block text-sm font-medium bg-clip-text bg-gradient-to-l from-blue-600 to-violet-500 text-transparent dark:from-blue-400 dark:to-violet-400">
                            Sistem Pendukung Keputusan
                        </p>

                        <!-- Title -->
                        <div class="mt-5 max-w-2xl">
                            <h1
                                class="block font-semibold text-gray-800 text-4xl md:text-5xl lg:text-6xl dark:text-neutral-200">
                                Metode Profile Matching
                            </h1>
                        </div>
                        <!-- End Title -->

                        <div class="mt-5 max-w-3xl">
                            <p class="text-lg text-gray-600 dark:text-neutral-400" style="text-align: justify;">Profile Matching adalah metode yang membandingkan kompetensi individu dengan standar penilaian untuk mengidentifikasi selisih (GAP). Semakin kecil GAP, semakin tinggi bobot nilai yang diperoleh. Metode ini mengasumsikan adanya tingkat kompetensi ideal yang tidak selalu berarti batas minimum. Setelah GAP dihitung, setiap individu diberi bobot nilai sesuai ketentuan.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                            <div class="hs-accordion pb-3 active"
                                id="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="true"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                                    Penentuan Variable
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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

                            <div class="hs-accordion pt-6 pb-3"
                                id="hs-basic-with-title-and-arrow-stretched-heading-three">
                                <button
                                    class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full md:text-lg font-semibold text-start text-gray-800 rounded-lg transition hover:text-gray-500 focus:outline-none focus:text-gray-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false"
                                    aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-three">
                                    Menghitung Bobot Dari Pemetaan GAP Kompetensi
                                    <svg class="hs-accordion-active:hidden block shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </button>
                                <div id="hs-basic-with-title-and-arrow-stretched-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region"
                                    aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-three">
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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg class="hs-accordion-active:block hidden shrink-0 size-5 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
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
    </div>
@endsection
