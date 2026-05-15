@props([
    'for' => 'name',
    'text' => '',
])

<label for="{{ $for }}" class="font-semibold text-gray-900 dark:text-gray-100">{{ $slot }}</label>
