<div
    {{ $attributes->merge(['class' => 'bg-neutral-primary-soft flex flex-col p-6 border border-default rounded-base shadow-xs dark:bg-neutral-900/60 dark:border-neutral-800 hover:border-amber-500 duration-300']) }}>

    {{-- cover --}}
    @if (isset($cover))
        <div class="w-full aspect-video overflow-hidden rounded-base">
            {{ $cover }}
        </div>
    @endif

    {{-- title --}}
    @if (isset($title))
        <h5 class="mt-6 my-auto text-2xl font-semibold tracking-tight text-heading dark:text-gray-300">
            {{ $title }}
        </h5>
    @endif

    {{-- categories --}}
    @if (isset($tags))
        <div class="flex gap-1 flex-wrap mt-auto pt-4">
            {{ $tags }}
        </div>
    @endif

    @if (isset($content))
        <div class="mt-auto pt-4">
            <div class="text-body dark:text-gray-300">
                {{ $content }}
            </div>
        </div>
    @endif
</div>
