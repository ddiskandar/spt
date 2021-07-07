<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Nomor Whatsapp dan Gabung Group') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Segera bergabung dengan group untuk kemudahan komunikasi') }}
    </x-slot>

    <x-slot name="form">

        <!-- NO HP / Whatsapp -->
        <div class="col-span-6 sm:col-span-3">
            <x-jet-label for="state.phone" :value="__('Nomor HP/Whatsapp')" />
            <x-jet-input maxlength="13" id="state.phone" wire:model.defer="state.phone" class="block w-full mt-1" type="text" name="state.phone" :value="old('state.phone')" />
            <x-jet-input-error for="state.phone" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="" :value="__('Link Grup WA')" />
            <a href="{{ $link_group->wa_group }}" target="_blank">
                <x-jet-secondary-button class="mt-2">
                    Klik disini untuk bergabung
                </x-jet-secondary-button>
            </a>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.join_wa" :value="__('Sudang gabung grup WA?')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.join_wa" id="state.join_wa_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.join_wa_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.join_wa" id="state.join_wa_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.join_wa_false" :value="__('Tidak')" />
            </div>
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