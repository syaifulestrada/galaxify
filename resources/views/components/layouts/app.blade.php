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
    @filamentStyles
    @livewireStyles
    @vite('resources/css/app.css')
</head>

<script>
    (function () {
        try {
            var theme = localStorage.getItem('theme');
            if (theme === 'dark' || theme === 'light') {
                document.documentElement.classList.toggle('dark', theme === 'dark');
                return;
            }
            var prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.classList.toggle('dark', prefersDark);
        } catch (e) {
            // no-op
        }
    })();
</script>

<body class="font-[Montserrat] bg-white text-gray-900 dark:bg-neutral-950 dark:text-gray-100">



    <x-includes.navbar>
        <x-slot:menu-items>
            @if (request()->routeIs('home'))
                <x-includes.navbar-items :items="[
                    ['type' => 'route', 'route' => 'home', 'href' => route('home'), 'label' => 'Home'],
                    ['type' => 'url', 'href' => '#aboutUs', 'label' => 'About Us'],
                    ['type' => 'url', 'href' => '#services', 'label' => 'Services'],
                    ['type' => 'url', 'href' => '#projects', 'label' => 'Projects'],
                    ['type' => 'url', 'href' => '#member', 'label' => 'Member'],
                    ['type' => 'url', 'href' => '#contactUs', 'label' => 'Contact'],
                ]" />
            @else
                <x-includes.navbar-items route="home" navItemName="Home" />
            @endif
        </x-slot:menu-items>
    </x-includes.navbar>

    {{ $slot }}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @filamentScripts
    @livewireScripts
    @vite('resources/js/app.js')

</body>

</html>
