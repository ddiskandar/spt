<div>



    <div class="flex items-start justify-between">
        <div class="relative flex flex-1 mb-4 rounded-md shadow-sm">
            <x-input-search placeholder="Mencari tamatan berdasarkan nama ..." />
        </div>
        <div class="w-16 ml-4">
            <select wire:model="perPage" id="perPage" name="perPage" class="block w-full px-3 py-2 bg-white border border-gray-300 shadow-sm sm:rounded-md focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                <option value='10'>10</option>
                <option value='20'>20</option>
                <option value='50'>50</option>
                <option value='100'>100</option>
            </select>
        </div>
    </div>

    <div class="mb-6">
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="px-4 py-5 bg-gray-50 sm:p-6">
                <div class="grid grid-cols-4 gap-6">
                    <div class="col-span-4 sm:col-span-1">
                        <x-jet-label for="filterAngkatan" value="Angkatan" />
                        <select wire:model="filterAngkatan" id="filterAngkatan" name="filterAngkatan" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            @foreach(\App\Models\Year::latest('id')->get() as $angkatan )
                            <option value="{{ $angkatan->id }}">{{ $angkatan->id . ' : ' . $angkatan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-4 sm:col-span-1">
                        <x-jet-label for="filterJurusan" value="Jurusan" />
                        <select wire:model="filterJurusan" id="filterJurusan" name="filterJurusan" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            @foreach(\App\Models\Major::all() as $jurusan )
                            <option value="{{ $jurusan->slug }}">{{ $jurusan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-4 sm:col-span-1">
                        <x-jet-label for="filterAktivitas" value="Jejak Kelulusan" />
                        <select wire:model="filterAktivitas" id="filterAktivitas" name="filterAktivitas" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            @foreach(\App\Models\Activity::all() as $activity )
                            <option value="{{ $activity->id }}">{{ $activity->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-4 sm:col-span-1">
                        <x-jet-label for="filterPublikasi" value="Publikasi" />
                        <select wire:model="filterPublikasi" id="filterPublikasi" name="filterPublikasi" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            <option value="1">Sudah</option>
                            <option value="0">Belum</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nama Lengkap / Jurusan / Angkatan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Aktivitas
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Publikasi
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @forelse($traces as $trace)
                                <tr class="@if($loop->even) bg-gray-50 @else bg-white @endif">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="object-cover object-top w-10 h-10 rounded-full" src="{{ $trace->student->user->profile_photo_url }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $trace->student->name }}
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $trace->student->jurusan->name }} / {{ $trace->student->angkatan->id }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-48 px-6 py-4 whitespace-nowrap">
                                        @isset ($trace->activity_id)

                                        @if ($trace->activity_id == '1')

                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-700 bg-red-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                            <span>{{ $trace->activity->name ?? '-'}}</span>
                                        </span>

                                        @elseif ($trace->activity_id == '2')
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                            <span>{{ $trace->activity->name ?? '-'}}</span>
                                        </span>

                                        @elseif ($trace->activity_id == '3')

                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-yellow-600 bg-yellow-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-yellow-500 rounded-full"></span>
                                            <span>{{ $trace->activity->name ?? '-'}}</span>
                                        </span>

                                        @else

                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-indigo-600 rounded-full bg-indigo-50">
                                            <span class="w-2 h-2 mr-2 bg-indigo-500 rounded-full"></span>
                                            <span>{{ $trace->activity->name ?? '-'}}</span>
                                        </span>

                                        @endif

                                        @else
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-gray-500 bg-gray-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-gray-400 rounded-full"></span>
                                            <span>belum mengisi</span>
                                        </span>
                                        @endisset
                                    </td>
                                    <td class="w-32 px-6 py-4 whitespace-nowrap">
                                        @if ($trace->student->profile->published)
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            <!-- <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span> -->
                                            <span>Sudah</span>
                                        </span>
                                        @else
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            <!-- <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span> -->
                                            <span>Belum</span>
                                        </span>
                                        @endif
                                    </td>
                                    <td class="w-24 px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2 text-gray-400">
                                            <x-button-icon wire:click="traceDetail({{ $trace->id }})">
                                                <x-icon-pencil-alt />
                                            </x-button-icon>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan=" 5" class="p-6 text-sm text-center text-gray-500">
                                        <div class="flex items-center justify-center py-12">
                                            <x-icon-ban />
                                            <span class="ml-2 font-semibold">Tidak ada data yang ditemukan</span>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="px-2 py-3 bg-gray-50 sm:px-6">
                            <div class="px-4 sm:px-0">
                                {{ $traces->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

        @isset($traceDetail->pernah_bekerja)
        <div class="mt-6 ">
            <div class="inline-flex items-center">
                <input {!! $traceDetail->pernah_bekerja == '1' ? 'checked' : '' !!} disabled id="pernah_bekerja" name="pernah_bekerja" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <x-jet-label class="ml-2" value="Pernah bekerja" />
            </div>
        </div>
        @endisset

        @isset($traceDetail->activity_id)

        @if ($traceDetail->activity_id == '4')
        <div class="mt-6 ">
            <x-jet-label value="Nama perusahaan" />
            <p class="text-sm text-gray-600">
                {{ $traceDetail->business_name ?? '...' }}
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
        @endif

        @if ($traceDetail->activity_id == '2')
        <div class="mt-6 ">
            <x-jet-label value="Nama perusahaan" />
            <p class="text-sm text-gray-600">
                {{ $traceDetail->bekerja_nama ?? '...' }}
            </p>
        </div>
        <div class="mt-6 ">
            <x-jet-label value="Pekerjaan" />
            <p class="text-sm text-gray-600">
                {{ $traceDetail->pekerjaan->name ?? '...' }}
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
                <x-jet-label class="ml-2" value="Gaji di atas UMR" />
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

        @endif

        @if ($traceDetail->activity_id != '1' && $traceDetail->activity_id != '4')
        <div class="mt-6 ">
            <x-jet-label value="Tanggal mulai bekerja" />
            <p class="text-sm text-gray-600">
                {{ $traceDetail->bekerja_tanggal_mulai ?? '...' }}
            </p>
        </div>

        @isset($traceDetail->linear)
        <div class="mt-6 ">
            <div class="inline-flex items-center">
                <input {!! $traceDetail->linear == '1' ? 'checked' : '' !!} disabled id="linear" name="linear" type="checkbox" class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <x-jet-label class="ml-2" value="Sesuai kompetensi" />
            </div>
        </div>
        @endisset

        @endif


        @endisset

        <div class="mt-6 ">
            <div class="inline-flex items-center">
                <input wire:model="published" id="published" name="published" type="checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                <x-jet-label class="ml-3" value="Publikasi" />
            </div>
        </div>

    </x-slide-overs>

</div>