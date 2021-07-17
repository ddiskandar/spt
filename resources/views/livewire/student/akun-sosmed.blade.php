<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Link Akun Sosial Media') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Alamat link akun sosial media Facebook, Instagram, Twitter, Youtube, Linkedin') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="state.facebook" :value="__('Facebook')" />
            <div class="relative flex items-center">
                <x-jet-input id="state.facebook" wire:model.defer="state.facebook" class="relative block w-full mt-2 pl-[159px]" type="text" name="state.facebook" />
                <div class="absolute text-sm text-black left-3 top-5">https://facebook.com/</div>
            </div>
            <x-jet-input-error for="state.facebook" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="state.instagram" :value="__('Instagram')" />
            <div class="relative flex items-center">
                <x-jet-input id="state.instagram" wire:model.defer="state.instagram" class="relative block w-full mt-2 pl-[163px] " type="text" name="state.instagram" />
                <div class="absolute text-sm text-black left-3 top-5">https://instagram.com/</div>
            </div>
            <x-jet-input-error for="state.instagram" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="state.twitter" :value="__('Twitter')" />
            <div class="relative flex items-center">
                <x-jet-input id="state.twitter" wire:model.defer="state.twitter" class="relative block w-full mt-2 pl-[140px] " type="text" name="state.twitter" />
                <div class="absolute text-sm text-black left-3 top-5">https://twitter.com/</div>
            </div>
            <x-jet-input-error for="state.twitter" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="state.youtube" :value="__('Youtube')" />
            <div class="relative flex items-center">
                <x-jet-input id="state.youtube" wire:model.defer="state.youtube" class="relative block w-full mt-2 pl-[151px] " type="text" name="state.youtube" />
                <div class="absolute text-sm text-black left-3 top-5">https://youtube.com/</div>
            </div>
            <x-jet-input-error for="state.youtube" class="mt-2" />
        </div>

        <div class="col-span-6 md:col-span-4">
            <x-jet-label for="state.linkedin" :value="__('Linkedin')" />
            <div class="relative flex items-center">
                <x-jet-input id="state.linkedin" wire:model.defer="state.linkedin" class="relative block w-full mt-2 pl-[148px] " type="text" name="state.linkedin" />
                <div class="absolute text-sm text-black left-3 top-5">https://linkedin.com/</div>
            </div>
            <x-jet-input-error for="state.linkedin" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="state.facebook, state.instagram, state.twitter, state.youtube, state.linkedin">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>