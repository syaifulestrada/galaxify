@props([
    'type' => 'button',
])

<button type="{{ $type }}"
    class="text-white px-3 py-2 bg-[#fd9a00] hover:bg-amber-600 rounded font-semibold">{{ $slot }}</button>
