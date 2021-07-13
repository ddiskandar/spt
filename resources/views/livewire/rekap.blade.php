<div class="py-12">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="flex items-center justify-between">
            <h1 class="text-2xl font-semibold">
                Jejak Kelulusan Tahun {{ $year }}
            </h1>
            <div class="w-32">
                <select wire:model="year" id="year" name="year" class="block w-full px-3 py-2 bg-white border border-gray-300 shadow-sm sm:rounded-md focus:outline-none focus:ring-gray-400 focus:border-gray-400 sm:text-sm">
                    @foreach ( \App\Models\Year::latest('id')->get() as $year)
                    <option value='{{ $year->id }}'>{{ $year->id }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <div class="mx-auto mt-6 max-w-7xl sm:px-6 lg:px-8">
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
    </div>
</div>