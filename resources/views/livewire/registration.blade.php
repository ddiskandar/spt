<form wire:submit.prevent="store">
    <h2 class="text-2xl font-semibold">Buat Akun Baru</h2>
    <div class="mt-4">
        <x-jet-label for="name" value="{{ __('Nama lengkap') }}" />
        <x-jet-input wire:model.defer="name" id="name" class="block w-full mt-1" type="text" name="name" autofocus autocomplete="name" />
    </div>

    <div class="mt-4">
        <x-jet-label for="birth" value="{{ __('Tanggal Lahir') }}" />
        <x-jet-input wire:model.defer="birth_date" id="birth" class="block w-full mt-1" type="date" name="birth" />
    </div>

    <div class="mt-4">
        <x-jet-label for="year" value="{{ __('Tahun Lulus') }}" />
        <select wire:model.defer="year" id="year" name="year" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
            <option value='' selected>Pilih tahun lulus</option>
            @foreach(\App\Models\Year::latest('id')->get() as $year )
            <option value="{{ $year->id }}">{{ $year->id . ' : ' . $year->name }}</option>
            @endforeach
        </select>
    </div>

    @isset($student)

    <div class="mt-4">
        <x-jet-label for="email" value="{{ __('Alamat Email Aktif') }}" />
        <x-jet-input wire:model.defer="email" id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" />
    </div>

    <div class="mt-4">
        <x-jet-label for="password" value="{{ __('Password') }}" />
        <x-jet-input wire:model.defer="password" id="password" class="block w-full mt-1" type="password" name="password" autocomplete="new-password" />
    </div>

    <div class="mt-4">
        <x-jet-label for="password_confirmation" value="{{ __('Tulis ulang Password') }}" />
        <x-jet-input wire:model.defer="password_confirmation" id="password_confirmation" class="block w-full mt-1" type="password" name="password_confirmation" autocomplete="new-password" />
    </div>

    @endisset

    <div class="mt-4">
        @empty($student)
        <p wire:click.prevent="validate_student" class="text-sm font-semibold text-indigo-500 uppercase cursor-pointer">Klik untuk validasi data</p>
        @else
        <x-jet-button class="justify-center w-full py-4 mt-2">
            {{ __('Daftar') }}
        </x-jet-button>
        @endisset
    </div>

    @if($hasStudentData)
    @empty($student)
    <div class="p-6 mt-4 border border-yellow-200 rounded-lg bg-yellow-50">
        <p class="text-sm text-yellow-600">Tidak ada data yang ditemukan, periksa kembali</p>
    </div>
    @endempty
    @endif
</form>