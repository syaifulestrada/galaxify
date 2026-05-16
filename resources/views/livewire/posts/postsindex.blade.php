<div>
    <main class="flex flex-col justify-center items-center w-full max-w-7xl mx-auto">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch px-10 py-10 w-full">
            @forelse ($posts as $post)
                <div wire:key="{{ $post->id }}"
                    class="bg-neutral-primary-soft flex flex-col p-6 border border-default rounded-base shadow-xs dark:bg-neutral-900/60 dark:border-neutral-800 hover:border-amber-500 duration-300">

                    {{-- cover --}}
                    <div class="w-full aspect-video overflow-hidden rounded-base">
                        <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                    </div>

                    {{-- title --}}
                    <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading dark:text-gray-300">
                        {{ $post->title }}
                    </h5>

                    {{-- categories  --}}
                    <div class="flex gap-1 flex-wrap mt-auto pt-4">
                        @foreach ($post->categories as $category)
                            <span
                                class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-neutral-primary-soft text-body border border-default dark:bg-neutral-900/60 dark:text-neutral-400 dark:border-neutral-700">
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>

                    <div class="flex flex-wrap mt-auto pt-4">
                        <div class=" text-body dark:text-gray-300">
                            {{ Str::words($post->content, 20) }}
                        </div>
                    </div>

                </div>
            @empty
                <div class="col-span-full text-center text-body">
                    No posts found.
                </div>
            @endforelse

            <div class="col-span-full">
                {{ $posts->links() }}
            </div>

        </div>
    </main>
</div>
