<nav class="bg-neutral-primary sticky w-full z-20 top-0 inset-s-0 border-b border-default">
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
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14" />
                </svg>
            </button>
        </div>
        {{ $menuItems ?? '' }}
    </div>
</nav>
