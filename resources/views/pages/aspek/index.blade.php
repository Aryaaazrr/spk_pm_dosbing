<x-app-layout>

    <div class="mt-10 mb-6 md:-mt-3">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Data Aspek') }}
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
                Data Aspek
            </li>
        </ol>
    </div>

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                    {{ __('Data Aspek') }}
                </h2>
                <a href="{{ route('aspek.create') }}"
                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-success text-white hover:bg-successHover focus:outline-none focus:bg-green-400 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                    {{ __('Tambah Data') }}
                </a>
            </div>
        </div>

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
                    <th>
                        <span class="flex items-center">
                            Kode Aspek
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Nama Aspek
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Persentase
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Keterangan
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
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
            <tbody id="content-aspek">
                @foreach ($aspek as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->kode_aspek }}</td>
                        <td>{{ $item->aspek_name }}</td>
                        <td>{{ $item->persentase }} %</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <button id="dropdownMenuIconHorizontalButton"
                                data-dropdown-toggle="dropdownDotsHorizontal-{{ $item->id_aspek }} "
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal-{{ $item->id_aspek }} "
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="{{ route('aspek.edit', $item->id_aspek) }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id_aspek }}').submit();"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus</a>
                                    </li>
                                </ul>
                            </div>

                            <form id="delete-form-{{ $item->id_aspek }}"
                                action="{{ route('aspek.destroy', $item->id_aspek) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
         $(document).ready(() => {
            const container = $('#content-aspek');
            const apiUrl = `{{ url('/api/v1/aspek') }}`;
            let metaData = null;

            const loadAspek = (apiUrl) => {
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
                            data: aspek,
                            pagination
                        } = response;
                        metaData = pagination;

                        $('#loading').remove();

                        if (aspek.length === 0) {
                            container.append(`
                                    <div class="col-span-full flex justify-center items-center h-64">
                                    <h4 class="text-lg font-semibold text-center text-gray-700 dark:text-gray-400">Data tidak ditemukan</h4>
                                    </div>
                                `);
                            return;
                        } else {
                            renderAspek(aspek);
                        }
                    }
                });
            };

            const renderAspek = (aspek) => {
                container.empty();

                $.each(aspek, (index, item) => {
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
                                    class="hidden" name="kriteria-${item.id_kriteria}"
                                    >
                                    <option value="">Pilih ${item.kriteria_name}</option>
                                        ${subkriteriaOptions}
                                    </select>
                                    @error('kriteria-${item.id_kriteria}')
                                        <div class="text-red-500 text-sm">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        `);
                });

                window.HSStaticMethods.autoInit(['select']);
            };

            loadAspek(apiUrl);
        });
    </script>
</x-app-layout>
