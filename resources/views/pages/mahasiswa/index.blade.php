<x-app-layout>

    <div class="mt-10 mb-6 md:-mt-3">
        <div class="p-0 text-navy font-bold dark:text-gray-100">
            {{ __('Data Mahasiswa') }}
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
                Data Mahasiswa
            </li>
        </ol>
    </div>

    <div class="grid grid-cols-1 bg-white rounded-2xl shadow-sm p-6">

        <div>
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-bold text-navy dark:text-gray-100">
                    {{ __('Data Mahasiswa') }}
                </h2>
            </div>
        </div>

        {{-- <table id="pagination-table">
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
                            NIM
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Nama
                            <svg class="w-4 h-4 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m8 15 4 4 4-4m0-6-4-4-4 4" />
                            </svg>
                        </span>
                    </th>
                    <th>
                        <span class="flex items-center">
                            Email
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
            <tbody>
                @foreach ($mahasiswa as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <button id="dropdownMenuIconHorizontalButton"
                                data-dropdown-toggle="dropdownDotsHorizontal-{{ $item->id }} "
                                class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 16 3">
                                    <path
                                        d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z" />
                                </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdownDotsHorizontal-{{ $item->id }} "
                                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                    <li>
                                        <a href="#" id="readProductButton-{{ $item->id }} }}"
                                            data-modal-target="readProductModal-{{ $item->id }}"
                                            data-modal-toggle="readProductModal-{{ $item->id }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            Lihat Detail
                                        </a>
                                    </li>
                                </ul>

                            </div>

                            <!-- Main modal -->
                            <div id="readProductModal-{{ $item->id }}" tabindex="-1" aria-hidden="true"
                                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
                                <div class="relative p-4 w-full max-w-xl h-full md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                        <!-- Modal header -->
                                        <div
                                            class="flex justify-between mb-4 border-b border-gray-200 rounded-t sm:mb-5">
                                            <div class="text-lg text-gray-900 md:text-xl dark:text-white">
                                                <h3 class="font-semibold ">
                                                    {{ $item->name }}
                                                </h3>
                                                <p class="font-bold">
                                                    {{ $item->nim }}
                                                </p>
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 inline-flex dark:hover:bg-gray-600 dark:hover:text-white"
                                                    data-modal-toggle="readProductModal-{{ $item->id }}">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>
                                        </div>
                                        <dl>
                                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                Email Mahasiswa</dt>
                                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                {{ $item->email }}</dd>
                                            <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                Email Verifikasi</dt>
                                            <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                {{ $item->email_verified_at->format('d M y - H:i:s') }}</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> --}}

        <div class="flex flex-col">
            <div class="overflow-x-auto min-h-fit ">
                <div class="min-w-full inline-block align-middle">
                    <div
                        data-hs-datatable='{
        "pageLength": 10,
        "pagingOptions": {
          "pageBtnClasses": "min-w-[40px] flex justify-center items-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 py-2.5 text-sm rounded-full disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:focus:bg-neutral-700 dark:hover:bg-neutral-700"
        },
        "language": {
          "zeroRecords": "<div class=\"py-10 px-5 flex flex-col justify-center items-center text-center\"><svg class=\"shrink-0 size-6 text-gray-500 dark:text-neutral-500\" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><circle cx=\"11\" cy=\"11\" r=\"8\"/><path d=\"m21 21-4.3-4.3\"/></svg><div class=\"max-w-sm mx-auto\"><p class=\"mt-2 text-sm text-gray-600 dark:text-neutral-400\">No search results</p></div></div>"
        }
      }'>
                        <div class="py-3">
                            <div class="relative max-w-xs">
                                <label for="hs-table-input-search" class="sr-only">Search</label>
                                <input type="text" name="hs-table-search" id="hs-table-input-search"
                                    class="py-2 px-3 ps-9 block w-full border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
                                    placeholder="Search for items" data-hs-datatable-search="">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-3">
                                    <svg class="size-4 text-gray-400 dark:text-neutral-500"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.3-4.3"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden min-h-fit ">
                            <table class="min-w-full">
                                <thead class="border-y border-gray-200 dark:border-neutral-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-1 group text-center font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md cursor-pointer hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                No
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-1 group text-center font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md cursor-pointer hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Nama
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-1 group text-center font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md cursor-pointer hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                NIM
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-1 group text-center font-normal focus:outline-none">
                                            <div
                                                class="py-1 px-2.5 inline-flex items-center border border-transparent text-sm text-gray-500 rounded-md cursor-pointer hover:border-gray-200 dark:text-neutral-500 dark:hover:border-neutral-700">
                                                Email
                                                <svg class="size-3.5 ms-1 -me-0.5 text-gray-400 dark:text-neutral-500"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        class="hs-datatable-ordering-desc:text-blue-600 dark:hs-datatable-ordering-desc:text-blue-500"
                                                        d="m7 15 5 5 5-5"></path>
                                                    <path
                                                        class="hs-datatable-ordering-asc:text-blue-600 dark:hs-datatable-ordering-asc:text-blue-500"
                                                        d="m7 9 5-5 5 5"></path>
                                                </svg>
                                            </div>
                                        </th>

                                        <th scope="col"
                                            class="py-2 px-3 text-center font-normal text-sm text-gray-500 --exclude-from-ordering dark:text-neutral-500">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($mahasiswa as $item)
                                        <tr>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-center font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $loop->iteration }}</td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-center font-medium text-gray-800 dark:text-neutral-200">
                                                {{ $item->nim }}</td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                {{ $item->name }}</td>
                                            <td
                                                class="p-3 whitespace-nowrap text-sm text-center text-gray-800 dark:text-neutral-200">
                                                {{ $item->email }}</td>
                                            <td class="p-3 whitespace-nowrap text-sm text-center font-medium">
                                                <div
                                                    class="hs-dropdown [--placement:bottom-right] relative inline-flex">
                                                    <button id="hs-dropdown-custom-icon-trigger" type="button"
                                                        class="hs-dropdown-toggle flex justify-center items-center size-9 text-sm text-center font-semibold rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800"
                                                        aria-haspopup="menu" aria-expanded="false"
                                                        aria-label="Dropdown">
                                                        <svg class="flex-none size-4 text-gray-600 dark:text-neutral-500"
                                                            xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round">
                                                            <circle cx="12" cy="12" r="1" />
                                                            <circle cx="12" cy="5" r="1" />
                                                            <circle cx="12" cy="19" r="1" />
                                                        </svg>
                                                    </button>

                                                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-fit bg-white shadow-md rounded-lg mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 z-20"
                                                        role="menu" aria-orientation="vertical"
                                                        aria-labelledby="hs-dropdown-custom-icon-trigger">
                                                        <div class="p-1 space-y-0.5">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-center text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                                                                href="#" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-basic-modal-{{ $item->id }}" data-hs-overlay="#hs-basic-modal-{{ $item->id }}">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="lucide lucide-text shrink-0 size-4">
                                                                    <path d="M17 6.1H3" />
                                                                    <path d="M21 12.1H3" />
                                                                    <path d="M15.1 18H3" />
                                                                </svg>
                                                                Lihat Detail
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div id="hs-basic-modal-{{ $item->id }}"
                                                        class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none"
                                                        role="dialog" tabindex="-1"
                                                        aria-labelledby="hs-basic-modal-label-{{ $item->id }} }}">
                                                        <div
                                                            class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                                            <div
                                                                class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto dark:bg-neutral-800 dark:border-neutral-700 dark:shadow-neutral-700/70">
                                                                <div
                                                                    class="flex justify-between items-center py-3 px-4 border-b dark:border-neutral-700">
                                                                    <div class="flex flex-col justify-center items-start w-full">
                                                                        <h3 id="hs-basic-modal-label-{{ $item->id }} }}"
                                                                            class="font-bold text-gray-800 dark:text-white">
                                                                            {{ $item->name }}
                                                                        </h3>
                                                                        <p>
                                                                            {{ $item->nim }}
                                                                        </p>
                                                                    </div>
                                                                    <button type="button"
                                                                        class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                                                                        aria-label="Close"
                                                                        data-hs-overlay="#hs-basic-modal-{{ $item->id }}">
                                                                        <span class="sr-only">Close</span>
                                                                        <svg class="shrink-0 size-4"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            stroke="currentColor" stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                            <path d="M18 6 6 18"></path>
                                                                            <path d="m6 6 12 12"></path>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 h-fit overflow-y-hidden text-start">
                                                                    <dl>
                                                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                                            Email Mahasiswa</dt>
                                                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                                            {{ $item->email }}</dd>
                                                                        <dt class="mb-2 font-semibold leading-none text-gray-900 dark:text-white">
                                                                            Email Verifikasi</dt>
                                                                        <dd class="mb-4 font-light text-gray-500 sm:mb-5 dark:text-gray-400">
                                                                            {{ $item->email_verified_at->format('d M y - H:i:s') }}</dd>
                                                                    </dl>
                                                                </div>
                                                                <div
                                                                    class="flex justify-end items-center gap-x-2 py-3 px-4 border-t dark:border-neutral-700">
                                                                    <button type="button"
                                                                        class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                                                        data-hs-overlay="#hs-basic-modal-{{ $item->id }}">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="py-1 px-4 hidden" data-hs-datatable-paging="">
                            <nav class="flex items-center space-x-1">
                                <button type="button"
                                    class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                    data-hs-datatable-paging-prev="">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <div class="flex items-center space-x-1 [&>.active]:bg-gray-100 dark:[&>.active]:bg-neutral-700"
                                    data-hs-datatable-paging-pages=""></div>
                                <button type="button"
                                    class="p-2.5 min-w-[40px] inline-flex justify-center items-center gap-x-2 text-sm rounded-full text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                                    data-hs-datatable-paging-next="">
                                    <span class="sr-only">Next</span>
                                    <span aria-hidden="true">»</span>
                                </button>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
