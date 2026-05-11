@props([
    'link' => '#',
])

<div
    class="flex flex-col h-full bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs dark:bg-neutral-900/60 dark:border-neutral-800">
    @if (isset($cover))
        <div>
            {{ $cover }}
        </div>
    @endif

    @if (isset($title))
        <div>
            <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading dark:text-gray-50">
                {{ $title }}</h5>
        </div>
    @endif

    @if (isset($content))
        <p class="mb-6 text-body dark:text-gray-300">{{ $content }}</p>
    @endif

    <div class="mt-auto">
        <a href="{{ $link }}"
            class="inline-flex items-center text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-gray-200 dark:hover:bg-neutral-800 dark:hover:text-gray-50 dark:focus:ring-amber-500/30">
            Read more
            <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 12H5m14 0-4 4m4-4-4-4" />
            </svg>
        </a>
    </div>

</div>
