<x-app-layout>

    <div class="mt-10 mb-6 md:-mt-3">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Data Profile') }}
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
                <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:text-neutral-500 dark:hover:text-blue-500 dark:focus:text-blue-500"
                    href="{{ route('method-profile.index') }}">
                    Data Profile
                </a>
                <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16"
                    viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-navy truncate dark:text-neutral-200"
                aria-current="page">
                Tambah Data Profile
            </li>
        </ol>
    </div>

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                    {{ __('Tambah Data Profile') }}
                </h2>
            </div>
        </div>

        <form action="{{ route('method-profile.update', $profile_method->id_alternatif) }}" method="POST">
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
                        @foreach ($alternatif as $item)
                            <option value="{{ $item->id_alternatif }}" @selected($item->id_alternatif == $profile_method->id_alternatif)>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                @foreach ($kriteria as $kriteriaItem)
                    <div class="sm:col-span-3">
                        <label for="af-submit-application-kriteria-{{ $kriteriaItem->id_kriteria }}"
                            class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                            {{ $kriteriaItem->kode_kriteria }} - {{ $kriteriaItem->kriteria_name }}
                        </label>
                    </div>
                    <div class="sm:col-span-9">
                        <select id="af-submit-application-kriteria-{{ $kriteriaItem->id_kriteria }}"
                            name="kriteria[{{ $kriteriaItem->id_kriteria }}]"
                            class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            <option disabled>Pilih Nilai Profile</option>
                            @foreach ($kriteriaItem->subkriteria as $subkriteriaItem)
                                <option value="{{ $subkriteriaItem->id_subkriteria }}"
                                    @if (isset($profile_method) &&
                                            $profile_method->kriteria->where('id_kriteria', $kriteriaItem->id_kriteria)->first() &&
                                            $profile_method->kriteria->where('id_kriteria', $kriteriaItem->id_kriteria)->first()->subkriteria->pluck('id_subkriteria')->contains($subkriteriaItem->id_subkriteria)) selected @endif>
                                    {{ $subkriteriaItem->nilai }} - ({{ $subkriteriaItem->subkriteria_name }})
                                </option>
                            @endforeach
                        </select>
                    </div>
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
