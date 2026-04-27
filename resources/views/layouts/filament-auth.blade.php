<div class="font-[Montserrat]">
    <x-includes.navbar>
        <x-slot:menu-items>
            <x-includes.navbar-items route="home" navItemName="Home" />
        </x-slot:menu-items>
    </x-includes.navbar>

    {{ $slot }}
</div>

