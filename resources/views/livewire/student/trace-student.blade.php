<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Aktivitas') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Bekerja, melanjutkan atau wirausaha') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6">
            <x-jet-label for="activity_id" :value="__('Aktivitas Sekarang')" />
            <div class="grid grid-cols-2 gap-4 mt-2 md:grid-cols-3">
                @foreach (App\Models\Activity::all() as $activity)
                <div class="">
                    <input class="hidden" wire:model="activity_id" id="{{ $activity->id }}" type="radio" value="{{ $activity->id }}" />
                    <label for="{{ $activity->id }}">
                        <div class="{{ ($activity_id == $activity->id) ? 'border-indigo-600 text-indigo-600' : 'text-gray-600 border-gray-100' }} w-full px-6 py-8 border-2 rounded-lg cursor-pointer hover:border-indigo-600 flex items-center relative justify-center transition duration-500 ease-in-out">
                            <span class="font-semibold text-center ">{{ $activity->name }}</span>
                            @if($activity_id == $activity->id)
                            <svg class="absolute w-6 h-6 right-3 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            @endif
                        </div>
                    </label>
                </div>
                @endforeach
            </div>
            <x-jet-input-error for="activity_id" class="mt-2" />

        </div>

        @isset ($activity_id)

        <div class="w-full col-span-6 border-t border-gray-200"></div>

        @if ( $activity_id !== '1')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="linear" :value="__('Apakah aktivitas sekarang linear dengan jurusan di SMK?')" />
            <div class="flex items-center mt-2">
                <input wire:model="linear" id="linear_true" type="radio" value=true />
                <x-jet-label class="ml-1" for="linear_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="linear" id="linear_false" type="radio" value=false />
                <x-jet-label class="ml-1" for="linear_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tanggal_masuk" :value="__('Tanggal memulai aktivitas sekarang')" />
            <x-jet-input id="tanggal_masuk" wire:model.defer="tanggal_masuk" class="block w-full mt-1" type="date" name="tanggal_masuk" />
            <x-jet-input-error for="tanggal_masuk" class="mt-2" />
        </div>
        @endif

        @if ($activity_id == '3')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="melanjutkan_kampus" :value="__('Nama Kampus')" />
            <x-jet-input maxlength="13" id="melanjutkan_kampus" wire:model.defer="melanjutkan_kampus" class="block w-full mt-1" type="text" name="melanjutkan_kampus" :value="old('melanjutkan_kampus')" />
            <x-jet-input-error for="melanjutkan_kampus" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="melanjutkan_prodi" :value="__('Program Studi')" />
            <x-jet-input maxlength="13" id="melanjutkan_prodi" wire:model.defer="melanjutkan_prodi" class="block w-full mt-1" type="text" name="melanjutkan_prodi" :value="old('melanjutkan_prodi')" />
            <x-jet-input-error for="melanjutkan_prodi" class="mt-2" />
        </div>
        @endif

        @if ($activity_id == '4')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="business_name" :value="__('Nama Bisnis')" />
            <x-jet-input id="business_name" wire:model.defer="business_name" class="block w-full mt-1" type="text" name="business_name" :value="old('business_name')" />
            <x-jet-input-error for="business_name" class="mt-2" />
        </div>
        @endif

        @if ( $activity_id !== '2')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="pernah_bekerja" :value="__('Apakah anda pernah bekerja?')" />
            <div class="flex items-center mt-2">
                <input wire:model="pernah_bekerja" id="pernah_bekerja_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="pernah_bekerja_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="pernah_bekerja" id="pernah_bekerja_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="pernah_bekerja_false" :value="__('Tidak')" />
            </div>
        </div>
        @endif

        @if ($pernah_bekerja == '1' || $activity_id == '2')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bekerja_nama" :value="__('Nama Perusahaan tempat bekerja')" />
            <x-jet-input id="bekerja_nama" wire:model.defer="bekerja_nama" class="block w-full mt-1" type="text" name="bekerja_nama" :value="old('bekerja_nama')" />
            <x-jet-input-error for="bekerja_nama" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bekerja_sebelum_lulus" :value="__('Apakah anda sudah mulai bekerja sebelum lulus dari SMK?')" />
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_sebelum_lulus" id="bekerja_sebelum_lulus_true" type="radio" value=true />
                <x-jet-label class="ml-1" for="bekerja_sebelum_lulus_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_sebelum_lulus" id="bekerja_sebelum_lulus_false" type="radio" value=false />
                <x-jet-label class="ml-1" for="bekerja_sebelum_lulus_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bekerja_melalui_bkk" :value="__('Apakah anda bekerja melalui BKK SMK?')" />
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_melalui_bkk" id="bekerja_melalui_bkk_true" type="radio" value=true />
                <x-jet-label class="ml-1" for="bekerja_melalui_bkk_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_melalui_bkk" id="bekerja_melalui_bkk_false" type="radio" value=false />
                <x-jet-label class="ml-1" for="bekerja_melalui_bkk_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="bekerja_gaji_standar_umr" :value="__('Apakah gaji yang anda terima diatas standar UMR?')" />
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_gaji_standar_umr" id="bekerja_gaji_standar_umr_true" type="radio" value=true />
                <x-jet-label class="ml-1" for="bekerja_gaji_standar_umr_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="bekerja_gaji_standar_umr" id="bekerja_gaji_standar_umr_false" type="radio" value=false />
                <x-jet-label class="ml-1" for="bekerja_gaji_standar_umr_false" :value="__('Tidak')" />
            </div>
        </div>

        @endif

        @endisset

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="activity_id, melanjutkan_kampus, melanjutkan_prodi">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>