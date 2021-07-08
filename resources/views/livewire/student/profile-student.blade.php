<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Testimoni') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Testimoni, saran, dan alamat sekarang') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6">
            <x-jet-label for="state.testimoni" :value="__('Testimoni')" />
            <x-textarea id="state.testimoni" wire:model.defer="state.testimoni" class="block w-full mt-1" type="text" name="state.testimoni" rows="4" />
            <x-jet-input-error for="state.testimoni" class="mt-2" />
        </div>
        <div class="col-span-6">
            <x-jet-label for="state.saran" :value="__('Saran')" />
            <x-textarea id="state.saran" wire:model.defer="state.saran" class="block w-full mt-1" type="text" name="state.saran" rows="4" />
            <x-jet-input-error for="state.saran" class="mt-2" />
        </div>


    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="state.testimoni, state.saran">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>