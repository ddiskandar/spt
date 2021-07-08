<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="p-12">
                    <h1>Jumlah Tamatan</h1>
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>
    </div>

    <footer class="flex flex-col justify-center pt-24 pb-6 text-sm text-center text-gray-400 md:flex-row">
        <div class>Sistem Penelusuran Tamatan SMK Plus Al-Farhan </div>
        <span class="hidden md:px-2 md:block">-</span>
        <div>Made with love by Dd</div>
    </footer>

    <x-slot name="scripts">
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        {{ $chart->script() }}
    </x-slot>

</x-app-layout>