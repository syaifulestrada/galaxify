<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">

        <div class="mb-5 flex justify-start items-start w-full max-w-6xl">
            <a href="{{ route('home') }}"
                class="text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">
                Back
            </a>
        </div>

        <div class="space-y-10">
            <x-about-us-card>
                <x-slot:icon>
                    <x-filament::icon :icon="'heroicon-o-building-office'" class="w-12 h-12 text-[#fd9a00]" />
                </x-slot:icon>
                <x-slot:title>
                    About Us
                </x-slot:title>
                <x-slot:content>
                    {{ $aboutUs->about }}
                </x-slot:content>
            </x-about-us-card>

            <x-about-us-card>
                <x-slot:icon>
                    <x-filament::icon :icon="'heroicon-o-eye'" class="w-12 h-12 text-[#fd9a00]" />
                </x-slot:icon>
                <x-slot:title>
                    Vision
                </x-slot:title>
                <x-slot:content>
                    {{ $aboutUs->vision }}
                </x-slot:content>
            </x-about-us-card>

            <x-about-us-card>
                <x-slot:icon>
                    <x-filament::icon :icon="'heroicon-o-rocket-launch'" class="w-12 h-12 text-[#fd9a00]" />
                </x-slot:icon>
                <x-slot:title>
                    Mission
                </x-slot:title>
                <x-slot:content>
                    {{ $aboutUs->mission }}
                </x-slot:content>
            </x-about-us-card>
        </div>

    </main>
</x-layouts.app>
