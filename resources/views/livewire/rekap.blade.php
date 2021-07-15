<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold">
                Jejak Kelulusan Tahun {{ $year }}
            </h1>
            <div class="w-32">
                <select wire:model="year" id="year" name="year" class="block w-full px-3 py-2 bg-white border border-gray-300 shadow-sm sm:rounded-md focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                    @foreach ( \DB::table('years')->latest('id')->get(['id']) as $year)
                    <option value='{{ $year->id }}'>{{ $year->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-3 lg:grid-cols-3">

            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="p-6">
                    <div class="py-6 text-center rounded-lg bg-gray-50">
                        <div class="text-sm text-gray-500">
                            {{ __('Melanjutkan ke perguruan tinggi') }}
                        </div>
                        <div class="mt-3 text-3xl font-semibold leading-7 text-gray-700">
                            {{ $data['melanjutkan']['jumlah'] }}
                        </div>
                    </div>
                    <div class="mt-2 divide-y divide-gray-100 divide-solid">
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Sesuai kompetensi</div>
                            <div class="text-sm">{{ $data['melanjutkan']['linear'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Tidak sesuai kompetensi</div>
                            <div class="text-sm">{{ $data['melanjutkan']['tidak_linear'] }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="p-6">
                    <div class="py-6 text-center rounded-lg bg-gray-50">
                        <div class="text-sm text-gray-500">
                            {{ __('Sedang bekerja') }}
                        </div>
                        <div class="mt-3 text-3xl font-semibold leading-7 text-gray-700">
                            {{ $data['bekerja']['jumlah'] }}
                        </div>
                    </div>
                    <div class="mt-2 divide-y divide-gray-100 divide-solid">
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Direkrut sebelum lulus</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['sebelum_lulus'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Mendapat pekerjaan melalui BKK</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['melalui_bkk'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Bekerja pada DUDIKA Pasangan</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['dudika'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Bekerja pada DUDIKA bukan Pasangan</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['bukan_dudika'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Rata-rata masa tunggu sebelum bekerja</div>
                            <di class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['masa_tunggu'] }}</di>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Bekerja sesuai kompetensi</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['linear'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Bekerja tidak sesuai kompetensi</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['tidak_linear'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Mendapat gaji standar UMR</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['umr'] }}</div>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <div class="text-sm text-gray-500">Mendapat gaji dibawah standar UMR</div>
                            <div class="mr-2 text-sm font-semibold text-gray-700">{{ $data['bekerja']['tidak_umr'] }}</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="p-6">
                    <div class="py-6 text-center rounded-lg bg-gray-50">
                        <div class="text-sm text-gray-500">
                            {{ __('Wirausaha') }}
                        </div>
                        <div class="mt-3 text-3xl font-semibold leading-7 text-gray-700">
                            {{ $data['wirausaha']['jumlah'] }}
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <div class="text-sm text-gray-500">Berwirausaha dalam 3 tahun terakhir</div>
                        <div class="text-sm">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="grid grid-cols-1 bg-white lg:grid-cols-3">
                <div class="p-6">
                    <div class="text-left">
                        <div class="text-sm text-gray-500">
                            {{ __('Jumlah Total Tamatan') }}
                        </div>
                        <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                            1
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-100 lg:border-t-0 lg:border-l-2">
                    <div class="text-left">
                        <div class="text-sm text-gray-500">
                            {{ __('Melaporkan Jejak Kelulusan') }}
                        </div>
                        <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                            2
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-100 lg:border-t-0 lg:border-l-2">
                    <div class="text-left">
                        <div class="text-sm text-gray-500">
                            {{ __('Alumni Sukses yang Sudah dipublikasi') }}
                        </div>
                        <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                            3
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
</div>