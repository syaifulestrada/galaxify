<div>
    <main class="flex flex-col justify-center items-center w-full max-w-7xl mx-auto">
        <div class="flex flex-col gap-6 px-4 sm:px-10 py-10 w-full">

            {{-- search + filter toggle --}}
            @if ($posts->isNotEmpty())
                <div class="flex gap-2 items-center">
                    <div class="flex-1">
                        <x-input name="search" id="search" wire:model.live.debounce.300ms="search"
                            placeholder="Search posts..." />
                    </div>

                    <button wire:click="$toggle('showFilter')"
                        class="flex items-center gap-2 text-sm px-4 py-2 border border-default rounded-base duration-200 shrink-0
                        {{ $showFilter ? 'bg-amber-500 text-white border-amber-500' : 'text-body dark:text-neutral-400 hover:bg-neutral-200 dark:hover:bg-neutral-800' }}">
                        <x-filament::icon :icon="'heroicon-o-funnel'" class="w-6 h-6" />
                        Filter
                        @if (count($categoryIds) > 0)
                            <span
                                class="bg-white text-amber-500 text-xs font-bold rounded-full w-4 h-4 flex items-center justify-center">
                                {{ count($categoryIds) }}
                            </span>
                        @endif
                    </button>
                </div>
            @endif

            {{-- collapsible filter --}}
            <div x-show="$wire.showFilter" x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2"
                class="bg-neutral-primary-soft border border-default rounded-base shadow-xs dark:bg-neutral-900/60 dark:border-neutral-800 p-4">
                <div class="flex items-center justify-between mb-3">
                    <h6 class="text-sm font-semibold text-heading dark:text-gray-300">Categories</h6>
                    @if (count($categoryIds) > 0)
                        <button wire:click="clearCategories" class="text-xs text-amber-500 hover:underline">
                            Clear all
                        </button>
                    @endif
                </div>

                <div class="flex flex-wrap gap-2">
                    @foreach ($categories as $category)
                        <button wire:click="toggleCategory({{ $category->id }})"
                            class="text-xs font-medium px-3 py-1.5 rounded-full border duration-200
                                    {{ in_array($category->id, $categoryIds)
                                        ? 'bg-amber-500 text-white border-amber-500'
                                        : 'border-default text-body dark:text-neutral-400 hover:bg-neutral-200 dark:hover:bg-neutral-800' }}">
                            {{ $category->name }}
                        </button>
                    @endforeach
                </div>
            </div>

            {{-- posts grid --}}
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-stretch">
                @forelse ($posts as $post)
                    <a href="{{ route('posts.show', $post->slug) }}" wire:navigate>
                        <x-post-card wire:key="{{ $post->id }}">
                            <x-slot:cover>
                                <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}"
                                    class="w-full h-full object-cover">
                            </x-slot:cover>
                            <x-slot:title>
                                {{ $post->title }}
                            </x-slot:title>
                            <x-slot:tags>
                                @foreach ($post->categories as $category)
                                    <span
                                        class="text-xs font-medium px-2.5 py-0.5 rounded-full bg-neutral-primary-soft text-body border border-default dark:bg-neutral-900/60 dark:text-neutral-400 dark:border-neutral-700">
                                        {{ $category->name }}
                                    </span>
                                @endforeach
                            </x-slot:tags>
                            <x-slot:content>
                                {{ Str::words($post->content, 20) }}
                            </x-slot:content>
                        </x-post-card>
                    </a>
                @empty
                    <div class="col-span-full text-center">
                        <div class="font-semibold">
                            No posts found.
                        </div>
                    </div>
                @endforelse
            </div>

            <div>
                {{ $posts->links() }}
            </div>

        </div>
    </main>
</div>
