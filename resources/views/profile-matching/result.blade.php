<x-app-layout>
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

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-md dark:bg-neutral-800 p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                @role('mahasiswa')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Perhitungan Metode Profile Matching') }}
                    </h2>
                @endrole
            </div>
        </div>

        @role('mahasiswa')
            <div class="px-4 2xl:px-0 mb-5">
                <div class="gap-8 lg:flex">
                    <div class="w-full bg-white">
                        <div class="hs-accordion-group">

                            <div class="hs-accordion active" id="hs-basic-heading-one">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="true" aria-controls="hs-basic-collapse-one">
                                    <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Perhitungan Gap Profil
                                </button>

                                <div id="hs-basic-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-one">
                                    <div class="pb-4 px-6 overflow-x-auto">

                                        <table
                                            class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        No
                                                    </th>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        Kode Alternatif
                                                    </th>
                                                    @foreach ($data_kriteria as $item)
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            {{ $item->kode_kriteria }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($resultsGAP as $alternatif => $kriteria)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $loop->iteration }}
                                                        </th>
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $alternatif }}
                                                        </th>
                                                        @foreach ($kriteria as $item)
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ is_array($item) ? implode(', ', $item) : $item }}
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="hs-accordion" id="hs-basic-heading-two">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-collapse-two">
                                    <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Pembobotan
                                </button>
                                <div id="hs-basic-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-two">
                                    <div class="pb-4 px-6 overflow-x-auto">

                                        <table
                                            class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        No
                                                    </th>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        Kode Alternatif
                                                    </th>
                                                    @foreach ($data_kriteria as $item)
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            {{ $item->kode_kriteria }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($normalizedGAP as $alternatif => $kriteria)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $loop->iteration }}
                                                        </th>
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $alternatif }}
                                                        </th>
                                                        @foreach ($kriteria as $item)
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ is_array($item) ? implode(', ', $item) : $item }}
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="hs-accordion" id="hs-basic-heading-three">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-collapse-three">
                                    <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Perhitungan Core Factor dan Secondary Factor
                                </button>
                                <div id="hs-basic-collapse-three"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-three">
                                    <div class="pb-4 px-6 overflow-x-auto">

                                        <table
                                            class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        No
                                                    </th>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        Kode Alternatif
                                                    </th>
                                                    @foreach ($data_aspek as $item)
                                                        <th scope="col" colspan="2" class="px-6 py-3 text-center">
                                                            {{ $item->kode_aspek }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach ($data_kriteria as $item)
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            {{ $item->kode_kriteria }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($factorValue as $alternatif => $aspek)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $loop->iteration }}
                                                        </th>
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $alternatif }}
                                                        </th>
                                                        @foreach ($kriteria as $item)
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ is_array($item) ? implode(', ', $item) : $item }}
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="hs-accordion" id="hs-basic-heading-four">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-collapse-four">
                                    <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Perhitungan Nilai Total Tiap Aspek
                                </button>
                                <div id="hs-basic-collapse-four"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-four">
                                    <div class="pb-4 px-6 overflow-x-auto">

                                        <table
                                            class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        No
                                                    </th>
                                                    <th scope="col" colspan="2" rowspan="2"
                                                        class="px-6 py-3 text-center">
                                                        Kode Alternatif
                                                    </th>
                                                    @foreach ($data_aspek as $item)
                                                        <th scope="col" class="px-6 py-3 text-center">
                                                            {{ $item->kode_aspek }}
                                                        </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($totalValue as $alternatif => $aspek)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $loop->iteration }}
                                                        </th>
                                                        <th scope="row" colspan="2"
                                                            class="px-6 py-4 font-medium text-center text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $alternatif }}
                                                        </th>
                                                        @foreach ($aspek as $factor => $value)
                                                            <th scope="row"
                                                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                {{ is_array($value) ? implode(', ', $value) : $value }}
                                                            </th>
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="hs-accordion" id="hs-basic-heading-five">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-collapse-five">
                                    <svg class="hs-accordion-active:hidden hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 block size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    <svg class="hs-accordion-active:block hs-accordion-active:text-blue-600 hs-accordion-active:group-hover:text-blue-600 hidden size-4 text-gray-600 group-hover:text-gray-500 dark:text-neutral-400"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Perankingan
                                </button>
                                <div id="hs-basic-collapse-five"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-five">
                                    <div class="pb-4 px-6 overflow-x-auto">

                                        <table
                                            class="w-full text-sm text-center rtl:text-right text-gray-500 dark:text-gray-400">
                                            <thead
                                                class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Kode Alternatif
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Nilai Akhir
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Ranking
                                                    </th>
                                                    {{-- <th scope="col" class="px-6 py-3 text-center">
                                                        Pilih Dosen
                                                    </th> --}}
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ranking as $index => $result)
                                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $result['dosenName'] }}
                                                        </th>
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $result['hasilAkhir'] }}
                                                        </th>
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            {{ $result['rank'] }}
                                                        </th>
                                                        {{-- <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            <div class="text-center">
                                                                <button type="button"
                                                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                                                    aria-haspopup="dialog" aria-expanded="false"
                                                                    aria-controls="modal-{{ $loop->index }}"
                                                                    data-hs-overlay="#modal-{{ $loop->index }}">
                                                                    Pilih Dosen
                                                                </button>
                                                            </div>
                                                        </th>
                                                        <div id="modal-{{ $loop->index }}"
                                                            class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto"
                                                            role="dialog" tabindex="-1"
                                                            aria-labelledby="modal-{{ $loop->index }}-label">
                                                            <div
                                                                class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                                <div
                                                                    class="relative flex flex-col bg-white border shadow-sm rounded-xl overflow-hidden dark:bg-neutral-900 dark:border-neutral-800">
                                                                    <div class="absolute top-2 end-2">
                                                                        <button type="button"
                                                                            class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                                            aria-label="Close"
                                                                            data-hs-overlay="#modal-{{ $loop->index }}">
                                                                            <span class="sr-only">Close</span>
                                                                            <svg class="shrink-0 size-4"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none"
                                                                                stroke="currentColor" stroke-width="2"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round">
                                                                                <path d="M18 6 6 18" />
                                                                                <path d="m6 6 12 12" />
                                                                            </svg>
                                                                        </button>
                                                                    </div>

                                                                    <form action="{{ route('results.submit', Auth::user()->id) }}"
                                                                        method="POST">
                                                                        @csrf

                                                                        <input type="hidden" name="user"
                                                                            value="{{ Auth::user()->id }}">
                                                                        <div class="p-4 sm:p-10 overflow-y-auto">
                                                                            <div class="mb-6 text-center">
                                                                                <h3 id="modal-{{ $loop->index }}-label"
                                                                                    class="mb-2 text-xl font-bold text-gray-800 dark:text-neutral-200">
                                                                                    {{ $judul }}
                                                                                </h3>
                                                                                <input type="hidden" name="judul"
                                                                                    value="{{ $judul }}">
                                                                                <p
                                                                                    class="text-gray-500 dark:text-neutral-500">
                                                                                    {{ $deskripsi }}
                                                                                </p>
                                                                                <input type="hidden" name="deskripsi"
                                                                                    value="{{ $deskripsi }}">
                                                                            </div>

                                                                            <div class="space-y-4">
                                                                                <!-- Card -->
                                                                                <div
                                                                                    class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-800">
                                                                                    <label for="hs-account-activity"
                                                                                        class="flex gap-x-5 p-4 md:p-5">
                                                                                        <span class="flex gap-x-5">
                                                                                            <img class="size-[38px] rounded-full"
                                                                                                src="{{ asset('static/image/logo_polije.png') }}"
                                                                                                alt="Avatar">

                                                                                            <span class="grow">
                                                                                                <span
                                                                                                    class="block font-medium text-gray-800 dark:text-neutral-200">{{ $result['dosenName'] }}</span>
                                                                                                <input type="hidden"
                                                                                                    name="alternatif"
                                                                                                    value="{{ $result['dosenId'] }}">
                                                                                                <span
                                                                                                    class="block text-sm text-gray-500 dark:text-neutral-500">
                                                                                                    Nilai Akhir:
                                                                                                    {{ $result['hasilAkhir'] }}</span>
                                                                                            </span>
                                                                                        </span>
                                                                                    </label>
                                                                                </div>
                                                                                <!-- End Card -->
                                                                            </div>
                                                                        </div>

                                                                        <div
                                                                            class="flex justify-end items-center gap-x-2 py-3 px-4 bg-gray-50 border-t dark:bg-neutral-950 dark:border-neutral-800">
                                                                            <button type="button"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none focus:outline-none focus:bg-gray-50 dark:bg-transparent dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                                                data-hs-overlay="#modal-{{ $loop->index }}">
                                                                                Cancel
                                                                            </button>
                                                                            <button type="submit"
                                                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                                                                Kirim
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> --}}
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endrole
    </div>
</x-app-layout>
