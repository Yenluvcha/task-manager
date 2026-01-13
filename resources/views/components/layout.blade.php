<!DOCTYPE html>
<html lang="en" class="h-full bg-zinc-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <script>
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        } 
    </script>
</head>

<body class="h-full font-inter">

    <div class="min-h-full dark:bg-zinc-950">
        <nav class="bg-zinc-50 dark:bg-black">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex items-center justify-between h-16">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <a href="/">
                                <img class="rounded-md shadow-xs size-8"
                                    src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Your Company">
                            </a>
                        </div>
                        <div class="hidden md:block">
                            <div class="flex items-baseline ml-10 space-x-4">
                                <x-nav-link href="/dashboard" :active="request()->is('dashboard')">Dashboard
                                </x-nav-link>
                                <x-nav-link href="/tasks" :active="request()->is('tasks')">Tasks</x-nav-link>
                            </div>
                        </div>
                    </div>

                    <div class="hidden md:block">
                        <div class="flex items-center ml-4 md:ml-6 gap-x-2">

                            <p class="text-sm me-2 dark:text-white">Welcome, <b>{{ auth()->user()->name }}</b></p>

                            <button id="theme-toggle" type="button"
                                class="p-2 text-sm font-medium rounded-md text-zinc-900 dark:text-zinc-300 hover:bg-zinc-200 dark:hover:bg-zinc-800 dark:hover:text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="hidden size-5" id="theme-toggle-light-icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" class="hidden size-5" id="theme-toggle-dark-icon">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                                </svg>
                            </button>

                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit"
                                    class="px-3 py-2 text-sm font-medium rounded-md cursor-pointer text-zinc-800 dark:text-zinc-300 hover:bg-red-500 hover:text-white">Sign
                                    out</button>
                                {{-- <button type="submit"
                                    class="px-3 py-2 text-sm font-medium text-white bg-red-600 rounded-md cursor-pointer hover:bg-red-500 dark:hover:text-white">Sign
                                    out</button> --}}
                            </form>

                        </div>
                    </div>
                    <div class="flex -mr-2 gap-x-2 md:hidden">

                        <button id="mobile-theme-toggle" type="button"
                            class="p-2 text-sm font-medium rounded-md text-zinc-900 dark:text-zinc-300 hover:bg-zinc-200 dark:hover:bg-zinc-800 dark:hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="hidden size-5" id="mobile-theme-toggle-light-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="hidden size-5" id="mobile-theme-toggle-dark-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                            </svg>
                        </button>

                        <!-- Mobile menu button -->
                        <button type="button"
                            class="relative inline-flex items-center justify-center p-2 rounded-md text-zinc-800 dark:bg-zinc-950 bg-zinc-100 dark:text-zinc-300 hover:bg-zinc-100 dark:hover:bg-zinc-900 hover:text-black dark:hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-zinc-800 focus:outline-hidden"
                            aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                            <span class="absolute -inset-0.5"></span>
                            <span class="sr-only">Open main menu</span>
                            <!-- Menu open: "hidden", Menu closed: "block" -->

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="size-5" id="mobile-menu-toggle-open-icon">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>

                            <!-- Menu open: "block", Menu closed: "hidden" -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" class="hidden size-5" id="mobile-menu-toggle-close-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>

                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="hidden md:hidden" id="mobile-menu">
                <div class="px-2 py-3 space-y-3 sm:px-3">
                    <x-nav-link-mobile href="/dashboard" :active="request()->is('dashboard')">Dashboard
                    </x-nav-link-mobile>
                    <x-nav-link-mobile href="/tasks" :active="request()->is('tasks')">Tasks</x-nav-link-mobile>
                </div>
                <div class="px-2 py-3 space-y-3 border-t border-zinc-300 dark:border-zinc-700 sm:px-3">
                    <p class="px-3 text-sm dark:text-white">Welcome, <b>{{ auth()->user()->name }}</b></p>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit"
                            class="block w-full px-3 py-2 text-sm font-medium rounded-md cursor-pointer text-start text-zinc-800 dark:text-zinc-300 hover:bg-red-500 hover:text-white">Sign
                            out</button>
                    </form>

                </div>
            </div>
        </nav>


        <main>
            <div class="px-4 pt-6 pb-6 mx-auto max-w-7xl sm:px-6 lg:px-8 dark:text-white">
                {{ $slot }}
            </div>
        </main>

    </div>

    <script src="{{ Vite::asset('resources/js/layout.js') }}"></script>

</body>

</html>