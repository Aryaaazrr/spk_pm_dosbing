@section('Breadcrumb')
    <div class="mt-10 mb-6">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Profil Akun') }}
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
                Profil Akun
            </li>
        </ol>
    </div>
@endsection

@section('mobile-breadcrumb')
    <li class="text-sm font-semibold text-gray-800 line-clamp-1 dark:text-neutral-400" aria-current="page">
        Profil Akun
    </li>
@endsection

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div>
        <div>
            <!-- Card Section -->
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <!-- Card -->
                <div class="bg-white rounded-xl shadow dark:bg-neutral-900">
                    <div
                        class="relative h-40 rounded-t-xl bg-[url('https://preline.co/assets/svg/examples/abstract-bg-1.svg')] bg-no-repeat bg-cover bg-center">
                    </div>

                    <div class="pt-0 p-4 sm:pt-0 sm:p-7">
                        <!-- Grid -->
                        <div class="space-y-4 sm:space-y-6">
                            <div>
                                <label class="sr-only">
                                    Product photo
                                </label>

                                <div class="flex flex-col sm:flex-row sm:items-center sm:gap-x-5">
                                    <img class="-mt-8 relative z-10 inline-block size-24 mx-auto sm:mx-0 rounded-full ring-4 ring-white dark:ring-neutral-900"
                                        src="https://preline.co/assets/img/160x160/img1.jpg" alt="Avatar">

                                    {{-- <div
                                            class="mt-4 sm:mt-auto sm:mb-1.5 flex justify-center sm:justify-start gap-2">
                                            <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                    <polyline points="17 8 12 3 7 8" />
                                                    <line x1="12" x2="12" y1="3" y2="15" />
                                                </svg>
                                                Upload logo
                                            </button>
                                            <button type="button"
                                                class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-neutral-800 dark:focus:bg-neutral-800">
                                                Delete
                                            </button>
                                        </div> --}}
                                </div>
                            </div>

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
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                    </button>
                                </div>
                            @endif

                            @if (session('status') === 'profile-updated')
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                            @endif

                            <div class="space-y-2">
                                <label for="af-submit-app-project-name"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                    NIM
                                </label>

                                <input id="af-submit-app-project-name" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="NIM Mahasiswa" name="nim" value="{{ $user->nim }}">
                            </div>

                            <div class="space-y-2">
                                <label for="af-submit-project-url"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Nama Lengkap
                                </label>

                                <input id="af-submit-project-url" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Masukkan Nama Lengkap" name="name" value="{{ $user->name }}">
                            </div>

                            <div class="space-y-2">
                                <label for="af-submit-project-url"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Email
                                </label>

                                <input id="af-submit-project-url" type="text"
                                    class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Masukkan Email Aktif" name="email" value="{{ $user->email }}">
                            </div>

                            <div class="space-y-2">
                                <label for="af-submit-app-category"
                                    class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                    Angkatan
                                </label>

                                <select id="af-submit-app-category" name="id_angkatan"
                                    class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                    <option selected disabled>
                                        Pilih Tahun Angkatan
                                    </option>
                                    @foreach ($angkatan as $item)
                                        <option value="{{ $item->id_angkatan }}"
                                            {{ $user->id_angkatan == $item->id_angkatan ? 'selected' : '' }}>
                                            {{ $item->tahun }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- End Grid -->

                        <div class="mt-5 flex justify-center gap-x-2">
                            <button type="submit"
                                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                Perbarui Profil
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End Card -->
            </form>
            <!-- End Card Section -->
        </div>
    </div>
</x-app-layout>
