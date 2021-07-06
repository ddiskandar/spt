<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Akun Sosial Media') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Facebook, Instagram, Twitter, Youtube, Linkedin') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="facebook" :value="__('Facebook')" />
            <div class="relative flex items-center">
                <x-jet-input id="facebook" wire:model.defer="facebook" class="relative block w-full mt-2 pl-44" type="text" name="facebook" />
                <div class="absolute text-sm text-gray-500 left-3 top-5">https://facebook.com/</div>
            </div>
            <x-jet-input-error for="facebook" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="instagram" :value="__('Instagram')" />
            <div class="relative flex items-center">
                <x-jet-input id="instagram" wire:model.defer="instagram" class="relative block w-full mt-2 pl-44 " type="text" name="instagram" />
                <div class="absolute text-sm text-gray-500 left-3 top-5">https://instagram.com/</div>
            </div>
            <x-jet-input-error for="instagram" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="twitter" :value="__('Twitter')" />
            <div class="relative flex items-center">
                <x-jet-input id="twitter" wire:model.defer="twitter" class="relative block w-full mt-2 pl-44 " type="text" name="twitter" />
                <div class="absolute text-sm text-gray-500 left-3 top-5">https://twitter.com/</div>
            </div>
            <x-jet-input-error for="twitter" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="youtube" :value="__('Youtube')" />
            <div class="relative flex items-center">
                <x-jet-input id="youtube" wire:model.defer="youtube" class="relative block w-full mt-2 pl-44 " type="text" name="youtube" />
                <div class="absolute text-sm text-gray-500 left-3 top-5">https://youtube.com/</div>
            </div>
            <x-jet-input-error for="youtube" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="linkedin" :value="__('Linkedin')" />
            <div class="relative flex items-center">
                <x-jet-input id="linkedin" wire:model.defer="linkedin" class="relative block w-full mt-2 pl-44 " type="text" name="linkedin" />
                <div class="absolute text-sm text-gray-500 left-3 top-5">https://linkedin.com/</div>
            </div>
            <x-jet-input-error for="linkedin" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="facebook" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="join_wa">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>