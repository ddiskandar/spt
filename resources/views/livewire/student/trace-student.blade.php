<x-jet-form-section submit="update">
    <x-slot name="title">
        {{ __('Jejak Kelulusan') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Bekerja, melanjutkan atau wirausaha') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6">
            <x-jet-label for="state.activity_id" :value="__('Aktivitas Sekarang')" />
            <div class="grid grid-cols-2 gap-4 mt-2 md:grid-cols-3">
                @foreach (App\Models\Activity::all() as $activity)
                <div class="">
                    <input class="hidden" wire:model="state.activity_id" id="{{ $activity->id }}" type="radio" value="{{ $activity->id }}" />
                    <label for="{{ $activity->id }}">
                        <div class="{{ ($state['activity_id'] == $activity->id) ? 'border-indigo-600 text-indigo-600' : 'text-gray-600 border-gray-100' }} w-full px-6 py-8 border-2 rounded-lg cursor-pointer hover:border-indigo-600 flex items-center relative justify-center transition duration-500 ease-in-out">
                            <span class="font-semibold text-center ">{{ $activity->name }}</span>
                            @if($state['activity_id'] == $activity->id)
                            <svg class="absolute w-6 h-6 right-3 top-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            @endif
                        </div>
                    </label>
                </div>
                @endforeach
            </div>
            <x-jet-input-error for="state.activity_id" class="mt-2" />

        </div>

        @isset ($state['activity_id'])

        <div class="w-full col-span-6 border-t border-gray-200"></div>

        @if ( $state['activity_id'] != '1' || $state['pernah_bekerja'] == '1')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.linear" :value="__('Apakah linear sesuai kompetensi :')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.linear" id="state.linear_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.linear_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.linear" id="state.linear_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.linear_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.tanggal_masuk" :value="__('Tanggal Masuk Kerja / Perguruan Tinggi')" />
            <x-jet-input id="state.tanggal_masuk" wire:model.defer="state.tanggal_masuk" class="block w-full mt-1" type="date" name="state.tanggal_masuk" />
            <x-jet-input-error for="state.tanggal_masuk" class="mt-2" />
        </div>
        @endif

        @if ($state['activity_id'] == '3')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.melanjutkan_kampus" :value="__('Nama Kampus')" />
            <x-jet-input id="state.melanjutkan_kampus" wire:model.defer="state.melanjutkan_kampus" class="block w-full mt-1" type="text" name="state.melanjutkan_kampus" :value="old('state.melanjutkan_kampus')" />
            <x-jet-input-error for="state.melanjutkan_kampus" class="mt-2" />
        </div>
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.melanjutkan_prodi" :value="__('Program Studi')" />
            <x-jet-input id="state.melanjutkan_prodi" wire:model.defer="state.melanjutkan_prodi" class="block w-full mt-1" type="text" name="state.melanjutkan_prodi" :value="old('state.melanjutkan_prodi')" />
            <x-jet-input-error for="state.melanjutkan_prodi" class="mt-2" />
        </div>
        @endif

        @if ($state['activity_id'] == '4')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.business_name" :value="__('Nama Bisnis')" />
            <x-jet-input id="state.business_name" wire:model.defer="state.business_name" class="block w-full mt-1" type="text" name="state.business_name" :value="old('state.business_name')" />
            <x-jet-input-error for="state.business_name" class="mt-2" />
        </div>
        @endif

        @if ( $state['activity_id'] != '2')
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.pernah_bekerja" :value="__('Apakah anda pernah bekerja?')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.pernah_bekerja" id="state.pernah_bekerja_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.pernah_bekerja_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.pernah_bekerja" id="state.pernah_bekerja_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.pernah_bekerja_false" :value="__('Tidak')" />
            </div>
        </div>
        @endif

        @if ($state['pernah_bekerja'] == '1' || $state['activity_id'] == '2')

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.bekerja_sebelum_lulus" :value="__('Apakah anda sudah mulai bekerja sebelum lulus dari SMK?')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_sebelum_lulus" id="state.bekerja_sebelum_lulus_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.bekerja_sebelum_lulus_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_sebelum_lulus" id="state.bekerja_sebelum_lulus_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.bekerja_sebelum_lulus_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.bekerja_masa_tunggu" :value="__('Masa tunggu sampai mendapatkan pekerjaan pertama anda (bulan)')" />
            <x-jet-input id="state.bekerja_masa_tunggu" wire:model.defer="state.bekerja_masa_tunggu" class="block w-full mt-1" type="text" name="state.bekerja_masa_tunggu" :value="old('state.bekerja_masa_tunggu')" />
            <x-jet-input-error for="state.bekerja_masa_tunggu" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.bekerja_melalui_bkk" :value="__('Apakah anda bekerja melalui BKK SMK?')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_melalui_bkk" id="state.bekerja_melalui_bkk_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.bekerja_melalui_bkk_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_melalui_bkk" id="state.bekerja_melalui_bkk_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.bekerja_melalui_bkk_false" :value="__('Tidak')" />
            </div>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.dudika_id" value="{{ __('DUDIKA') }}" />
            <select wire:model.defer="state.dudika_id" id="state.dudika_id" name="state.dudika_id" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400">
                <option value='' selected>Pilih salah satu</option>
                @foreach(\App\Models\Dudika::all() as $dudika )
                <option value="{{ $dudika->id }}">{{ $dudika->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.bekerja_nama" :value="__('Nama Perusahaan')" />
            <x-jet-input id="state.bekerja_nama" wire:model.defer="state.bekerja_nama" class="block w-full mt-1" type="text" name="state.bekerja_nama" :value="old('state.bekerja_nama')" />
            <x-jet-input-error for="state.bekerja_nama" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.profession_id" value="{{ __('Pekerjaan') }}" />
            <select wire:model.defer="state.profession_id" id="state.profession_id" name="state.profession_id" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400">
                <option value='' selected>Pilih salah satu</option>
                @foreach(\App\Models\Profession::all() as $profession )
                <option value="{{ $profession->id }}">{{ $profession->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.income_id" value="{{ __('Penghasilan') }}" />
            <select wire:model.defer="state.income_id" id="state.income_id" name="state.income_id" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400">
                <option value='' selected>Pilih salah satu</option>
                @foreach(\App\Models\Income::all() as $income )
                <option value="{{ $income->id }}">{{ $income->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="state.bekerja_gaji_standar_umr" :value="__('Apakah gaji yang anda terima diatas standar UMR?')" />
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_gaji_standar_umr" id="state.bekerja_gaji_standar_umr_true" type="radio" value='1' />
                <x-jet-label class="ml-1" for="state.bekerja_gaji_standar_umr_true" :value="__('Ya')" />
            </div>
            <div class="flex items-center mt-2">
                <input wire:model="state.bekerja_gaji_standar_umr" id="state.bekerja_gaji_standar_umr_false" type="radio" value='0' />
                <x-jet-label class="ml-1" for="state.bekerja_gaji_standar_umr_false" :value="__('Tidak')" />
            </div>
        </div>

        @endif

        @endisset

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Berhasil disimpan.') }}
        </x-jet-action-message>

        <x-dirty-message class="mr-3" target="state.activity_id, state.melanjutkan_kampus, state.melanjutkan_prodi">
            {{ __('Belum disimpan!') }}
        </x-dirty-message>

        <x-jet-button>
            {{ __('Simpan') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>