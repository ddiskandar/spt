<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Photo dan alamat tinggal') }}
    </x-slot>

    <x-slot name="description">
        {{ __('File photo max 1 MB') }}
    </x-slot>

    <x-slot name="form">

        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-jet-label for="photo" value="{{ __('Photo di tempat kerja atau aktivitas sekarang') }}" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">
                @if ($profile->photo)
                <img src="/storage/{{ $profile->photo }}" alt="preview" class="object-cover w-64 h-48 rounded-lg ">
                @else
                <img src="/images/default-image.jpg" alt="preview" class="object-cover w-64 h-48 rounded-lg ">
                @endif
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2" x-show="photoPreview">
                <span class="block h-48 rounded-lg w-60" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-4 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Pilih Photo') }}
            </x-jet-secondary-button>

            @isset ($profile->photo)
            <x-jet-secondary-button type="button" class="mt-4" wire:click="deletePhoto">
                {{ __('Hapus Photo') }}
            </x-jet-secondary-button>
            @endisset

            <x-jet-input-error for="photo" class="mt-2" />
        </div>

        <div class="col-span-6">
            <x-jet-label for="address" :value="__('Alamat tempat tinggal sekarang')" />
            <x-textarea id="address" wire:model.defer="address" class="block w-full mt-1" type="text" name="address" rows="2" />
            <x-jet-input-error for="address" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="photo, address">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>