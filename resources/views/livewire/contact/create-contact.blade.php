<div>
    <section id="contactUs" class="min-h-screen w-full px-6 flex flex-col items-center justify-center py-20">
        <h2 class="font-bold text-3xl md:text-4xl text-center mb-10 md:mb-16 text-gray-900 dark:text-gray-50">Contact
            Us</h2>

        <form wire:submit="createContact" class="w-full">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 w-full">
                <div class="md:col-span-1 md:col-start-2">
                    <x-label for="name">Name</x-label>
                    <x-input name="name" id="name" wire:model.blur="name" />
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="md:col-span-1 md:col-start-2">
                    <x-label for="email">Email</x-label>
                    <x-input type="email" name="email" id="email" wire:model.blur="email" />
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror

                </div>
                <div class="md:col-span-1 md:col-start-2">
                    <x-label for="phone">Phone</x-label>
                    <x-input type="text" name="phone" id="phone" wire:model.blur="phone" />
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="md:col-span-1 md:col-start-2">
                    <x-label for="address">Address</x-label>
                    <x-textarea name="address" id="address" wire:model.blur="address" />
                    @error('address')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="md:col-span-1 md:col-start-2">
                    <x-label for="description">Description</x-label>
                    <x-textarea name="description" id="description" wire:model.blur="description" />
                    @error('description')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
                <div class="md:col-span-1 md:col-start-2">
                    <x-primary-button type="submit">Submit</x-primary-button>
                </div>
            </div>
        </form>

    </section>
</div>
