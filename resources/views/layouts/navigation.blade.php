{{-- <nav class="bg-transparent px-4 py-2.5 fixed left-0 right-0 top-0">
    <div class="flex flex-wrap justify-between items-center">
        <div class="flex justify-start items-center">
            <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                aria-controls="drawer-navigation"
                class="p-2 mr-2 text-gray-600 rounded-lg cursor-pointer md:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
                <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Toggle sidebar</span>
            </button>
        </div>
        <div class="flex items-center lg:order-2">

            <button type="button"
                class="flex mx-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                <span class="sr-only">Open user menu</span>
                <img class="w-8 h-8 rounded-full"
                    src="{{ asset('static/image/profile-placeholder.jpg') }}"
                    alt="user photo" />
            </button>
            <!-- Dropdown menu -->
            <div class="hidden z-50 my-4 w-56 text-base list-none bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                id="dropdown">
                <div class="py-3 px-4">
                    <span
                        class="block text-sm font-semibold text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    <span class="block text-sm text-gray-900 truncate dark:text-white">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-1 text-gray-700 dark:text-gray-300" aria-labelledby="dropdown">
                    <li>
                        <a href="{{ route('profile.edit') }}"
                            class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Akun</a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();"
                                class="block py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">
                                Log Out</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> --}}
<!-- ========== HEADER ========== -->
<header
    class="sticky top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-[48] w-full bg-white lg:bg-body text-sm py-2.5 h-[110px] lg:ps-[260px] dark:bg-neutral-800 dark:border-neutral-700">
    <nav class="px-4 sm:px-6 flex basis-full items-center w-full mx-auto">
        <div class="me-5 lg:me-0 lg:hidden">
            <a href="/" class="flex items-center justify-between my-4">
                <img src="{{ asset('static/image/logo_polije.png') }}"
                    class="mr-3 hidden min-[375px]:block min-[375px]:h-12" alt="Flowbite Logo" />
                <div>
                    <span class="self-center text-base -mb-2 font-bold whitespace-nowrap text-navy dark:text-white">SPK
                        PROFILE
                        MATCHING</span>
                    <span class="text-sm font-medium whitespace-nowrap text-navy dark:text-white">D4-TEKNIK
                        INFORMATIKA</span>
                </div>
            </a>
            <!-- End Logo -->

            <div class="lg:hidden ms-1">

            </div>
        </div>

        <div class="w-full flex items-center justify-end ms-auto lg:justify-between gap-x-1 md:gap-x-3">

            <div class="hidden lg:block md:ps-9">
                <div class="relative">
                    @if (Route::currentRouteName() === 'dashboard.index')
                        <div class="mt-10 mb-6">
                            <div class="p-0 text-purple font-bold dark:text-gray-100">
                                {{ __('Hello, ' . Auth::user()->name) }}
                            </div>
                            <div class="p-0 text-navy font-bold text-2xl">
                                {{ __('Welcome to SPK Pemilihan Dosen Pembimbing!') }}
                            </div>
                        </div>
                    @endif
                    @yield('Breadcrumb')
                </div>
            </div>

            <div class="flex flex-row items-center justify-end gap-1">

                <!-- Dropdown -->
                <div class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                    <button id="hs-dropdown-account" type="button"
                        class="size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none dark:text-white"
                        aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <img class="shrink-0 size-[38px] rounded-full"
                            src="{{ asset('static/image/profile-placeholder.jpg') }}" alt="Avatar">
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-60 bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                        role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-account">
                        <div class="py-3 px-5 bg-gray-100 rounded-t-lg dark:bg-neutral-700">
                            <p class="text-sm text-gray-500 dark:text-neutral-500">Signed in as</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-neutral-200">{{ Auth::user()->email }}
                            </p>
                        </div>
                        <div class="p-1.5 space-y-0.5">
                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                href="{{ route('profile.edit') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-user-round-cog shrink-0 size-4">
                                    <path d="M2 21a8 8 0 0 1 10.434-7.62" />
                                    <circle cx="10" cy="8" r="5" />
                                    <circle cx="18" cy="18" r="3" />
                                    <path d="m19.5 14.3-.4.9" />
                                    <path d="m16.9 20.8-.4.9" />
                                    <path d="m21.7 19.5-.9-.4" />
                                    <path d="m15.2 16.9-.9-.4" />
                                    <path d="m21.7 16.5-.9.4" />
                                    <path d="m15.2 19.1-.9.4" />
                                    <path d="m19.5 21.7-.4-.9" />
                                    <path d="m16.9 15.2-.4-.9" />
                                </svg>
                                Akun
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300"
                                    href="{{ route('logout') }}"
                                    onclick="event.preventDefault();this.closest('form').submit();">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-log-out shrink-0 size-4">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                                        <polyline points="16 17 21 12 16 7" />
                                        <line x1="21" x2="9" y1="12" y2="12" />
                                    </svg>
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Dropdown -->
            </div>
        </div>
    </nav>
</header>
<!-- ========== END HEADER ========== -->
