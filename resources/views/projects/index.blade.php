<x-layouts.app subTitle="Projects">

    <main class="min-h-screen flex flex-col  items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch px-10 py-10">
            @forelse ($projects as $project)
                <x-project-card link="#">
                    <x-slot:cover>
                        <img class="rounded-base" src="{{ asset($project->cover) }}" alt="Company Website" />
                    </x-slot:cover>

                    <x-slot:title>
                        {{ $project->title }}
                    </x-slot:title>

                    <x-slot:content>
                        {{ $project->content }}
                    </x-slot:content>
                </x-project-card>
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
