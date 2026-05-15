@props([
    'type' => 'text',
    'name' => 'name',
    'id' => 'name',
])

<input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}"
    class="w-full bg-gray-50 dark:bg-neutral-900 border border-gray-300 dark:border-neutral-700 rounded px-3 py-2 text-gray-900 dark:text-gray-100 placeholder:text-gray-400 dark:placeholder:text-gray-500 focus:outline-none focus:ring-1 focus:ring-amber-500 dark:focus:ring-amber-500 focus:border-amber-500 dark:focus:border-amber-500 ring-amber-500">
