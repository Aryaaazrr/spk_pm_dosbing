@role('mahasiswa')
    @section('Breadcrumb')
        <div class="mt-10 mb-6">
            <div class="p-0 text-navy font-bold dark:text-gray-100">
                {{ __('Pengajuan Judul') }}
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
                    Pengajuan Judul
                </li>
            </ol>
        </div>
    @endsection

    @section('mobile-breadcrumb')
        <li class="text-sm font-semibold text-gray-800 line-clamp-1 dark:text-neutral-400" aria-current="page">
            Pengajuan Judul
        </li>
    @endsection
@endrole

<x-app-layout>
    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        @role('mahasiswa')
            @if ($izin->izin !== 'on')
                <div class="max-w-[50rem] flex flex-col mx-auto size-full">
                    <header class="mb-auto flex justify-center w-full py-4">
                        <nav class="px-4 sm:px-6 lg:px-8">
                            <a class="flex-none text-xl font-semibold sm:text-3xl dark:text-white" href="#"
                                aria-label="Brand">For Your Information</a>
                        </nav>
                    </header>

                    <main id="content">
                        <div class="text-center flex flex-col justify-center items-center py-10 px-4 sm:px-6 lg:px-8">
                            <img src="{{ asset('static/image/fyi.png') }}" alt="fyi" class="w-1/2 ">
                            <p class="mt-3 text-gray-600 dark:text-neutral-400">Oops.</p>
                            <p class="text-gray-600 dark:text-neutral-400">Maaf, pengajuan judul belum dibuka, silahkan
                                hubungi Admin.</p>
                            <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                                <a class="w-full group  sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                    href="https://wa.me/6287863302407" target="__blank">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                        <path
                                            class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition"
                                            d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                                        <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition"
                                            d="M14.05 6A5 5 0 0 1 18 10"></path>
                                    </svg>
                                    Hubungi Admin
                                </a>
                            </div>
                        </div>
                    </main>

                    <footer class="mt-auto text-center py-5">
                        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">©SPK_DOSBING All Rights Reserved. 2025.
                            </p>
                        </div>
                    </footer>
                </div>
            @else
                <div>
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                            {{ __('Pengajuan Judul') }}
                        </h2>

                    </div>
                </div>

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

                <x-auth-session-status class="mb-4" :status="session('success')" />

                <form action="{{ route('submissions.store') }}" method="POST">
                    @csrf
                    <div
                        class="grid sm:grid-cols-12 gap-2 sm:gap-4 py-8 first:pt-0 last:pb-0 border-t first:border-transparent border-gray-200 dark:border-neutral-700 dark:first:border-transparent">

                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">

                        <div class="sm:col-span-3">
                            <label for="af-submit-application-nim"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                NIM
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-submit-application-nim" name="nim" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    value="{{ Auth::user()->nim }}" readonly>
                            </div>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-3">
                            <label for="af-submit-application-name"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Nama
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-submit-application-name" name="name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    value="{{ Auth::user()->name }}" readonly>
                            </div>
                        </div>

                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-submit-application-prodi"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Jenjang - Program Studi
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-submit-application-prodi" name="prodi" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    value="D4 - Teknik Informatika" readonly>
                            </div>
                        </div>

                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-submit-application-angkatan"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Angkatan
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <input id="af-submit-application-angkatan" value="{{ Auth::user()->angkatan->tahun }}"
                                    readonly type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                            </div>
                        </div>

                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-submit-application-judul"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Judul
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <textarea
                                    class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    rows="3" name="judul" placeholder="Masukkan deksripsi judul anda..."></textarea>
                            </div>
                        </div>

                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-submit-application-deskripsi"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Deskripsi
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <div class="sm:flex">
                                <textarea
                                    class="py-2 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    rows="3" name="deskripsi" placeholder="Masukkan deksripsi judul anda..."></textarea>
                            </div>
                        </div>

                        <!-- End Col -->
                        <div class="sm:col-span-3">
                            <label for="af-submit-application-dosen"
                                class="inline-block text-sm font-medium text-gray-500 mt-2.5 dark:text-neutral-500">
                                Dosen Pembimbing
                            </label>
                        </div>
                        <!-- End Col -->

                        <div class="sm:col-span-9">
                            <select
                                data-hs-select='{
                                "placeholder": "Pilih Dosen Pembimbing",
                                "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
                                "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-white border border-gray-200 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-900 dark:border-neutral-700",
                                "optionClasses": "py-2 px-4 w-full text-sm text-gray-800 cursor-pointer hover:bg-primary hover:text-white rounded-lg focus:outline-none focus:bg-primary dark:bg-neutral-900 dark:hover:bg-neutral-800 dark:text-neutral-200 dark:focus:bg-neutral-800"
                            }'
                                name="id_alternatif">
                                <option value="" selected disabled>Pilih Dosen Pembimbing</option>
                                @foreach ($alternatif as $item)
                                    <option value="{{ $item->id_alternatif }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- End Col -->

                    </div>
                    <!-- End Section -->

                    <div class="flex justify-center lg:justify-end items-center w-full gap-2">
                        <button type="submit"
                            class="w-full lg:w-1/12 py-3 px-4 flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            Simpan
                        </button>
                    </div>
                </form>
            @endif
        @endrole

    </div>
</x-app-layout>
