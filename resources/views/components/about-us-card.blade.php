<div class="w-full max-w-6xl">

    <div
        class="bg-neutral-primary-soft border border-default rounded-base p-8 dark:bg-neutral-900/60 dark:border-neutral-800">

        <div class="inline-flex items-center gap-4 mb-4">
            {{-- Icons --}}
            @if (isset($icon))
                <div
                    class="flex items-center w-14 h-14 rounded-base border border-default bg-neutral-secondary-soft justify-center dark:bg-neutral-800 dark:border-neutral-700">
                    {{ $icon }}
                </div>
            @endif
            {{-- Title --}}
            @if (isset($title))
                <h1 class="text-3xl font-semibold text-heading dark:text-gray-50">
                    {{ $title }}
                </h1>
            @endif
        </div>

        <hr class="border-default dark:border-neutral-700" />

        {{-- Content --}}
        @if (isset($content))
            <p class="text-body whitespace-pre-line text-[15px] leading-relaxed dark:text-gray-300">
                {{ $content }}
            </p>
        @endif

    </div>

</div>
