<nav
    class="bg-neutral-primary sticky w-full z-20 top-0 inset-s-0 border-b border-default dark:bg-neutral-900 dark:border-neutral-800">
    <div class="max-w-7xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('logo/galaxy-logo.png') }}" class="h-7" alt="Flowbite Logo">
            <span
                class="self-center text-xl text-gray-700 dark:text-gray-100 font-semibold whitespace-nowrap">{{ config('app.name') }}</span>
        </a>
        <div class="flex md:order-2 space-x-3 rtl:space-x-reverse">
            <button id="theme-toggle" type="button"
                class="inline-flex items-center justify-center w-10 h-10 rounded-base border border-neutral-200 bg-neutral-primary text-body hover:bg-neutral-secondary-soft hover:text-gray-700 dark:bg-neutral-900 dark:border-neutral-800 dark:text-gray-200 dark:hover:bg-neutral-800"
                aria-label="Toggle dark mode">
                <span class="sr-only">Toggle theme</span>
                <svg id="theme-toggle-icon-sun" class="hidden w-5 h-5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="M12 4V2m0 20v-2m8-8h2M2 12h2m13.657-5.657L19.07 4.93M4.93 19.07l1.414-1.414m0-11.314L4.93 4.93m14.14 14.14-1.414-1.414M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0Z" />
                </svg>
                <svg id="theme-toggle-icon-moon" class="hidden w-5 h-5" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 3a8.5 8.5 0 1 0 8.2 11.1A7 7 0 0 1 12 3Z" />
                </svg>
            </button>
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
