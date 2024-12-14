<x-app-layout>
    <x-slot name="header">
        <div class="p-0 ms-10 text-purple font-bold dark:text-gray-100">
            {{ __('Hello, ' . (Auth::user()->name)) }}
        </div>
        <div class="p-0 ms-10 text-navy font-bold text-2xl">
            {{ __('Welcome to SPK Pemilihan Dosen Pembimbing!') }}
        </div>
    </x-slot>


</x-app-layout>
