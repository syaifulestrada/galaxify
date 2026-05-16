<div>
    <div class="min-h-screen flex flex-col w-full items-center justify-start py-12 px-6">
        <div class="w-full max-w-6xl">

            {{-- back button --}}
            <a href="{{ route('posts.index') }}"
                class="inline-flex items-center gap-2 mb-8 text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">
                Back
            </a>

            <div
                class="bg-neutral-primary-soft border border-default rounded-base dark:bg-neutral-900/60 dark:border-neutral-800 overflow-hidden">

                {{-- cover --}}
                <div class="w-full aspect-video overflow-hidden">
                    <img src="{{ asset($post->cover) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
                </div>

                <div class="p-8">

                    {{-- categories --}}
                    <div class="flex gap-2 flex-wrap mb-4">
                        @foreach ($post->categories as $category)
                            <span
                                class="text-xs font-medium px-2.5 py-0.5 rounded-full border border-default text-body dark:text-neutral-400 dark:border-neutral-700">
                                {{ $category->name }}
                            </span>
                        @endforeach
                    </div>

                    {{-- title --}}
                    <h1 class="text-3xl font-semibold text-heading dark:text-gray-50 mb-4">
                        {{ $post->title }}
                    </h1>

                    {{-- author + date --}}
                    <div class="flex items-center gap-3 mb-8">
                        <img class="w-10 h-10 rounded-full object-cover shrink-0"
                            src="{{ asset($post->user->avatar_url) }}" alt="{{ $post->user->name }}">
                        <div>
                            <p class="text-sm font-medium text-heading dark:text-gray-300">{{ $post->user->name }}</p>
                            <p class="text-xs text-body dark:text-neutral-500">{{ $post->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>

                    <hr class="border-default dark:border-neutral-700 mb-8" />

                    {{-- content --}}
                    <div
                        class="prose prose-neutral dark:prose-invert max-w-none text-body dark:text-neutral-300 leading-relaxed">
                        {!! nl2br(e($post->content)) !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
