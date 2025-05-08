@section('Breadcrumb')
    <div class="mt-10 mb-6">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Data Profile Alternatif') }}
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
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="{{ route('method-profile.index') }}">
                    Data Profile Alternatif
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-navy truncate dark:text-neutral-200"
                aria-current="page">
                Edit Data Profile Alternatif
            </li>
        </ol>
    </div>
@endsection

@section('mobile-breadcrumb')
    <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
        <a href="{{ route('method-profile.index') }}" class="inline-flex items-center">
            Profile Alternatif
            <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16"
                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </li>
    <li class="text-sm font-semibold text-gray-800 truncate dark:text-neutral-400" aria-current="page">
        Edit Data
    </li>
@endsection

<x-app-layout>

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                    {{ __('Tambah Data Profile') }}
                </h2>
            </div>
        </div>

        <form action="{{ route('method-profile.update', $alternatif->id_alternatif) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Section -->
            @if ($errors->any())
                <div class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert" id="alert-status">
                    <svg class="flex-shrink-0 w-4 h-4 mr-3 mt-1" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20" aria-hidden="true">
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
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif

            <div
                class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">

                <div class="sm:col-span-3">
                    <label for="af-submit-application-kriteria-name"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Nama Alternatif
                    </label>
                </div>
                <div class="sm:col-span-9">
                    <select name="id_alternatif"
                        class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                        <option selected disabled>Pilih Alternatif</option>
                        <option value="{{ $alternatif->id_alternatif }}" @selected($alternatif->id_alternatif == $alternatif->id_alternatif)>
                            {{ $alternatif->name }}
                        </option>
                    </select>
                </div>

                @foreach ($kriteria as $kriteriaItem)
                    <div class="sm:col-span-3">
                        <label for="af-submit-application-kriteria-{{ $kriteriaItem->id_kriteria }}"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            {{ $kriteriaItem->kode_kriteria }} - {{ $kriteriaItem->kriteria_name }}
                        </label>
                    </div>

                    @if ($kriteriaItem->kriteria_name == 'Keahlian Utama')
                        <div class="sm:col-span-9">
                            <select multiple id="af-submit-application-kriteria-{{ $kriteriaItem->id_kriteria }}"
                                name="kriteria[{{ $kriteriaItem->id_kriteria }}][]"
                                data-hs-select='{
                    "hasSearch": true,
                    "isSearchDirectMatch": false,
                    "searchPlaceholder": "Cari...",
                    "searchClasses": "block w-full sm:text-sm border-gray-200 rounded-lg focus:border-blue-500 focus:ring-blue-500 before:absolute before:inset-0 before:z-1 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 py-1.5 sm:py-2 px-3",
                    "searchWrapperClasses": "bg-white p-2 -mx-1 sticky top-0 dark:bg-neutral-900",
                    "placeholder": "Pilih Bidang Keahlian",
                    "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
                    "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-hidden focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-hidden dark:focus:ring-1 dark:focus:ring-neutral-600",
                    "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                    "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-gray-100 rounded-lg focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800",
                    "optionTemplate": "<div class=\"flex items-center\"><div class=\"me-2\" data-icon></div><div><div class=\"hs-selected:font-semibold text-sm text-gray-800 dark:text-neutral-200\" data-title></div></div><div class=\"ms-auto\"><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-4 text-blue-600\" xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" viewBox=\"0 0 16 16\"><path d=\"M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z\"/></svg></span></div></div>",
                    "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
                }'
                                class="block">
                                @php
                                    $methodItems = $profile_method
                                        ->where('id_kriteria', $kriteriaItem->id_kriteria)
                                        ->pluck('id_subkriteria')
                                        ->toArray();
                                @endphp
                                @foreach ($kriteriaItem->subkriteria as $subkriteriaItem)
                                    <option value="{{ $subkriteriaItem->id_subkriteria }}"
                                        {{ in_array($subkriteriaItem->id_subkriteria, $methodItems) ? 'selected' : '' }}>
                                        {{ $subkriteriaItem->nilai->value }} -
                                        ({{ $subkriteriaItem->subkriteria_name }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @else
                        <div class="sm:col-span-9">
                            <select id="af-submit-application-kriteria-{{ $kriteriaItem->id_kriteria }}"
                                name="kriteria[{{ $kriteriaItem->id_kriteria }}]"
                                class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                <option selected disabled>Pilih Nilai Profile</option>
                                @php
                                    $methodItem = $profile_method->firstWhere(
                                        'id_kriteria',
                                        $kriteriaItem->id_kriteria,
                                    );
                                @endphp
                                @foreach ($kriteriaItem->subkriteria as $subkriteriaItem)
                                    <option value="{{ $subkriteriaItem->id_subkriteria }}"
                                        {{ $methodItem && $methodItem->id_subkriteria == $subkriteriaItem->id_subkriteria ? 'selected' : '' }}>
                                        {{ $subkriteriaItem->nilai->value }} -
                                        ({{ $subkriteriaItem->subkriteria_name }})
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    @endif
                @endforeach

            </div>

            <div class="flex justify-center lg:justify-end items-center w-full gap-2">
                <a href="{{ route('method-profile.index') }}"
                    class="w-full lg:w-1/12 py-3 px-4 flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-400 text-white hover:bg-gray-500 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                    Batal
                </a>
                <button type="submit"
                    class="w-full lg:w-1/12 py-3 px-4 flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    Simpan
                </button>
            </div>
        </form>

    </div>
</x-app-layout>
