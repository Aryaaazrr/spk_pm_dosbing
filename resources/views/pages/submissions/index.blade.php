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
                    <div class="w-full" data-hs-stepper="" id="stepper">
                        <div class="flex items-center justify-center w-full">
                            <ul class="relative flex flex-row gap-x-2 w-full">
                                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                                    data-hs-stepper-nav-item='{
                                  "index": 1,
                                   "hasError": true
                                }'>
                                
                                    <div
                                        class="w-5 h-px flex-1 bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-600 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
                                    </div>
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
                                        <span class="ms-2 text-sm font-medium text-gray-800 inline-flex dark:text-white">
                                            <span class="hidden me-1 md:block">Kriteria</span>
                                        </span>
                                    </span>

                                </li>

                                <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group"
                                    data-hs-stepper-nav-item='{
                                  "index": 2,
                                  "hasError": true
                                }'>
                                    <div
                                        class="w-full h-px flex-1 bg-gray-200 hs-stepper-active:bg-blue-600 hs-stepper-success:bg-blue-600 hs-stepper-completed:bg-teal-600 dark:bg-neutral-600 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500">
                                    </div>
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
                                        <span class="ms-2 text-sm font-medium text-gray-800 inline-flex dark:text-white">
                                            <span class="hidden me-1 md:block">Dosen</span>
                                        </span>
                                    </span>

                                </li>

                                {{-- <li class="flex items-center gap-x-2 shrink basis-0 flex-1 group">
                                    <span class="min-w-7 min-h-7 group inline-flex items-center text-xs align-middle">
                                        <span
                                            class="size-7 flex justify-center items-center shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full group-focus:bg-gray-200 dark:bg-neutral-700 dark:text-white dark:group-focus:bg-gray-600 hs-stepper-success:bg-blue-600 hs-stepper-success:text-white hs-stepper-completed:bg-teal-500 hs-stepper-completed:group-focus:bg-teal-600 dark:hs-stepper-active:bg-blue-500 dark:hs-stepper-success:bg-blue-500 dark:hs-stepper-completed:bg-teal-500 dark:hs-stepper-completed:group-focus:bg-teal-600">
                                            <span class="hs-stepper-success:hidden hs-stepper-completed:hidden">3</span>
                                            <svg class="hidden shrink-0 size-3 hs-stepper-success:block"
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                                <polyline points="20 6 9 17 4 12"></polyline>
                                            </svg>
                                        </span>
                                        <span class="ms-2 text-sm font-medium text-gray-800 inline-flex dark:text-white">
                                            <span class="hidden me-1 md:block">Dosen</span>
                                        </span>
                                    </span>
                                </li> --}}
                                <!-- End Item -->
                            </ul>
                        </div>

                        <form action="{{ route('results.start') }}" method="POST" id="form-profile-matching">
                            @csrf
                            <div class="mt-5 sm:mt-8" id="step-container">

                                @if ($errors->any())
                                    <div class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                                        role="alert" id="alert-status">
                                        <svg class="flex-shrink-0 w-4 h-4 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path
                                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                                        </svg>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="ms-3 text-sm font-medium">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button"
                                            class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"
                                            data-dismiss-target="#alert-status" aria-label="Close">
                                            <span class="sr-only">Close</span>
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                        </button>
                                    </div>
                                @endif

                                <div
                                    data-hs-stepper-content-item='{
                          "index": 1
                        }'>
                                    <div
                                        class="flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                        <div class="space-y-6 w-full">
                                            <h2 class="text-lg w-full font-semibold text-navy dark:text-white">1. Input
                                                Judul:</h2>
                                            <div id="content-kriteria">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div data-hs-stepper-content-item='{
                          "index": 2
                        }'
                                    style="display: none;">
                                    <div
                                        class="flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600">
                                        <div class="space-y-6 w-full">
                                            <h2 class="text-lg w-full font-semibold text-navy dark:text-white">2. Pilih
                                                Maksimal 3 Dosen:</h2>
                                            <div class="grid sm:grid-cols-1 xl:grid-cols-3 gap-3 sm:gap-6">
                                                @php
                                                    $groupedProfiles = $profile->groupBy('id_alternatif');
                                                @endphp

                                                @foreach ($groupedProfiles as $alternatifId => $items)
                                                    @php
                                                        $firstItem = $items->first();
                                                    @endphp

                                                    <div
                                                        class="group flex flex-col justify-center bg-white border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800">
                                                        <div class="p-4 md:p-5 w-full">
                                                            <div class="flex justify-between items-center gap-x-3">
                                                                <div class="grow">
                                                                    <input id="dosen-{{ $firstItem->id_alternatif }}"
                                                                        type="checkbox" name="alternatif[]"
                                                                        value="{{ $firstItem->id_alternatif }}"
                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 cursor-pointer focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600 checkbox" />
                                                                    <label for="dosen-{{ $firstItem->id_alternatif }}"
                                                                        class="sr-only">
                                                                        Dosen {{ $firstItem->id_alternatif }}
                                                                    </label>
                                                                </div>

                                                                <button type="button" aria-haspopup="dialog"
                                                                    aria-expanded="false"
                                                                    aria-controls="hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                                    data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                                    class="flex justify-between items-center gap-x-3 w-full">
                                                                    <div class="flex items-center gap-x-3">
                                                                        <img class="size-[38px] rounded-full"
                                                                            src="{{ asset('static/image/logo_polije.png') }}"
                                                                            alt="Avatar">
                                                                        <div class="grow">
                                                                            <h5
                                                                                class="group-hover:text-blue-600 font-semibold text-sm text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                                                                {{ $firstItem->alternatif->name }}
                                                                            </h5>
                                                                            <p
                                                                                class="group-hover:text-blue-600 text-center w-full md:text-start font-semibold text-xs text-gray-500 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                                                                {{ $firstItem->alternatif->nip }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <svg class="shrink-0 size-5 text-gray-800 dark:text-neutral-200"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m9 18 6-6-6-6" />
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                                        role="dialog" tabindex="-1"
                                                        aria-labelledby="hs-vertically-centered-modal-label-{{ $firstItem->id_alternatif }}">
                                                        <div
                                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                            <div
                                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                                <div
                                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                                    <h3 id="hs-vertically-centered-modal-label"
                                                                        class="font-bold text-gray-800 dark:text-white">
                                                                        {{ $firstItem->alternatif->name }}
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                                        aria-label="Close"
                                                                        data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="shrink-0 size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M18 6 6 18"></path>
                                                                            <path d="m6 6 12 12"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 overflow-y-auto">
                                                                    <div class="grid grid-cols-1 gap-2 w-full">
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
                                                                                        <a href="#"
                                                                                            class="hover:underline">
                                                                                            {{ $item->subkriteria->subkriteria_name }}
                                                                                        </a>
                                                                                    </span>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                                    <button type="button"
                                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                                        data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="final-content"
                                    data-hs-stepper-content-item='{
                          "isFinal": true
                        }'
                                    style="display: none;">
                                    <div class="flex justify-center items-center rounded-xl dark:bg-neutral-700 dark:border-neutral-600"
                                        id="dosen-container">
                                        <div class="space-y-6 w-full">
                                            <h2 class="text-lg font-semibold text-navy dark:text-white">3. Pilih Maksimal 3
                                                Dosen:
                                            </h2>

                                            <div class="grid sm:grid-cols-1 xl:grid-cols-3 gap-3 sm:gap-6">
                                                @php
                                                    $groupedProfiles = $profile->groupBy('id_alternatif');
                                                @endphp

                                                @foreach ($groupedProfiles as $alternatifId => $items)
                                                    @php
                                                        $firstItem = $items->first();
                                                    @endphp

                                                    <div
                                                        class="group flex flex-col justify-center bg-white border shadow-sm rounded-xl hover:shadow-md focus:outline-none focus:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800">
                                                        <div class="p-4 md:p-5 w-full">
                                                            <div class="flex justify-between items-center gap-x-3">
                                                                <div class="grow">
                                                                    <input id="dosen-{{ $firstItem->id_alternatif }}"
                                                                        type="checkbox" name="alternatif[]"
                                                                        value="{{ $firstItem->id_alternatif }}"
                                                                        class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-700 cursor-pointer focus:ring-2 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-primary-600 checkbox" />
                                                                    <label for="dosen-{{ $firstItem->id_alternatif }}"
                                                                        class="sr-only">
                                                                        Dosen {{ $firstItem->id_alternatif }}
                                                                    </label>
                                                                </div>

                                                                <button type="button" aria-haspopup="dialog"
                                                                    aria-expanded="false"
                                                                    aria-controls="hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                                    data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                                    class="flex justify-between items-center gap-x-3 w-full">
                                                                    <div class="flex items-center gap-x-3">
                                                                        <img class="size-[38px] rounded-full"
                                                                            src="{{ asset('static/image/logo_polije.png') }}"
                                                                            alt="Avatar">
                                                                        <div class="grow">
                                                                            <h5
                                                                                class="group-hover:text-blue-600 font-semibold text-sm text-gray-800 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                                                                {{ $firstItem->alternatif->name }}
                                                                            </h5>
                                                                            <p
                                                                                class="group-hover:text-blue-600 text-center w-full md:text-start font-semibold text-xs text-gray-500 dark:group-hover:text-neutral-400 dark:text-neutral-200">
                                                                                {{ $firstItem->alternatif->nip }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div>
                                                                        <svg class="shrink-0 size-5 text-gray-800 dark:text-neutral-200"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="m9 18 6-6-6-6" />
                                                                        </svg>
                                                                    </div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div id="hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}"
                                                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                                        role="dialog" tabindex="-1"
                                                        aria-labelledby="hs-vertically-centered-modal-label-{{ $firstItem->id_alternatif }}">
                                                        <div
                                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto min-h-[calc(100%-3.5rem)] flex items-center">
                                                            <div
                                                                class="w-full flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                                <div
                                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                                    <h3 id="hs-vertically-centered-modal-label"
                                                                        class="font-bold text-gray-800 dark:text-white">
                                                                        {{ $firstItem->alternatif->name }}
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                                        aria-label="Close"
                                                                        data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="shrink-0 size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M18 6 6 18"></path>
                                                                            <path d="m6 6 12 12"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 overflow-y-auto">
                                                                    <div class="grid grid-cols-1 gap-2 w-full">
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
                                                                                        <a href="#"
                                                                                            class="hover:underline">
                                                                                            {{ $item->subkriteria->subkriteria_name }}
                                                                                        </a>
                                                                                    </span>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                                    <button type="button"
                                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                                        data-hs-overlay="#hs-vertically-centered-modal-{{ $firstItem->id_alternatif }}">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                    <button type="submit"
                                        class="py-2 px-3 inline-flex items-center gap-x-1 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                        data-hs-stepper-reset-btn="" style="display: none;">
                                        Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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

    <script>
        $(document).ready(() => {
            const containerJudul = $('#content-judul');
            const container = $('#content-kriteria');
            const apiUrl = `{{ url('/api/v1/kriteria') }}`;
            let metaData = null;

            const loadJudul = (apiUrl) => {
                $.ajax({
                    url: apiUrl,
                    type: "GET",
                    beforeSend: () => {
                        containerJudul.empty();
                        containerJudul.append(`
                                <div class="col-span-full flex justify-center items-center h-64" id="loading">
                                    <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500" role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            `);
                    },
                    success: (response) => {
                        const {
                            data: kriteria,
                            pagination
                        } = response;
                        metaData = pagination;

                        $('#loading').remove();

                        if (kriteria.length === 0) {
                            containerJudul.append(`
                                    <div class="col-span-full flex justify-center items-center h-64">
                                    <h4 class="text-lg font-semibold text-center text-gray-700 dark:text-gray-400">Data tidak ditemukan</h4>
                                    </div>
                                `);
                            return;
                        } else {
                            renderJudul(kriteria);
                        }
                    }
                });
            };

            const loadKriteria = (apiUrl) => {
                $.ajax({
                    url: apiUrl,
                    type: "GET",
                    beforeSend: () => {
                        container.empty();
                        container.append(`
                                <div class="col-span-full flex justify-center items-center h-64" id="loading">
                                    <div class="animate-spin inline-block size-6 border-[3px] border-current border-t-transparent text-blue-600 rounded-full dark:text-blue-500" role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                            `);
                    },
                    success: (response) => {
                        const {
                            data: kriteria,
                            pagination
                        } = response;
                        metaData = pagination;

                        $('#loading').remove();

                        if (kriteria.length === 0) {
                            container.append(`
                                    <div class="col-span-full flex justify-center items-center h-64">
                                    <h4 class="text-lg font-semibold text-center text-gray-700 dark:text-gray-400">Data tidak ditemukan</h4>
                                    </div>
                                `);
                            return;
                        } else {
                            renderKriteria(kriteria);
                        }
                    }
                });
            };

            const renderJudul = (kriteria) => {
                containerJudul.empty();

                containerJudul.append(`
                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-4">
                            <div class="sm:col-span-3 my-0 lg:my-2">
                                <label for="judul" class="inline-block text-sm font-medium text-gray-500 mt-2.5 lg:my-2.5 dark:text-neutral-500">
                                    Judul Skripsi
                                </label>
                            </div>
                            <div class="sm:col-span-9 my-0 lg:my-2">
                                <div class="w-full space-y-3">
                                    <textarea class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" value rows="3" name="judul" placeholder="Masukkan judul skripsi anda..."></textarea>
                                </div>
                            </div>
                            <div class="sm:col-span-3 my-0 lg:my-2">
                                <label for="judul" class="inline-block text-sm font-medium text-gray-500 mt-2.5 lg:my-2.5 dark:text-neutral-500">
                                    Deskripsi Judul
                                </label>
                            </div>
                            <div class="sm:col-span-9 my-0 lg:my-2">
                                <div class="w-full space-y-3">
                                    <textarea class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" rows="3" name="deskripsi" placeholder="Masukkan deksripsi judul anda..."></textarea>
                                </div>
                            </div>
                        </div>`);
            };

            const renderKriteria = (kriteria) => {
                container.empty();

                $.each(kriteria, (index, item) => {
                    const subkriteriaOptions = item.subkriteria && Array.isArray(item.subkriteria) &&
                        item.subkriteria.length > 0 ?
                        item.subkriteria.map(sub => `
                                <option value="${sub.id_subkriteria}">${sub.subkriteria_name}</option>
                            `).join('') :
                        `<option value="">Tidak ada subkriteria tersedia</option>`;

                    container.append(`
                        <div class="grid sm:grid-cols-12 gap-2 sm:gap-4">
                            <div class="sm:col-span-3 my-0 lg:my-2">
                                <label for="kriteria-${item.id_kriteria}" class="inline-block text-sm font-medium text-gray-500 mt-2.5 lg:my-2.5 dark:text-neutral-500">
                                    ${item.kriteria_name}
                                </label>
                            </div>
                            <div class="sm:col-span-9 my-0 lg:my-2">
                                <select
                                    data-hs-select='{
                                        "placeholder": "Pilih ${item.kriteria_name}",
                                        "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                        "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                        "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-primary hover:text-white rounded-lg focus:outline-none focus:bg-primary dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                                    }'
                                    id="kriteria-${item.id_kriteria}"
                                    class="hidden"
                                    name="kriteria[]"
                                >
                                    <option value="">Pilih ${item.kriteria_name}</option>
                                    ${subkriteriaOptions}
                                </select>
                                @error('kriteria.*')
                                    <div class="text-red-500 text-sm">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    `);
                });

                window.HSStaticMethods.autoInit(['select']);
            };

            // loadJudul(apiUrl);
            loadKriteria(apiUrl);
        });
    </script>
</x-app-layout>
