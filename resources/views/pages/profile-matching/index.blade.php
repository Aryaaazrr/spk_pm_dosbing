<x-app-layout>

    @role('admin')
        <div class="mt-10 mb-6 md:-mt-3">
            <div class="p-0 text-navy font-bold dark:text-gray-100">
                {{ __('Data Alternatif') }}
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
                    Data Alternatif
                </li>
            </ol>
        </div>
    @endrole

    @role('mahasiswa')
        <div class="mt-10 mb-6 md:-mt-3">
            <div class="p-0 text-navy font-bold dark:text-gray-100">
                {{ __('Daftar Dosen') }}
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
                    Daftar Dosen
                </li>
            </ol>
        </div>
    @endrole

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                @role('admin')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Data Alternatif') }}
                    </h2>
                @endrole
                @role('mahasiswa')
                    <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                        {{ __('Daftar Dosen') }}
                    </h2>
                @endrole

                @role('admin')
                    <a href="{{ route('alternatif.create') }}"
                        class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-success text-white hover:bg-successHover focus:outline-none focus:bg-green-400 disabled:opacity-50 disabled:pointer-events-none dark:bg-white dark:text-neutral-800">
                        {{ __('Tambah Data') }}
                    </a>
                @endrole
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
                            NIP
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        @role('admin')
                            <span class="flex items-center">
                                Nama Alternatif
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        @endrole
                        @role('mahasiswa')
                            <span class="flex items-center">
                                Nama Dosen
                                <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                                </svg>
                            </span>
                        @endrole
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
            <tbody>
                @foreach ($alternatif as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nip }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <button id="dropdownMenuIconHorizontalButton"
                                data-dropdown-toggle="dropdownDotsHorizontal-{{ $item->id_alternatif }} "
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal-{{ $item->id_alternatif }} "
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    @role('admin')
                                        <li>
                                            <a href="{{ route('alternatif.edit', $item->id_alternatif) }}"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id_alternatif }}').submit();"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Hapus</a>
                                        </li>
                                    @endrole
                                    @role('mahasiswa')
                                        <li>
                                            <a href="https://jti.polije.ac.id/dosen" target="__blank"
                                                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Lihat
                                                Sumber</a>
                                        </li>
                                    @endrole
                                </ul>
                            </div>

                            <form id="delete-form-{{ $item->id_alternatif }}"
                                action="{{ route('alternatif.destroy', $item->id_alternatif) }}" method="POST"
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
</x-app-layout>
