@extends('layouts.home')

@section('content')
    <div id="content-report" class="lg:-mt-14">
        <div class="max-w-[50rem]  flex flex-col mx-auto size-full relative ">
            <div aria-hidden="true" class="flex absolute -top-96 start-1/2 transform -translate-x-1/2">
                <div
                    class="bg-gradient-to-r from-violet-300/50 to-purple-100 blur-3xl w-[25rem] h-[44rem] rotate-[-60deg] transform -translate-x-[10rem] dark:from-violet-900/50 dark:to-purple-900">
                </div>
                <div
                    class="bg-gradient-to-tl from-blue-50 via-blue-100 to-blue-50 blur-3xl w-[90rem] h-[50rem] rounded-fulls origin-top-left -rotate-12 -translate-x-[15rem] dark:from-indigo-900/70 dark:via-indigo-900/70 dark:to-blue-900/70">
                </div>
            </div>

            <div id="content" class="relative z-10 flex items-center justify-center my-28">
                <div class="text-center py-10 px-4 sm:px-6 lg:px-8">
                    <h1 class="block text-7xl font-bold text-gray-800 sm:text-9xl dark:text-white">404</h1>
                    <p class="mt-3 text-gray-600 dark:text-neutral-400">Oops, something went wrong.</p>
                    <p class="text-gray-600 dark:text-neutral-400">Sorry, we couldn't find your page.</p>
                    <div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
                        <a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                            href="/">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6" />
                            </svg>
                            Back to home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
