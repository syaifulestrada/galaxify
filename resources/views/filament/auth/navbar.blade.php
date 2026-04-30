<div class="font-[Montserrat]">
    <div class="fixed inset-x-0 top-0 z-50">
        <x-includes.navbar>
            <x-slot:menu-items>
                <x-includes.navbar-items :items="config('navbar')" />
            </x-slot:menu-items>
        </x-includes.navbar>
    </div>

    <div class="h-16"></div>
</div>
