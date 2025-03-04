@props(['hrefSystem', 'hrefAccount', 'title', 'icon', 'active' => false])

<li>
    <button type="button"
        class="flex items-center p-2 w-full text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary dark:hover:bg-gray-700 group {{ $active ? 'bg-primary text-white' : '' }}"
        aria-controls="dropdown-{{ Str::slug($title) }}" data-collapse-toggle="dropdown-{{ Str::slug($title) }}">

        {!! $icon !!}
        <span class="flex-1 ml-3 text-left whitespace-nowrap group-hover:text-white">{{ $title }}</span>

        <svg aria-hidden="true" class="w-6 h-6 ml-3 group-hover:text-white" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </button>

    <ul id="dropdown-{{ Str::slug($title) }}" class="hidden py-2 space-y-2">
        {{-- <li>
            <a href="{{ $hrefSystem }}"
                class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group hover:bg-primary hover:text-white  dark:text-white dark:hover:bg-gray-700 ">
                Sistem
            </a>
        </li> --}}
        <li>
            <a href="{{ $hrefAccount }}"
                class="flex items-center p-2 pl-11 w-full text-base font-medium rounded-lg transition duration-75 group hover:bg-primary hover:text-white dark:text-white dark:hover:bg-gray-700">
                Akun
            </a>
        </li>
    </ul>
</li>
