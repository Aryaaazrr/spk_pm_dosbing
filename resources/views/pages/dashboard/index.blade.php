<x-app-layout>

    <div class="mt-10 mb-6 md:-mt-3">
        <div class="p-0 text-purple font-bold dark:text-gray-100">
            {{ __('Hello, ' . Auth::user()->name) }}
        </div>
        <div class="p-0 text-navy font-bold text-2xl">
            {{ __('Welcome to SPK Pemilihan Dosen Pembimbing!') }}
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-4">
        <!-- Card Section -->
        <div class="flex flex-col bg-white shadow-sm rounded-3xl">
            <div class="p-4 md:p-5 flex items-center gap-x-4">
                <div
                    class="shrink-0 flex justify-center items-center size-[72px] bg-gradient-to-r from-[#53B1FD] to-[#1570EF] rounded-full dark:bg-neutral-800">
                    <svg class="shrink-0 size-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM17.3628 15.2332C20.4482 16.0217 22.7679 18.7235 22.9836 22H20C20 19.3902 19.0002 17.0139 17.3628 15.2332ZM15.3401 12.9569C16.9728 11.4922 18 9.36607 18 7C18 5.58266 17.6314 4.25141 16.9849 3.09687C19.2753 3.55397 21 5.57465 21 8C21 10.7625 18.7625 13 16 13C15.7763 13 15.556 12.9853 15.3401 12.9569Z">
                        </path>
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="tracking-wide text-gray-500 dark:text-neutral-500">
                            Dosen
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            72,540
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                            <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="inline-block text-xs font-medium">
                                12.5%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Section -->
        <div class="flex flex-col bg-white shadow-sm rounded-3xl">
            <div class="p-4 md:p-5 flex items-center gap-x-4">
                <div
                    class="shrink-0 flex justify-center items-center size-[72px] bg-gradient-to-r from-[#53B1FD] to-[#1570EF] rounded-full dark:bg-neutral-800">
                    <svg class="shrink-0 size-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M12 10C14.2091 10 16 8.20914 16 6 16 3.79086 14.2091 2 12 2 9.79086 2 8 3.79086 8 6 8 8.20914 9.79086 10 12 10ZM5.5 13C6.88071 13 8 11.8807 8 10.5 8 9.11929 6.88071 8 5.5 8 4.11929 8 3 9.11929 3 10.5 3 11.8807 4.11929 13 5.5 13ZM21 10.5C21 11.8807 19.8807 13 18.5 13 17.1193 13 16 11.8807 16 10.5 16 9.11929 17.1193 8 18.5 8 19.8807 8 21 9.11929 21 10.5ZM12 11C14.7614 11 17 13.2386 17 16V22H7V16C7 13.2386 9.23858 11 12 11ZM5 15.9999C5 15.307 5.10067 14.6376 5.28818 14.0056L5.11864 14.0204C3.36503 14.2104 2 15.6958 2 17.4999V21.9999H5V15.9999ZM22 21.9999V17.4999C22 15.6378 20.5459 14.1153 18.7118 14.0056 18.8993 14.6376 19 15.307 19 15.9999V21.9999H22Z">
                        </path>
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="tracking-wide text-gray-500 dark:text-neutral-500">
                            Mahasiswa
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            72,540
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                            <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>

                            <span class="inline-block text-xs font-medium">
                                12.5%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Section -->
        <div class="flex flex-col bg-white shadow-sm rounded-3xl">
            <div class="p-4 md:p-5 flex items-center gap-x-4">
                <div
                    class="shrink-0 flex justify-center items-center size-[72px] bg-gradient-to-r from-[#53B1FD] to-[#1570EF] rounded-full dark:bg-neutral-800">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="shrink-0 size-8 text-white">
                        <path
                            d="M6.9998 6V3C6.9998 2.44772 7.44752 2 7.9998 2H19.9998C20.5521 2 20.9998 2.44772 20.9998 3V17C20.9998 17.5523 20.5521 18 19.9998 18H16.9998V20.9991C16.9998 21.5519 16.5499 22 15.993 22H4.00666C3.45059 22 3 21.5554 3 20.9991L3.0026 7.00087C3.0027 6.44811 3.45264 6 4.00942 6H6.9998ZM8.9998 6H16.9998V16H18.9998V4H8.9998V6ZM6.9998 11V13H12.9998V11H6.9998ZM6.9998 15V17H12.9998V15H6.9998Z">
                        </path>
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="tracking-wide text-gray-500 dark:text-neutral-500">
                            Pengajuan Skripsi
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            72,540
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                            <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="inline-block text-xs font-medium">
                                12.5%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Card Section -->
        <div class="flex flex-col bg-white shadow-sm rounded-3xl">
            <div class="p-4 md:p-5 flex items-center gap-x-4">
                <div
                    class="shrink-0 flex justify-center items-center size-[72px] bg-gradient-to-r from-[#53B1FD] to-[#1570EF] rounded-full dark:bg-neutral-800">
                    <svg class="shrink-0 size-8 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM17.3628 15.2332C20.4482 16.0217 22.7679 18.7235 22.9836 22H20C20 19.3902 19.0002 17.0139 17.3628 15.2332ZM15.3401 12.9569C16.9728 11.4922 18 9.36607 18 7C18 5.58266 17.6314 4.25141 16.9849 3.09687C19.2753 3.55397 21 5.57465 21 8C21 10.7625 18.7625 13 16 13C15.7763 13 15.556 12.9853 15.3401 12.9569Z">
                        </path>
                    </svg>
                </div>

                <div class="grow">
                    <div class="flex items-center gap-x-2">
                        <p class="tracking-wide text-gray-500 dark:text-neutral-500">
                            Dosen
                        </p>
                    </div>
                    <div class="mt-1 flex items-center gap-x-2">
                        <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                            72,540
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-1 py-0.5 px-2 rounded-full bg-green-100 text-green-900 dark:bg-green-800 dark:text-green-100">
                            <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                <polyline points="16 7 22 7 22 13" />
                            </svg>
                            <span class="inline-block text-xs font-medium">
                                12.5%
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card Section -->
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mb-4">
        <div class="bg-white rounded-3xl overflow-hidden shadow-sm h-fit col-span-2 md:h-72">
            <div class="flex flex-col p-10">
                <div class="">
                    <h1 class="text-lg font-bold italic">Profile Matching</h1>
                </div>
                <div class="my-2">
                    <p>Profile matching merupakan proses membandingkan antara kompetensi

                        individu ke dalam kompetensi jabatan sehingga dapat diketahui perbedaan

                        kompetensinya (disebut juga GAP), semakin kecil GAP yang dihasilkan maka

                        bobot nilainya semakin besar. Profile Matching menganggap bahwa terdapat

                        tingkat predictor variables ideal yang harus dimiliki seseorang. Dalam hal ini

                        tidak berarti tingkat minimal yang harus dipenuhi atau dilewati. Setelah

                        diperoleh GAP pada masing-masing individu, setiap profil individu diberi

                        bobot nilai sesuai dengan ketentuan. (Al Muhdi, 2024)</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-3xl shadow-sm h-48 md:h-72"></div>
    </div>

</x-app-layout>
