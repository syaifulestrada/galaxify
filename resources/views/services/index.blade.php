<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full px-10 py-10">
            @foreach ($services as $service)
                <x-service-card link="#">
                    <x-slot:icon>
                        <x-filament::icon :icon="'heroicon-o-' . $service->icon" class="w-10 h-10 mb-4 text-[#fd9a00]" />
                    </x-slot:icon>
                    <x-slot:title>
                        {{ $service->title }}
                    </x-slot:title>
                    <x-slot:content>
                        {{ $service->content }}
                    </x-slot:content>
                </x-service-card>
            @endforeach
        </div>
    </main>
</x-layouts.app>
