<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Data Tamatan') }}
            </h2>
            <div class="items-center hidden sm:flex">
                @livewire('students-import')
            </div>
        </div>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="">
                @livewire('students-table')
            </div>

            <!-- <x-jet-section-border /> -->
        </div>
    </div>

    <x-slot name="scripts">
    </x-slot>
</x-app-layout>