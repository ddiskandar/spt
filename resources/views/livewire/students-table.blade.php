<div>
    <div class="flex items-start justify-between">
        <div class="relative flex flex-1 mb-4 rounded-md shadow-sm">
            <x-input-search placeholder="Mencari taman berdasarkan nama atau NIPD ..." />
        </div>
        <div class="w-16 ml-4">
            <select wire:model="perPage" id="perPage" name="perPage" class="block w-full px-3 py-2 bg-white border border-gray-300 shadow-sm sm:rounded-md focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                <option value='9'>9</option>
                <option value='19'>19</option>
                <option value='49'>49</option>
                <option value='99'>99</option>
            </select>
        </div>
    </div>

    <div class="">
        <div class="overflow-hidden shadow sm:rounded-md">
            <div class="px-4 py-5 bg-gray-50 sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label for="filterAngkatan" value="Angkatan" />
                        <select wire:model="filterAngkatan" id="filterAngkatan" name="filterAngkatan" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            @foreach(\App\Models\Year::latest('id')->get() as $angkatan )
                            <option value="{{ $angkatan->id }}">{{ $angkatan->id . ' : ' . $angkatan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-span-6 sm:col-span-2">
                        <x-jet-label for="filterJurusan" value="Jurusan" />
                        <select wire:model="filterJurusan" id="filterJurusan" name="filterSchool" class="block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                            <option value=''>Semua</option>
                            @foreach(\App\Models\Major::all() as $jurusan )
                            <option value="{{ $jurusan->slug }}">{{ $jurusan->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 overflow-hidden bg-white shadow-xl sm:rounded-lg">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden ">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Nama Lengkap
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        NIPD
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        L/P
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Angkatan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Jurusan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Tanggal Lahir
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse($students as $student)
                                <tr class="@if($loop->even) bg-gray-50 @else bg-white @endif">
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900 uppercase truncate">
                                            {{ $student->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            {{ $student->nipd }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            {{ $student->jk }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            {{ $student->angkatan->name }}
                                        </div>
                                    </td>
                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            {{ $student->jurusan->name }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="text-sm text-gray-600">
                                            {{ date('d/m/Y', strtotime($student->birth_date)) }}
                                        </div>
                                    </td>

                                    <td class="px-6 py-3 whitespace-nowrap">
                                        <div class="flex items-center space-x-2 text-gray-400">
                                            <x-button-icon>
                                                <a href="#">
                                                    <x-icon-pencil-alt />
                                                </a>
                                            </x-button-icon>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="p-6 text-sm text-center text-gray-500">
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
                                {{ $students->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>