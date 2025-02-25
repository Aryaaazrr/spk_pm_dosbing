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
            <div class="space-y-3 mb-4">
                <dl class="flex flex-col sm:flex-row gap-1">
                    <dt class="min-w-40">
                        <span class="block text-sm text-gray-500 dark:text-neutral-500">Hasil
                            Rekomendasi Dosen berdasarkan Metode Profile Matching:</span>
                    </dt>
                </dl>
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
                                            <tfoot>
                                                <tr class="font-semibold text-gray-900 dark:text-white">
                                                    <th scope="row" colspan="4" class="px-6 py-3 text-base">Data
                                                        Kriteria Mahasiswa</th>
                                                    @foreach ($selectedKriteria as $item)
                                                        @php
                                                            $subkriteria = \App\Models\Subkriteria::with('nilai')->find(
                                                                $item,
                                                            );
                                                        @endphp
                                                        <td class="px-6 py-3">
                                                            {{ $subkriteria->nilai->value ?? 'Tidak ada nilai' }}</td>
                                                    @endforeach
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>
                            </div>

                            <div class="hs-accordion" id="hs-basic-heading-two">
                                <button
                                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 px-6 py-3 inline-flex items-center gap-x-3 text-sm w-full font-semibold text-start text-gray-800 hover:text-gray-500 focus:outline-none focus:text-gray-500 rounded-lg disabled:opacity-50 disabled:pointer-events-none dark:hs-accordion-active:text-blue-500 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400"
                                    aria-expanded="false" aria-controls="hs-basic-collapse-two">
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
