<x-app-layout>

    @role('admin')
        <div class="mt-10 mb-6 md:-mt-3">
            <div class="p-0 text-navy font-bold dark:text-gray-100">
                {{ __('Daftar Pengajuan') }}
            </div>
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                        href="{{ route('dashboard.index') }}">
                        {{ Auth::user()->name }}
                    </a>
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-navy truncate dark:text-neutral-200"
                    aria-current="page">
                    Daftar Pengajuan
                </li>
            </ol>
        </div>
    @endrole

    @role('mahasiswa')
        <div class="mt-10 mb-6 md:-mt-3">
            <div class="p-0 text-navy font-bold dark:text-gray-100">
                {{ __('Pemilihan Dosen') }}
            </div>
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                    <a href="{{ route('dashboard.index') }}"
                        class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5" />
                        </svg>
                        Home
                        <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16"
                            viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </a>
                </li>
                <li class="inline-flex items-center text-sm font-semibold text-navy truncate dark:text-neutral-200"
                    aria-current="page">
                    Pemilihan Dosen
                </li>
            </ol>
        </div>
    @endrole

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                @role('admin')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Daftar Pengajuan') }}
                    </h2>
                @endrole
                @role('mahasiswa')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Pemilihan Dosen') }}
                    </h2>
                @endrole

                @role('admin')
                    <label class="inline-flex items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer">
                        <div
                            class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                        </div>
                        <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Izin Pemilihan</span>
                    </label>
                @endrole
            </div>
        </div>

        @role('mahasiswa')
            <div class="px-4 2xl:px-0 mb-5">
                <div class="gap-8 lg:flex">

                    {{-- <form action="#" class="w-full space-y-6 lg:space-y-8">
                        <div class="space-y-6 sm:space-y-8">
                            <ol
                                class="flex flex-col gap-4 rounded-lg border border-gray-200 bg-gray-50 p-4 dark:border-gray-700 dark:bg-gray-800 sm:justify-center md:flex-row md:items-center lg:gap-6">
                                <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                    <svg class="h-5 w-5 text-primary dark:text-primary-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium leading-tight text-primary dark:text-primary-500">
                                        Daftar Dosen</p>
                                </li>

                                <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                                </div>

                                <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                                        Input Judul</p>
                                </li>

                                <div class="hidden h-px w-8 shrink-0 bg-gray-200 dark:bg-gray-700 md:block xl:w-16">
                                </div>

                                <li class="flex items-center gap-2 md:flex-1 md:flex-col md:gap-1.5 lg:flex-none">
                                    <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                    </svg>
                                    <p class="text-sm font-medium leading-tight text-gray-500 dark:text-gray-400">
                                        Hasil Rekomendasi Dosen</p>
                                </li>
                            </ol>
                        </div>

                        <div class="space-y-6">
                            <h2 class="text-lg font-semibold text-navy dark:text-white">1. Pilih Maksimal 3 Dosen:</h2>

                            <div
                                class="divide-y divide-gray-200 overflow-hidden rounded-lg border border-gray-200 bg-white shadow-sm dark:divide-gray-700 dark:border-gray-700 dark:bg-gray-800">

                                @php
                                    $groupedProfiles = $profile->groupBy('id_alternatif');
                                @endphp

                                @foreach ($groupedProfiles as $alternatifId => $items)
                                    @php
                                        $firstItem = $items->first();
                                    @endphp

                                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 p-4">

                                        <!-- Checkbox untuk Alternatif -->
                                        <div class="flex items-center justify-center col-span-1">
                                            <input id="dosen-{{ $firstItem->id_alternatif }}" type="checkbox"
                                                value="{{ $firstItem->id_alternatif }}"
                                                class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 cursor-pointer focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600 checkbox" />
                                            <label for="dosen-{{ $firstItem->id_alternatif }}" class="sr-only">
                                                Dosen {{ $firstItem->id_alternatif }}
                                            </label>
                                        </div>

                                        <!-- Informasi Alternatif -->
                                        <div class="flex items-center justify-start col-span-4 gap-6">
                                            <div class="flex items-center w-full gap-4 w-82 mr-4">
                                                <a href="#" class="flex aspect-square h-14 w-14 shrink-0">
                                                    <img class="h-auto max-h-full w-full dark:hidden"
                                                        src="{{ asset('static/image/logo_polije.png') }}"
                                                        alt="Polije Logo" />
                                                </a>
                                                <div class="flex flex-col">
                                                    <a href="#"
                                                        class="font-medium text-gray-900 hover:underline dark:text-white whitespace-nowrap">
                                                        {{ $firstItem->alternatif->name }}
                                                    </a>
                                                    <span class="text-sm font-medium text-gray-500 dark:text-white">
                                                        {{ $firstItem->alternatif->nip }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- List Kriteria dan Subkriteria -->
                                        <div class="flex items-start justify-start col-span-7 gap-6">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 w-full">
                                                @foreach ($items as $item)
                                                    @if (isset($item->kriteria, $item->subkriteria))
                                                        <div class="flex items-center gap-2">
                                                            <!-- Nama Kriteria -->
                                                            <span
                                                                class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                                {{ $item->kriteria->kriteria_name }}:
                                                            </span>
                                                            <!-- Nama Subkriteria -->
                                                            <span
                                                                class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                                <a href="#" class="hover:underline">
                                                                    {{ $item->subkriteria->subkriteria_name }}
                                                                </a>
                                                            </span>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>

                                    </div>
                                @endforeach
                            </div>

                            <div class="gap-4 sm:flex sm:items-center sm:justify-between">
                                <button type="button"
                                    class="w-full rounded-lg  border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 sm:w-auto">Cancel</button>
                                <button type="submit"
                                    class="mt-4 flex w-full items-center justify-center rounded-lg border border-primary bg-primary px-5 py-2.5 text-sm font-medium text-white hover:border-primary-800 hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:border-primary-700 dark:bg-primary-600 dark:hover:border-primary-700 dark:hover:bg-primary-700 dark:focus:ring-primary-800  sm:mt-0 sm:w-auto">Lanjut:
                                    Input Judul</button>
                            </div>
                        </div>
                    </form> --}}

                    <!-- Stepper -->
                    <div class="w-full" data-hs-stepper="">
                        <!-- Stepper Nav -->
                        <ul class="relative flex flex-row gap-x-2 w-full">

                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                                data-hs-stepper-nav-item='{
                              "index": 1
                            }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">1</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800 dark:text-white">
                                        Pilih Dosen
                                    </span>
                                </span>
                                <div
                                    class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-600 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
                                </div>
                            </li>

                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                                data-hs-stepper-nav-item='{
                              "index": 2
                            }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">2</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800 dark:text-white">
                                        Pilih Kriteria
                                    </span>
                                </span>
                                <div
                                    class="w-full h-px flex-1 bg-gray-200 group-last:hidden hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-600 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
                                </div>
                            </li>

                            <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                                data-hs-stepper-nav-item='{
                                "index": 3
                              }'>
                                <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                    <span
                                        class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-active:bg-blue-600 hs-stepper-active:text-white hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                        <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                        <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <polyline points="20 6 9 17 4 12"></polyline>
                                        </svg>
                                    </span>
                                    <span class="ms-2 text-sm font-medium text-gray-800 dark:text-white">
                                        Hasil Rekomendasi
                                    </span>
                                </span>
                            </li>
                            <!-- End Item -->
                        </ul>
                        <!-- End Stepper Nav -->

                        <!-- Stepper Content -->
                        <div class="mt-5 sm:mt-8">
                            <!-- First Content -->
                            <div
                                data-hs-stepper-content-item='{
                          "index": 1
                        }'>
                                <div
                                    class="p-4 flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                    <div class="space-y-6 w-full">
                                        <h2 class="text-lg font-semibold text-navy dark:text-white">1. Pilih Maksimal 3
                                            Dosen:</h2>

                                        @php
                                            $groupedProfiles = $profile->groupBy('id_alternatif');
                                        @endphp

                                        @foreach ($groupedProfiles as $alternatifId => $items)
                                            @php
                                                $firstItem = $items->first();
                                            @endphp

                                            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 p-4">

                                                <!-- Checkbox untuk Alternatif -->
                                                <div class="flex items-center justify-center col-span-1">
                                                    <input id="dosen-{{ $firstItem->id_alternatif }}" type="checkbox"
                                                        value="{{ $firstItem->id_alternatif }}"
                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 cursor-pointer focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600 checkbox" />
                                                    <label for="dosen-{{ $firstItem->id_alternatif }}" class="sr-only">
                                                        Dosen {{ $firstItem->id_alternatif }}
                                                    </label>
                                                </div>

                                                <!-- Informasi Alternatif -->
                                                <div class="flex items-center justify-start col-span-4 gap-6">
                                                    <div class="flex items-center w-full gap-4 w-82 mr-4">
                                                        <a href="#" class="flex aspect-square h-14 w-14 shrink-0">
                                                            <img class="h-auto max-h-full w-full dark:hidden"
                                                                src="{{ asset('static/image/logo_polije.png') }}"
                                                                alt="Polije Logo" />
                                                        </a>
                                                        <div class="flex flex-col">
                                                            <a href="#"
                                                                class="font-medium text-gray-900 hover:underline dark:text-white whitespace-nowrap">
                                                                {{ $firstItem->alternatif->name }}
                                                            </a>
                                                            <span
                                                                class="text-sm font-medium text-gray-500 dark:text-white">
                                                                {{ $firstItem->alternatif->nip }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- List Kriteria dan Subkriteria -->
                                                <div class="flex items-start justify-start col-span-7 gap-6">
                                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-2 w-full">
                                                        @foreach ($items as $item)
                                                            @if (isset($item->kriteria, $item->subkriteria))
                                                                <div class="flex items-center gap-2">
                                                                    <!-- Nama Kriteria -->
                                                                    <span
                                                                        class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                                        {{ $item->kriteria->kriteria_name }}:
                                                                    </span>
                                                                    <!-- Nama Subkriteria -->
                                                                    <span
                                                                        class="text-base font-normal text-gray-500 dark:text-gray-400">
                                                                        <a href="#" class="hover:underline">
                                                                            {{ $item->subkriteria->subkriteria_name }}
                                                                        </a>
                                                                    </span>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>

                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- End First Content -->

                            <!-- First Content -->
                            <div data-hs-stepper-content-item='{
                          "index": 2
                        }'
                                style="display: none;">
                                <div
                                    class="p-4 flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                    <div class="space-y-6 w-full">
                                        <h2 class="text-lg w-full font-semibold text-navy dark:text-white">1. Pilih
                                            Kriteria :</h2>
                                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-4 first:pt-0 last:pb-0 ">

                                            @foreach ($kriteria as $item)
                                                <div class="sm:col-span-3">
                                                    <label for="af-submit-application-kriteria-name-{{ $item->id_kriteria }}"
                                                        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                                        {{ $item->kriteria_name }}
                                                    </label>
                                                </div>

                                                <div class="sm:col-span-9">
                                                    <div
                                                        class="hs-dropdown [--strategy:absolute] [--flip:false] hs-dropdown-example relative inline-flex w-full">
                                                        <button id="hs-dropdown-{{ $item->id_kriteria }}" type="button"
                                                            class="hs-dropdown-toggle py-3 px-4 w-full inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                            aria-haspopup="menu" aria-expanded="false"
                                                            aria-label="Dropdown">
                                                            Pilih {{ $item->kriteria_name }}
                                                            <svg class="hs-dropdown-open:rotate-180 size-4 text-gray-600 dark:text-neutral-600"
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round">
                                                                <path d="m6 9 6 6 6-6"></path>
                                                            </svg>
                                                        </button>

                                                        <div class="hs-dropdown-menu transition-[opacity,margin] w-full duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 mt-2 min-w-60 bg-white shadow-md rounded-lg p-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700"
                                                            role="menu" aria-orientation="vertical"
                                                            aria-labelledby="hs-dropdown-{{ $item->id_kriteria }}">
                                                            @foreach ($item->subkriteria as $subkriteria)
                                                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                                    href="#">
                                                                    {{ $subkriteria->subkriteria_name }}
                                                                </a>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End First Content -->

                            <!-- First Content -->
                            <div data-hs-stepper-content-item='{
                          "index": 3
                        }'
                                style="display: none;">
                                <div
                                    class="p-4 flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                    <h3 class="text-gray-500 dark:text-neutral-400">
                                        Third content
                                    </h3>
                                </div>
                            </div>
                            <!-- End First Content -->

                            <!-- Final Content -->
                            <div data-hs-stepper-content-item='{
                          "isFinal": true
                        }'
                                style="display: none;">
                                <div
                                    class="p-4 h-48 bg-gray-50 flex justify-center items-center border border-dashed border-gray-200 rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                    <h3 class="text-gray-500 dark:text-neutral-400">
                                        Final content
                                    </h3>
                                </div>
                            </div>
                            <!-- End Final Content -->

                            <!-- Button Group -->
                            <div class="mt-5 flex justify-between items-center gap-x-2">
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-back-btn="">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m15 18-6-6 6-6"></path>
                                    </svg>
                                    Back
                                </button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-next-btn="">
                                    Next
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>
                                </button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-finish-btn="" style="display: none;">
                                    Finish
                                </button>
                                <button type="reset"
                                    class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    data-hs-stepper-reset-btn="" style="display: none;">
                                    Reset
                                </button>
                            </div>
                            <!-- End Button Group -->
                        </div>
                        <!-- End Stepper Content -->
                    </div>
                    <!-- End Stepper -->
                </div>
            </div>
        @endrole

        @role('admin')
            <table id="pagination-table">
                <thead>
                    <tr>
                        <th>
                            <span class="flex items-center">
                                No
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                        @role('admin')
                            <th>
                                <span class="flex items-center">
                                    NIM
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Mahasiswa
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Judul Skripsi
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Dosen
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                        @endrole
                        @role('mahasiswa')
                            <th>
                                <span class="flex items-center">
                                    NIP
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                            <th>
                                <span class="flex items-center">
                                    Nama Dosen
                                    <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                    </svg>
                                </span>
                            </th>
                        @endrole
                        <th>
                            <span class="flex items-center">
                                Tindakan
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($submission as $item)
                        @role('admin')
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->users->nim }}</td>
                                <td>{{ $item->users->name }}</td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->alternatif->name }}</td>
                                <td>
                                    <button id="dropdownMenuIconHorizontalButton"
                                        data-dropdown-toggle="dropdownDotsHorizontal-{{ $item->id_alternatif }} "
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 16 3">
                                            <path
                                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                        </svg>
                                    </button>

                                    <!-- Dropdown menu -->
                                    <div id="dropdownDotsHorizontal-{{ $item->id_alternatif }} "
                                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                            @role('admin')
                                                <li>
                                                    <a href="{{ route('alternatif.edit', $item->id_alternatif) }}"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                </li>
                                                <li>
                                                    <a href="#"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id_alternatif }}').submit();"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus</a>
                                                </li>
                                            @endrole
                                            @role('mahasiswa')
                                                <li>
                                                    <a href="https://jti.polije.ac.id/dosen" target="__blank"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lihat
                                                        Sumber</a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>

                                    <form id="delete-form-{{ $item->id_alternatif }}"
                                        action="{{ route('alternatif.destroy', $item->id_alternatif) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </td>
                            </tr>
                        @endrole
                    @endforeach
                </tbody>
            </table>
        @endrole

    </div>
</x-app-layout>
