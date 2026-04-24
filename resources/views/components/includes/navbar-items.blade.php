@props([
    'route' => 'home',
    'navItemName' => '',
])

@php
    $navActive = fn($route) => request()->routeIs($route)
        ? 'bg-[#fd9a00] text-white md:bg-transparent md:text-amber-500 font-semibold'
        : 'hover:bg-[#fd9a00] hover:text-white md:hover:bg-transparent md:hover:text-amber-900';
@endphp

<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul
        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-neutral-200 rounded-base bg-neutral-secondary-strong rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary space-y-2 md:space-y-0 md:space-x-8 ">
        <li>
            <a href="{{ route($route) }}" class="block py-2 px-3 rounded text-black  md:p-0  {{ $navActive($route) }}">
                {{ $navItemName }}
            </a>
        </li>

    </ul>
</div>
