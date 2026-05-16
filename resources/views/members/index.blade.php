<x-layouts.app :subTitle="$subtitle">

    <main class="min-h-screen flex flex-col  items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch px-10 py-10">
            @forelse ($members as $member)
                <x-member-card link="{{ route('members.show', $member->id) }}">
                    <x-slot:profile>
                        <img class="rounded-base w-36" src="{{ asset($member->cover) }}" alt="" />
                    </x-slot:profile>
                    <x-slot:name>
                        {{ $member->name }}
                    </x-slot:name>
                    <x-slot:roles>
                        {{ implode(', ', $member->role) }}
                    </x-slot:roles>
                    <x-slot:content>
                        {{ Str::words($member->description, 20) }}
                    </x-slot:content>
                </x-member-card>
            @empty
                <div class="col-span-full text-center">
                    <div class="font-semibold">
                        No members available.
                    </div>
                </div>
            @endforelse
        </div>
    </main>

</x-layouts.app>
