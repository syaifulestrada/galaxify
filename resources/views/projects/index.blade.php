<x-layouts.app :subTitle="$subtitle">

    <main class="min-h-screen flex flex-col  items-center justify-center">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 items-stretch px-10 py-10">
            @forelse ($projects as $project)
                <x-project-card link="{{ route('project.show', $project->slug) }}">
                    <x-slot:cover>
                        <img class="rounded-base" src="{{ Storage::url($project->cover) }}" alt="Company Website" />
                    </x-slot:cover>

                    <x-slot:title>
                        {{ $project->title }}
                    </x-slot:title>

                    <x-slot:content>
                        {{ Str::words($project->content, 20) }}
                    </x-slot:content>
                </x-project-card>
            @empty
                <div class="col-span-full text-center">
                    <div class="font-semibold">
                        No projects available.
                    </div>
                </div>
            @endforelse
        </div>
    </main>

</x-layouts.app>
