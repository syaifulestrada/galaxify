<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">
        <div class="w-full max-w-6xl">

            <a href="{{ route('members') }}"
                class="inline-flex items-center gap-2 mb-8 text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold transition-colors">
                Back
            </a>

            <div
                class="bg-neutral-primary-soft border border-default rounded-base p-8 dark:bg-neutral-900/60 dark:border-neutral-800">

                {{-- Header: foto + nama + role --}}
                <div class="flex flex-col sm:flex-row items-center gap-6 mb-8">
                    <img class="w-36 h-36 object-cover rounded-full ring-4 ring-amber-400/30 shrink-0"
                        src="{{ asset($member->cover) }}" alt="Photo of {{ $member->name }}" />

                    {{-- Tambah self-start supaya teks rata atas di mobile --}}
                    <div class="self-start sm:self-center">
                        <h1 class="text-3xl font-semibold text-heading dark:text-gray-50 mb-2">
                            {{ $member->name }}
                        </h1>
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            {{ implode(', ', $member->role) }}
                        </p>
                    </div>
                </div>

                <hr class="border-default dark:border-neutral-700 mb-6" />

                <p class="text-body whitespace-pre-line text-[15px] leading-relaxed dark:text-gray-300">
                    {{ $member->description }}
                </p>

            </div>

        </div>
    </main>
</x-layouts.app>
