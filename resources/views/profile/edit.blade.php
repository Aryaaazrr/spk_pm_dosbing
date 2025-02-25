<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="sm:px-6 lg:px-8 space-y-6">
            {{-- <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div> --}}

            <!-- Card Section -->
            <div class="px-4 sm:px-6 lg:px-8 mx-auto">
                <form>
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

                                <div class="space-y-2">
                                    <label for="af-submit-app-project-name"
                                        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                        NIM
                                    </label>

                                    <input id="af-submit-app-project-name" type="text"
                                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        placeholder="NIM Mahasiswa">
                                </div>

                                <div class="space-y-2">
                                    <label for="af-submit-project-url"
                                        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Nama Lengkap
                                    </label>

                                    <input id="af-submit-project-url" type="text"
                                        class="py-2 px-3 pe-11 block w-full border-gray-200 shadow-sm text-sm rounded-lg focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                        placeholder="Masukkan Nama Lengkap">
                                </div>

                                <div class="space-y-2">
                                    <label for="af-submit-app-category"
                                        class="inline-block text-sm font-medium text-gray-800 mt-2.5 dark:text-neutral-200">
                                        Angkatan
                                    </label>

                                    <select id="af-submit-app-category"
                                        class="py-2 px-3 pe-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                                        <option selected>Pilih Tahun Angkatan</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                            </div>
                            <!-- End Grid -->

                            <div class="mt-5 flex justify-center gap-x-2">
                                <button type="button"
                                    class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    Perbarui Profil
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </form>
            </div>
            <!-- End Card Section -->
        </div>
    </div>
</x-app-layout>
