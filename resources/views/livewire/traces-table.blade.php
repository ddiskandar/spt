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

    @include('partials.trace-detail')

</div>