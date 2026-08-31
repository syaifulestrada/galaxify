@props([
    'route' => null,
    'navItemName' => null,
    'items' => null,
])

@php
    $items =
        $items ??
        (filled($route) && filled($navItemName)
            ? [['type' => 'route', 'route' => $route, 'label' => $navItemName]]
            : [['type' => 'route', 'route' => 'home', 'label' => 'Home']]);

    $itemClasses =
        'block py-2 px-3 rounded md:p-0 text-black dark:text-gray-100 hover:bg-[#fd9a00] hover:text-white md:hover:bg-transparent md:hover:text-amber-500 dark:hover:text-white md:dark:hover:text-amber-500';
@endphp

<div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul
        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-neutral-200 rounded-base bg-neutral-secondary-strong rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-neutral-primary space-y-2 md:space-y-0 md:space-x-8 dark:border-neutral-800 dark:bg-neutral-900">
        @foreach ($items as $item)
            @php
                $href = '#';
                $label = $item['label'] ?? '';

                $isActive = false;

                if (($item['type'] ?? null) === 'route') {
                    $routeName = $item['route'] ?? null;
                    if(Route::has($routeName . '.index')) {
                        $href = route($routeName . '.index');
                    } else if (Route::has($routeName)) {
                        $href = route($routeName);
                    }
                    $isActive = request()->routeIs($routeName) || request()->routeIs($routeName . '.*');
                } elseif (($item['type'] ?? null) === 'url') {
                    $href = $item['href'] ?? '#';
                }

                $activeClasses = $isActive
                    ? '  bg-amber-500 text-white
                         md:bg-transparent md:text-amber-500
                         dark:bg-amber-500 dark:text-white
                         md:dark:bg-transparent md:dark:text-amber-500
                         font-semibold'
                    : '';
            @endphp

            <li>
                <a href="{{ $href }}" class="{{ $itemClasses }} {{ $activeClasses }}">
                    {{ $label }}
                </a>
            </li>
        @endforeach

    </ul>
</div>
