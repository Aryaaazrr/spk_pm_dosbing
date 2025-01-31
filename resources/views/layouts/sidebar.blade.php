<aside
    class="fixed top-0 left-0 z-40 w-72 h-screen pt-0 transition-transform -translate-x-full md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-white dark:bg-gray-800">
        <ul class="space-y-2 p-2">
            <a href="/" class="flex items-center justify-between mr-4 mb-10">
                <img src="{{ asset('static/image/logo_polije.png') }}" class="mr-3 h-12" alt="Flowbite Logo" />
                <div>
                    <span class="self-center text-base -mb-2 font-bold whitespace-nowrap text-navy dark:text-white">SPK
                        PROFILE
                        MATCHING</span>
                    <span class="text-sm font-medium whitespace-nowrap text-navy dark:text-white">D4-TEKNIK
                        INFORMATIKA</span>
                </div>
            </a>

            <x-nav-item href="{{ route('dashboard.index') }}"
                icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house group-hover:text-white">
                <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8" />
                <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>'
                title="Dashboard" :active="Route::is('dashboard*')" />

            @role('admin')
                <x-nav-item href="{{ route('aspek.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-key-round group-hover:text-white">
                            <path
                                d="M2.586 17.414A2 2 0 0 0 2 18.828V21a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h1a1 1 0 0 0 1-1v-1a1 1 0 0 1 1-1h.172a2 2 0 0 0 1.414-.586l.814-.814a6.5 6.5 0 1 0-4-4z" />
                            <circle cx="16.5" cy="7.5" r=".5" fill="currentColor" />
                        </svg>'
                    title="Aspek" :active="Route::is('aspek*')" />

                <x-nav-item href="{{ route('kriteria.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-collapse group-hover:text-white"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>'
                    title="Kriteria" :active="Route::is('kriteria*')" />

                <x-nav-item href="{{ route('subkriteria.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-tree group-hover:text-white"><path d="M21 12h-8"/><path d="M21 6H8"/><path d="M21 18h-8"/><path d="M3 6v4c0 1.1.9 2 2 2h3"/><path d="M3 10v6c0 1.1.9 2 2 2h3"/></svg>'
                    title="Subkriteria" :active="Route::is('subkriteria*')" />

                <x-nav-item href="{{ route('alternatif.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round-search group-hover:text-white">
                            <circle cx="10" cy="8" r="5" />
                            <path d="M2 21a8 8 0 0 1 10.434-7.62" />
                            <circle cx="18" cy="18" r="3" />
                            <path d="m22 22-1.9-1.9" />
                        </svg>'
                    title="Alternatif" :active="Route::is('alternatif*')" />

                <x-nav-item href="{{ route('method-profile.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round-check group-hover:text-white">
                            <path d="M2 21a8 8 0 0 1 13.292-6" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="m16 19 2 2 4-4" />
                        </svg>'
                    title="Profile" :active="Route::is('method-profile*')" />

                <x-nav-item href="{{ route('mahasiswa.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users-round group-hover:text-white">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>'
                    title="Mahasiswa" :active="Route::is('mahasiswa*')" />
                <x-nav-item href="{{ route('submissions.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-files group-hover:text-white">
                            <path d="M20 7h-3a2 2 0 0 1-2-2V2" />
                            <path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z" />
                            <path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8" />
                        </svg>'
                    title="Daftar Pengajuan" :active="Route::is('submissions*')" />
            @endrole

            @role('mahasiswa')
                <x-nav-item href="{{ route('alternatif.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-users-round group-hover:text-white">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>'
                    title="Daftar Dosen" :active="Route::is('alternatif*')" />
                <x-nav-item href="{{ route('submissions.index') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-user-round-check group-hover:text-white">
                            <path d="M2 21a8 8 0 0 1 13.292-6" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="m16 19 2 2 4-4" />
                        </svg>'
                    title="Pemilihan Dosen" :active="Route::is('submissions.index') || Route::is('results*')" />
                <x-nav-item href="{{ route('submissions.create') }}"
                    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-files group-hover:text-white">
                            <path d="M20 7h-3a2 2 0 0 1-2-2V2" />
                            <path d="M9 18a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h7l4 4v10a2 2 0 0 1-2 2Z" />
                            <path d="M3 7.6v12.8A1.6 1.6 0 0 0 4.6 22h9.8" />
                        </svg>'
                    title="Pengajuan Judul" :active="Route::is('submissions.create*')" />
            @endrole
        </ul>
        <ul class="space-y-2 p-2 border-t border-gray-200 dark:border-gray-700">
            <x-nav-item href="{{ route('profile.edit') }}"
                icon=' <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-user-round-cog group-hover:text-white">
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
                    </svg>'
                title="Akun" :active="Route::is('profile*')" />
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();"
                        class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary  dark:hover:bg-gray-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-log-out group-hover:text-white">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />
                            <polyline points="16 17 21 12 16 7" />
                            <line x1="21" x2="9" y1="12" y2="12" />
                        </svg>
                        <span class="ml-3 group-hover:text-white">Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
</aside>
