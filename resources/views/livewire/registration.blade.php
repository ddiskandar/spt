<div class="w-full px-12 lg:w-96 ">
    <div class="pb-12 lg:hidden">
        <a href="/" class="flex items-center text-sm font-semibold text-indigo-500 uppercase ">
            <svg class="w-6 h-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
            </svg>
            Kembali ke beranda
        </a>
    </div>

    <form wire:submit.prevent="store">
        <h1 class="mb-2 text-4xl font-bold">Daftar</h1>
        <p class="mb-4 text-sm">Sudah punya akun? <a class="font-semibold text-indigo-500 hover:underline" href="/login">Login sekarang</a></p>

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

        @empty($student->user_id)

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

        <div class="mt-4">
            <x-jet-button class="justify-center w-full py-4 mt-2">
                {{ __('Daftar') }}
            </x-jet-button>
        </div>

        @else

        @if($errorMessage == 'registered')
        <div class="p-4 mt-5 rounded-md bg-yellow-50">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/exclamation -->
                    <svg class="w-5 h-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">
                        {{ $student->name }} sudah terdaftar.
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <p>
                            Bila anda lupa password, silahkan <a href="/forgot-password" class="font-semibold">klik disini</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @endempty

        @else

        @if($errorMessage == 'invalid')
        <div class="p-4 mt-5 rounded-md bg-yellow-50">
            <div class="flex">
                <div class="flex-shrink-0">
                    <!-- Heroicon name: solid/exclamation -->
                    <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-yellow-800">
                        Data tidak sesuai.
                    </h3>
                    <div class="mt-2 text-sm text-yellow-700">
                        <p>
                            Periksa dan pastikan kembali data yang anda input pada formulir sesuai dengan data kelulusan, kemudian lakukan validasi kembali.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @endisset

        <x-jet-validation-errors class="py-6" />

        @empty ($student)
        <div class="mt-6">
            <a href="#" wire:click.prevent="validate_student" class="text-sm font-semibold text-indigo-500 uppercase cursor-pointer">Klik untuk validasi data -></a>
        </div>
        @endempty

    </form>
</div>