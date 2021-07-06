<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Testimoni') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Testimoni, saran, dan alamat sekarang') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6">
            <x-jet-label for="address" :value="__('Alamat tempat tinggal sekarang')" />
            <x-textarea id="address" wire:model.defer="address" class="block w-full mt-1" type="text" name="address" rows="2" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>
        <div class="col-span-6">
            <x-jet-label for="testimoni" :value="__('Testimoni')" />
            <x-textarea id="testimoni" wire:model.defer="testimoni" class="block w-full mt-1" type="text" name="testimoni" rows="4" />
            <x-jet-input-error for="testimoni" class="mt-2" />
        </div>
        <div class="col-span-6">
            <x-jet-label for="saran" :value="__('Saran')" />
            <x-textarea id="saran" wire:model.defer="saran" class="block w-full mt-1" type="text" name="saran"  rows="4" />
            <x-jet-input-error for="saran" class="mt-2" />
        </div>


    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
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