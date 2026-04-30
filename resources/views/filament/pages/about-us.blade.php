<x-filament-panels::page>
    <div>
        <form wire:submit="create">
            <div class="space-y-5">
                {{ $this->form }}

                @if ($isUpdate)
                    <x-filament::button type="submit">
                        Update
                    </x-filament::button>
                @else
                    <x-filament::button type="submit">
                        Create
                    </x-filament::button>
                @endif
            </div>
        </form>
    </div>
</x-filament-panels::page>
