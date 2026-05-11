<x-layouts.app :subTitle="$subtitle">
    <main class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">
        <div class="w-full max-w-6xl">

            {{-- Tombol kembali --}}
            <a href="{{ route('projects') }}"
                class="inline-flex items-center gap-2 mb-8 text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">
                Back
            </a>

            <div
                class="bg-neutral-primary-soft border border-default rounded-base p-8 dark:bg-neutral-900/60 dark:border-neutral-800">

                <h1 class="text-3xl font-semibold text-heading dark:text-gray-50 mb-6">
                    {{ $projects->title }}
                </h1>

                <div class="mb-6">
                    <img src="{{ asset($projects->cover) }}" class="rounded">
                </div>

                <hr class="border-default dark:border-neutral-700 mb-6" />

                <div class="grid w-full sm:grid-cols-1  lg:grid-cols-2 gap-x-2 gap-y-2 mb-6">
                    <div class="col-span-full">
                        <div class="text-body dark:text-neutral-100 font-semibold">Project Details</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Year</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Category</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Client</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Duration</div>
                    </div>
                </div>


                <hr class="border-default dark:border-neutral-700 mb-6" />

                <div class="grid sm:grid-cols-1  lg:grid-cols-2 gap-x-2 gap-y-2 mb-6">
                    <div class="col-span-full">
                        <div class="text-body dark:text-neutral-100 font-semibold">Tech Stacks</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Year</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Category</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Client</div>
                    </div>
                    <div class="border border-default dark:border-neutral-700 rounded-sm p-3">
                        <div class="text-body text-sm dark:text-neutral-100">Duration</div>
                    </div>
                </div>

                <hr class="border-default dark:border-neutral-700" />

                <p class="text-body whitespace-pre-line text-[15px] leading-relaxed dark:text-gray-300">
                    {{ $projects->content }}
                </p>

            </div>

        </div>
    </main>
</x-layouts.app>
