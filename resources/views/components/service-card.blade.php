@props(['link' => null])

<div class="bg-neutral-primary-soft p-6 border border-default rounded-base shadow-xs dark:bg-neutral-900/60 dark:border-neutral-800">

    @if (isset($icon))
        <a href="{{ $link }}">
            {{ $icon }}
        </a>
    @endif

    @if (isset($title))
        <a href="{{ $link }}">
            <h5 class="mb-2 text-xl font-semibold tracking-tight text-heading dark:text-gray-50">{{ $title }}</h5>
        </a>
    @endif

    @if (isset($content))
        <p class="mb-6 text-sm text-body leading-relaxed dark:text-gray-300">
            {{ $content }}
        </p>
    @endif

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
