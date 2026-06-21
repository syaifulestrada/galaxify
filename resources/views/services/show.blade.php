<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">
        <div class="w-full max-w-6xl">

            {{-- Tombol kembali --}}
            <a href="{{ route('services.index') }}"
                class="inline-flex items-center gap-2 mb-8 text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">
                Back
            </a>

            {{-- Card utama --}}
            <div
                class="bg-neutral-primary-soft border border-default rounded-base p-8 dark:bg-neutral-900/60 dark:border-neutral-800">

                {{-- Badge --}}
                <span
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full text-xs text-body border border-default bg-neutral-secondary-soft mb-6">
                    <x-filament::icon :icon="'heroicon-o-' . $service->icon" class="w-4 h-4 text-[#fd9a00]" />
                    {{ $service->title }}
                </span>

                {{-- Icon --}}
                <div
                    class="w-14 h-14 rounded-base border border-default bg-neutral-secondary-soft flex items-center justify-center mb-6 dark:bg-neutral-800 dark:border-neutral-700">
                    <x-filament::icon :icon="'heroicon-o-' . $service->icon" class="w-7 h-7 text-[#fd9a00]" />
                </div>

                {{-- Title --}}
                <h1 class="text-3xl font-semibold text-heading dark:text-gray-50 mb-4">
                    {{ $service->title }}
                </h1>

                <hr class="border-default dark:border-neutral-700 mb-6" />

                {{-- Content --}}
                <p class="text-body whitespace-pre-line text-[15px] leading-relaxed dark:text-gray-300">
                    {{ $service->content }}
                </p>

            </div>

        </div>
    </main>
</x-layouts.app>
