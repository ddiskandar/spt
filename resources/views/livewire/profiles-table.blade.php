<div>
    <div class="flex items-start justify-between">
        <div class="relative flex flex-1 mb-4 rounded-md shadow-sm">
            <x-input-search placeholder="Mencari pendaftar berdasarkan nama, nomor registrasi, atau alamat rumah ..." />
        </div>
        <div class="w-16 ml-4">
            <select wire:model="perPage" id="perPage" name="perPage" class="block w-full px-3 py-2 bg-white border border-gray-300 shadow-sm sm:rounded-md focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                <option value='4'>4</option>
                <option value='10'>10</option>
                <option value='15'>15</option>
                <option value='20'>20</option>
                <option value='50'>50</option>
                <option value='100'>100</option>
            </select>
        </div>
    </div>

    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-4 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nama Lengkap / Jurusan / Angkatan
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Testimoni
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nomor WhatsApp
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Akun Sosial Media
                                    </th>
                                    <th scope="col" class="px-4 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Publikasi
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr wire:loading>
                                    <td class="p-6 text-sm font-semibold text-gray-500">
                                        Loading ...
                                    </td>
                                </tr>
                                @forelse($profiles as $profile)
                                <tr wire:loading.remove wire:click="showProfileDetail({{ $profile->id }})" class="cursor-pointer hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $profile->student->name }}
                                        </div>
                                        <div class="text-sm text-gray-500">
                                            {{ $profile->student->jurusan->name }} / {{ $profile->student->angkatan->id }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 truncate w-80">
                                            {{ $profile->testimoni ?? '...' }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center text-sm font-medium text-gray-900 truncate">
                                            <div>
                                                {{ $profile->phone ?? '...' }}
                                            </div>
                                            @if ($profile->join_wa)
                                            <div class="ml-2">
                                                <x-icon-check-circle />
                                            </div>
                                            @endif
                                        </div>
                                    </td>

                                    <td class="px-4 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2 text-sm font-medium ">
                                            @if ($profile->facebook)
                                            <a target="_blank" href="https://facebook.com/{{ $profile->facebook}}">
                                                <div class="text-gray-500">
                                                    <x-icon-facebook />
                                                </div>
                                            </a>
                                            @else
                                            <div class="text-gray-200">
                                                <x-icon-facebook />
                                            </div>
                                            @endif

                                            @if ($profile->youtube)
                                            <a target="_blank" href="https://youtube.com/{{ $profile->youtube}}">
                                                <div class="text-gray-500">
                                                    <x-icon-youtube />
                                                </div>
                                            </a>
                                            @else
                                            <div class="text-gray-200">
                                                <x-icon-youtube />
                                            </div>
                                            @endif

                                            @if ($profile->instagram)
                                            <a target="_blank" href="https://instagram.com/{{ $profile->instagram}}">
                                                <div class="text-gray-500">
                                                    <x-icon-instagram />
                                                </div>
                                            </a>
                                            @else
                                            <div class="text-gray-200">
                                                <x-icon-instagram />
                                            </div>
                                            @endif

                                            @if ($profile->linkedin)
                                            <a target="_blank" href="https://linkedin.com/{{ $profile->linkedin}}">
                                                <div class="text-gray-500">
                                                    <x-icon-linkedin />
                                                </div>
                                            </a>
                                            @else
                                            <div class="text-gray-200">
                                                <x-icon-linkedin />
                                            </div>
                                            @endif

                                            @if ($profile->twitter)
                                            <a target="_blank" href="https://twitter.com/{{ $profile->twitter}}">
                                                <div class="text-gray-500">
                                                    <x-icon-twitter />
                                                </div>
                                            </a>
                                            @else
                                            <div class="text-gray-200">
                                                <x-icon-twitter />
                                            </div>
                                            @endif

                                        </div>
                                    </td>
                                    <td class="px-4 py-4 whitespace-nowrap">
                                        @if ($profile->published)
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                            <span>Publised</span>
                                        </span>
                                        @else
                                        <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                            <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                            <span>Unpublish</span>
                                        </span>
                                        @endif
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-2 text-gray-400">
                                            <x-button-icon>
                                                <x-icon-pencil-alt />
                                            </x-button-icon>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr wire:loading.remove>
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
                        <div wire:loading.remove class="px-2 py-3 bg-gray-50 sm:px-4">
                            <div class="px-4 sm:px-0">
                                {{ $profiles->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <x-slide-overs wire:model="panelProfileDetail">
        <x-slot name="title">

        </x-slot>
        @isset($profileDetail->student->user->profile_photo_path)
        <img class="object-cover object-top w-32 h-32 rounded-full" src="{{ Storage::url($profileDetail->student->user->photo) }}" alt="">
        @else
        <img class="object-cover object-top w-32 h-32 rounded-full" src="/images/default-avatar.png" alt="">
        @endisset

        <h2 id="slide-over-heading" class="mt-6 text-xl font-bold text-gray-900">
            {{ $profileDetail->student->name ?? '' }}
        </h2>
        <p class="text-sm">{{ $profileDetail->student->nipd ?? '' }}</p>
        <div class="mt-6 ">
            <x-jet-label value="No. Handphone" />
            <div>
                {{ $profileDetail->phone ?? '-' }}
                <div class="inline-flex items-center ml-4">
                    <div class="flex items-center h-5 ">
                        <input wire:model="join_wa" id="join_wa" name="join_wa" type="checkbox" class="w-4 h-4 text-green-600 border-gray-300 rounded focus:ring-green-500">
                    </div>
                    <div class="ml-2 ">
                        <label for="join_wa" class="text-sm font-medium text-gray-500">Gabung Grup WA</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-6 ">
            <x-jet-label value="Asal Sekolah" />
            <div>
                {{ $profileDetail->asal_sekolah ?? '' }}
            </div>
        </div>
    </x-slide-overs>

</div>