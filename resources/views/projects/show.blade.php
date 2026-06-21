<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">
        <div class="w-full max-w-6xl">

            {{-- Tombol kembali --}}
            <a href="{{ route('projects.index') }}"
                class="inline-flex items-center gap-2 mb-8 text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">
                Back
            </a>

            <div
                class="bg-neutral-primary-soft border border-default rounded-base p-8 dark:bg-neutral-900/60 dark:border-neutral-800">

                <h1 class="text-3xl font-semibold text-heading dark:text-gray-50 mb-6">
                    {{ $project->title }}
                </h1>

                <div class="mb-6">
                    <img src="{{ Storage::url($project->cover) }}" class="rounded ">
                </div>

                <hr class="border-default dark:border-neutral-700 mb-6" />

                <div class="grid w-full sm:grid-cols-1  lg:grid-cols-2 gap-x-2 gap-y-2 mb-6">
                    <div class="col-span-full">
                        <div class="text-body dark:text-neutral-100 font-semibold">Project Details</div>
                    </div>
                    <div
                        class="bg-neutral-primary-soft dark:bg-neutral-900/60 border border-default dark:border-neutral-800 rounded-base p-4 hover:border-amber-500 duration-200">
                        <div class="text-xs text-body dark:text-neutral-400 mb-1">Year</div>
                        <div class="font-semibold text-heading dark:text-gray-50 text-sm">
                            {{ $project->year ?? '-' }}
                        </div>
                    </div>
                    <div
                        class="bg-neutral-primary-soft dark:bg-neutral-900/60 border border-default dark:border-neutral-800 rounded-base p-4 hover:border-amber-500 duration-200">
                        <div class="text-xs text-body dark:text-neutral-400 mb-1">Category</div>
                        <div class="mt-2 flex flex-wrap gap-2">
                            @foreach ($project->categories as $category)
                                <span
                                    class="inline-flex items-center px-3 py-1.5 text-sm rounded-full border border-default
                                       dark:border-neutral-700 text-body dark:text-neutral-300
                                       bg-neutral-primary-soft dark:bg-neutral-900/60
                                       hover:border-amber-500 transition">
                                    {{ $category->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div
                        class="bg-neutral-primary-soft dark:bg-neutral-900/60 border border-default dark:border-neutral-800 rounded-base p-4 hover:border-amber-500 duration-200">
                        <div class="text-xs text-body dark:text-neutral-400 mb-1">Client</div>
                        <div class="font-semibold text-heading dark:text-gray-50 text-sm">
                            {{ $project->client ?? '-' }}
                        </div>
                    </div>
                    <div
                        class="bg-neutral-primary-soft dark:bg-neutral-900/60 border border-default dark:border-neutral-800 rounded-base p-4 hover:border-amber-500 duration-200">
                        <div class="text-xs text-body dark:text-neutral-400 mb-1">Duration</div>
                        <div class="font-semibold text-heading dark:text-gray-50 text-sm">
                            {{ $project->duration ?? '-' }}
                        </div>
                    </div>
                </div>

                <hr class="border-default dark:border-neutral-700 mb-6" />

                @if ($project->techStacks->isNotEmpty())
                    <div class="mb-8">
                        <h2
                            class="text-sm font-semibold text-body dark:text-neutral-400 uppercase tracking-widest mb-4">
                            Tech Stack
                        </h2>
                        <div class="flex flex-wrap gap-2">
                            @foreach ($project->techStacks ?? [] as $techStack)
                                <span
                                    class="px-3 py-1.5 text-sm rounded-full border border-default dark:border-neutral-700 text-body dark:text-neutral-300 bg-neutral-primary-soft dark:bg-neutral-900/60 hover:border-amber-500 duration-200">
                                    {{ $techStack->name }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endif

                <hr class="border-default dark:border-neutral-700" />

                <p class="text-body whitespace-pre-line text-[15px] leading-relaxed dark:text-gray-300">
                    {{ $project->content }}
                </p>

            </div>

        </div>
    </main>
</x-layouts.app>
