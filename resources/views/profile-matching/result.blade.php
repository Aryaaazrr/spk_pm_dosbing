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

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                @role('mahasiswa')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Hasil Rekomendasi Dosen') }}
                    </h2>
                @endrole
            </div>
        </div>

        @role('mahasiswa')
            <div class="px-4 2xl:px-0 mb-5">
                <div class="gap-8 lg:flex">
                    <div class="w-full bg-white rounded-lg shadow-md dark:bg-neutral-800">
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
                                    Perhitungan Gap Profile
                                </button>
                                <div id="hs-basic-collapse-one"
                                    class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-one">
                                    <div class="pb-4 px-6">
                                        @foreach ($resultsGAP as $alternatif => $kriteria)
                                            @foreach ($kriteria as $item)
                                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                                    {{ $item }}
                                                </p>
                                            @endforeach
                                        @endforeach
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
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M5 12h14"></path>
                                    </svg>
                                    Pembobotan
                                </button>
                                <div id="hs-basic-collapse-two"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-two">
                                    <div class="pb-4 px-6">
                                        @foreach ($normalizedGAP as $alternatif => $kriteria)
                                            @foreach ($kriteria as $item)
                                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                                    {{ $item }}
                                                </p>
                                            @endforeach
                                        @endforeach
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
                                    <div class="pb-4 px-6">
                                        @foreach ($factorValue as $alternatif => $aspek)
                                            @foreach ($aspek as $factor => $item)
                                                @foreach ($item as $value)
                                                    <p class="text-sm text-gray-600 dark:text-neutral-200">
                                                        {{ $value }}
                                                    </p>
                                                @endforeach
                                            @endforeach
                                        @endforeach
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
                                    Perhitungan Core Factor dan Secondary Factor
                                </button>
                                <div id="hs-basic-collapse-four"
                                    class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                                    role="region" aria-labelledby="hs-basic-heading-four">
                                    <div class="pb-4 px-6">
                                        @foreach ($factorValue as $alternatif => $kriteria)
                                            @foreach ($kriteria as $item)
                                                <p class="text-sm text-gray-600 dark:text-neutral-200">
                                                    {{ $item }}
                                                </p>
                                            @endforeach
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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

            loadJudul(apiUrl);
            loadKriteria(apiUrl);
        });
    </script>
</x-app-layout>
