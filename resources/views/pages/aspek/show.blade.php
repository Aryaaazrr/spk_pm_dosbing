@section('Breadcrumb')
    <div class="mt-10 mb-6">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Data Aspek') }}
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
                    href="{{ route('aspek.index') }}">
                    Data Aspek
                    <svg class="shrink-0 size-5 text-gray-400 dark:text-neutral-600 mx-2" width="16" height="16"
                        viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                </a>
            </li>
            <li class="inline-flex items-center text-sm font-semibold text-navy truncate dark:text-neutral-200"
                aria-current="page">
                Lihat Detail Data Aspek
            </li>
        </ol>
    </div>
@endsection

@section('mobile-breadcrumb')
    <li class="flex items-center text-sm text-gray-800 dark:text-neutral-400">
        <a href="{{ route('aspek.index') }}" class="inline-flex items-center">
            Aspek
            <svg class="shrink-0 mx-3 overflow-visible size-2.5 text-gray-400 dark:text-neutral-500" width="16"
                height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" />
            </svg>
        </a>
    </li>
    <li class="text-sm font-semibold text-gray-800 line-clamp-1 dark:text-neutral-400" aria-current="page">
        Lihat Detail Data {{ $aspek->aspek_name }}
    </li>
@endsection

<x-app-layout>

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                    {{ __('Lihat Detail Data Aspek') }}
                </h2>
            </div>
        </div>


        <div
            class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">

            <div class="sm:col-span-3">
                <label for="af-submit-application-aspek-name"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                    Nama Aspek
                </label>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
                <div class="sm:flex">
                    <input id="af-submit-application-aspek-name" name="aspek_name" type="text"
                        value="{{ $aspek->aspek_name }}"
                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                        readonly>
                </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <label for="af-submit-application-persentase"
                    class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                    Persentase
                </label>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
                <input id="af-submit-application-persentase" name="persentase" type="text"
                    value="{{ $aspek->persentase }}%" oninput="formatPresentase(this)"
                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    readonly>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-3">
                <div class="inline-block">
                    <label for="af-submit-application-keterangan"
                        class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                        Keterangan
                    </label>
                </div>
            </div>
            <!-- End Col -->

            <div class="sm:col-span-9">
                <input id="af-submit-application-keterangan" name="keterangan" type="text"
                    value="{{ $aspek->keterangan }}"
                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                    readonly>
            </div>
            <!-- End Col -->

        </div>
        <!-- End Section -->

        <div class="flex justify-center lg:justify-end items-center w-full gap-2">
            <a href="{{ route('aspek.index') }}"
                class="w-full lg:w-1/12 py-3 px-4 flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-gray-400 text-white hover:bg-gray-500 focus:outline-none focus:bg-gray-600 disabled:opacity-50 disabled:pointer-events-none">
                Kembali
            </a>
        </div>

    </div>
</x-app-layout>
