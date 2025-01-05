@props(['href', 'title', 'icon', 'active' => false])

<li>
    <a href="{{ $href }}"
        class="flex items-center p-2 text-base font-medium text-third rounded-lg dark:text-white hover:bg-primary dark:hover:bg-gray-700 group {{ $active ? 'bg-primary text-white' : '' }}">
        {!! $icon !!}
        <span class="ml-3 group-hover:text-white">{{ $title }}</span>
    </a>
</li>
