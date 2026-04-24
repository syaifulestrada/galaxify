@props([
    'route' => 'home',
    'subTitle' => null,
])

@php
    function navActive($route)
    {
        return request()->routeIs($route)
            ? 'bg-[#fd9a00] text-white md:bg-transparent md:text-gray-900 font-semibold'
            : 'hover:bg-[#fd9a00] hover:text-white md:hover:bg-transparent md:hover:text-gray-900';
    }
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> {{ config('app.name') }} {{ isset($subTitle) ? '| ' . $subTitle : '' }}
    </title>
    <link rel="icon" href="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-[Montserrat]">




    <nav class="bg-neutral-primary fixed w-full z-20 top-0 inset-s-0 border-b border-default">
        <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('logo/galaxy-logo.png') }}" class="h-7" alt="Flowbite Logo">
                <span
                    class="self-center text-xl text-gray-700 font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
            </a>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <button type="button"
                    class="text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">Contact
                    Us</button>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-gray-700 focus:outline-none focus:ring-2 focus:ring-neutral-tertiary"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                            d="M5 7h14M5 12h14M5 17h14" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-neutral-200 rounded-base bg-neutral-secondary-strong rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary space-y-2 md:space-y-0 md:space-x-8 ">
                    <li>
                        <a href="{{ route('home') }}"
                            class="block py-2 px-3 rounded text-black md:text-gray-700 md:p-0  {{ navActive('home') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}"
                            class="block py-2 px-3 rounded text-black md:text-gray-700 md:p-0 {{ navActive('about') }}">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-black md:text-gray-700 md:p-0 {{ navActive('#') }}">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-black md:text-gray-700 md:p-0 {{ navActive('#') }}">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 rounded text-black md:text-gray-700 md:p-0 {{ navActive('#') }}">
                            Blog
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</body>

</html>
