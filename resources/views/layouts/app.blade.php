<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-primary antialiased">
    <div class="min-h-screen bg-body dark:bg-gray-900">

        {{-- Navigation --}}
        @include('layouts.navigation')

        <div class="flex">
            {{-- Sidebar --}}
            <aside
            class="w-64 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 md:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
            aria-label="Sidenav" id="drawer-navigation">
            @include('layouts.sidebar') <!-- Assuming you have a sidebar view to include -->
        </aside>


        <!-- Main Content Area -->
            <div class="flex-1">
                <!-- Page Heading -->
                @isset($header)
                    <header class="py-12 -mt-36">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-16">
                            <div class="bg-transparent dark:bg-gray-800 overflow-hidden sm:rounded-lg">
                                {{ $header }}
                            </div>
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
