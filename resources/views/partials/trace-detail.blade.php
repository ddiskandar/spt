<x-slide-overs wire:model="panel">
    <x-slot name="title">

    </x-slot>
    @isset($traceDetail->student->user->profile_photo_path)
    <img class="object-cover object-top w-32 h-32 rounded-full" src="{{ Storage::url($traceDetail->student->user->profile_photo_path) }}" alt="">
    @else
    <img class="object-cover object-top w-32 h-32 rounded-full" src="/images/default-avatar.png" alt="">
    @endisset

    <h2 id="slide-over-heading" class="mt-6 text-xl font-bold text-gray-900">
        {{ $traceDetail->student->name ?? '' }}
    </h2>
    <p class="text-sm">{{ $traceDetail->student->jurusan->name ?? '' }} / {{ $traceDetail->student->year_id ?? '' }}</p>
    <div class="mt-6 ">
        <div class="flex items-center space-x-2 text-sm font-medium ">
            @isset ($traceDetail->student->profile->facebook)
            <a target="_blank" href="https://facebook.com/{{ $traceDetail->student->profile->facebook}}">
                <div class="text-gray-500 hover:text-indigo-700">
                    <x-icon-facebook />
                </div>
            </a>
            @else
            <div class="text-gray-200">
                <x-icon-facebook />
            </div>
            @endisset

            @isset ($traceDetail->student->profile->youtube)
            <a target="_blank" href="https://youtube.com/{{ $traceDetail->student->profile->youtube}}">
                <div class="text-gray-500 hover:text-indigo-700">
                    <x-icon-youtube />
                </div>
            </a>
            @else
            <div class="text-gray-200">
                <x-icon-youtube />
            </div>
            @endisset

            @isset ($traceDetail->student->profile->instagram)
            <a target="_blank" href="https://instagram.com/{{ $traceDetail->student->profile->instagram}}">
                <div class="text-gray-500 hover:text-indigo-700">
                    <x-icon-instagram />
                </div>
            </a>
            @else
            <div class="text-gray-200">
                <x-icon-instagram />
            </div>
            @endisset

            @isset ($traceDetail->student->profile->linkedin)
            <a target="_blank" href="https://linkedin.com/{{ $traceDetail->student->profile->linkedin}}">
                <div class="text-gray-500 hover:text-indigo-700">
                    <x-icon-linkedin />
                </div>
            </a>
            @else
            <div class="text-gray-200">
                <x-icon-linkedin />
            </div>
            @endisset

            @isset ($traceDetail->student->profile->twitter)
            <a target="_blank" href="https://twitter.com/{{ $traceDetail->student->profile->twitter}}">
                <div class="text-gray-500 hover:text-indigo-700">
                    <x-icon-twitter />
                </div>
            </a>
            @else
            <div class="text-gray-200">
                <x-icon-twitter />
            </div>
            @endisset

        </div>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Email" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->student->user->email ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Nomor WhatsApp" />
        <div>
            {{ $traceDetail->student->profile->phone ?? '...' }}
            <div class="inline-flex items-center ml-4">
                <div class="flex items-center h-5 ">
                    <input wire:model="join_wa" type="checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                </div>
                <div class="ml-2 ">
                    <label for="join_wa" class="text-sm text-gray-600">Gabung Grup</label>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Alamat tinggal sekarang" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->student->profile->address ?? '...' }}
        </p>
    </div>
    @isset ($traceDetail->student->profile->photo)
    <div class="mt-6 ">
        <x-jet-label value="Photo" />
        <div class="mt-2">
            <img src="/storage/{{ $traceDetail->student->profile->photo }}" alt="" class="rounded-lg w-72">
        </div>
    </div>
    @endisset
    <div class="mt-6 ">
        <x-jet-label value="Testimoni" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->student->profile->testimoni ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Saran" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->student->profile->saran ?? '...' }}
        </p>
    </div>

    <div class="mt-6 ">
        <x-jet-label value="Aktivitas" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->activity->name ?? '...' }}
        </p>
    </div>

    @isset($traceDetail->activity_id)

    @if ($traceDetail->activity_id == '4')
    <div class="mt-6 ">
        <x-jet-label value="Nama brand bisnis perusahaan" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->wirausaha_nama ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Bidang usaha" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->bidang_bisnis_wirausaha->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Penghasilan" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->penghasilan_wirausaha->name ?? '...' }}
        </p>
    </div>
    @endif

    @if ($traceDetail->activity_id == '3')
    <div class="mt-6 ">
        <x-jet-label value="Nama perguruan tinggi" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->melanjutkan_kampus ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Program studi" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->melanjutkan_prodi ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Tanggal masuk perguruan tinggi" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->melanjutkan_tanggal_mulai ?? '...' }}
        </p>
    </div>

    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input {!! $traceDetail->melanjutkan_linear == '1' ? 'checked' : '' !!} disabled id="bekerja_linear" name="bekerja_linear" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <x-jet-label class="ml-2" value="Melanjutkan studi sesuai kompetensi" />
        </div>
    </div>
    @endif

    @if(isset($traceDetail->pernah_bekerja) && $traceDetail->activity_id != '2')
    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input {!! $traceDetail->pernah_bekerja == '1' ? 'checked' : '' !!} disabled id="pernah_bekerja" name="pernah_bekerja" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <x-jet-label class="ml-2" value="Pernah bekerja" />
        </div>
    </div>
    @endif

    @if ($traceDetail->activity_id == '2' || $traceDetail->pernah_bekerja)
    <div class="mt-6 ">
        <x-jet-label value="Pekerjaan" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->pekerjaan->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Nama perusahaan" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->bekerja_nama ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Bidang usaha" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->bidang_bisnis_bekerja->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6 ">
        <x-jet-label value="Penghasilan" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->penghasilan_bekerja->name ?? '...' }}
        </p>
    </div>

    @isset($traceDetail->bekerja_gaji_standar_umr)
    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input {!! $traceDetail->bekerja_gaji_standar_umr == '1' ? 'checked' : '' !!} disabled id="bekerja_gaji_standar_umr" name="bekerja_gaji_standar_umr" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <x-jet-label class="ml-2" value="Gaji standar UMR" />
        </div>
    </div>
    @endisset

    @isset($traceDetail->bekerja_sebelum_lulus)
    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input {!! $traceDetail->bekerja_sebelum_lulus == '1' ? 'checked' : '' !!} disabled id="bekerja_sebelum_lulus" name="bekerja_sebelum_lulus" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <x-jet-label class="ml-2" value="Bekerja sebelum lulus" />
        </div>
    </div>
    @endisset

    <div class="mt-6 ">
        <x-jet-label value="Masa tunggu" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->bekerja_masa_tunggu ?? '...' }} bulan
        </p>
    </div>

    <div class="mt-6 ">
        <x-jet-label value="Tanggal mulai bekerja" />
        <p class="text-sm text-gray-600">
            {{ $traceDetail->bekerja_tanggal_mulai ?? '...' }}
        </p>
    </div>

    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input {!! $traceDetail->bekerja_linear == '1' ? 'checked' : '' !!} disabled id="bekerja_linear" name="bekerja_linear" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
            <x-jet-label class="ml-2" value="Bekerja sesuai kompetensi" />
        </div>
    </div>

    @endif

    @endisset

    <div class="mt-6 ">
        <div class="inline-flex items-center">
            <input wire:model="published" id="published" name="published" type="checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
            <x-jet-label class="ml-3" value="Publikasi" />
        </div>
    </div>

</x-slide-overs>