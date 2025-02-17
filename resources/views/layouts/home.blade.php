<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    @include('partials.metadata')
    @include('partials.styles')

</head>

<body class="font-primary flex flex-col min-h-screen antialiased dark:bg-black dark:text-white/50">

    @include('partials.content')
    @include('partials.scripts')

</body>

</html>
