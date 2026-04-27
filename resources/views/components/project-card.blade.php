<div class="bg-neutral-primary-soft block max-w-sm p-6 border border-default rounded-base shadow-xs">
    @if (isset($cover))
        <div>
            {{ $cover }}
        </div>
    @endif

    @if (isset($title))
        <div>
            <h5 class="mt-6 mb-2 text-2xl font-semibold tracking-tight text-heading">{{ $title }}</h5>
        </div>
    @endif

    @if (isset($content))
        <p class="mb-6 text-body">{{ $content }}</p>
    @endif

</div>
