<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-6">

        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-1 bg-white lg:grid-cols-3">
                    <div class="p-6">
                        <div class="text-left">
                            <div class="text-sm text-gray-500">
                                {{ __('Jumlah Total Tamatan') }}
                            </div>
                            <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                                {{ $card['tamatan'] }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-100 lg:border-t-0 lg:border-l-2">
                        <div class="text-left">
                            <div class="text-sm text-gray-500">
                                {{ __('Melaporkan Jejak Kelulusan') }}
                            </div>
                            <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                                {{ $card['profile'] }}
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-100 lg:border-t-0 lg:border-l-2">
                        <div class="text-left">
                            <div class="text-sm text-gray-500">
                                {{ __('Alumni Sukses yang Sudah dipublikasi') }}
                            </div>
                            <div class="mt-2 text-3xl font-semibold leading-7 text-gray-900">
                                {{ $card['published'] }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="p-6 md:p-12">
                    <h1 class="text-xl font-semibold">Grafik Jumlah Tamatan</h1>
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>
    </div>

    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        {{ $chart->script() }}
    </x-slot>

</x-app-layout>