<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 px-10 py-10">
            @forelse ($services as $service)
                <x-service-card link="{{ route('services.show', $service->slug) }}">
                    <x-slot:icon>
                        <x-filament::icon :icon="'heroicon-o-' . $service->icon" class="w-10 h-10 mb-4 text-[#fd9a00]" />
                    </x-slot:icon>
                    <x-slot:title>
                        {{ $service->title }}
                    </x-slot:title>
                    <x-slot:content>
                        {{ Str::words($service->content, 15) }}
                    </x-slot:content>
                </x-service-card>
            @empty
                <div class="col-span-full text-center">
                    <div class="font-semibold">
                        No services available.
                    </div>
                </div>
            @endforelse
        </div>
    </main>
</x-layouts.app>
