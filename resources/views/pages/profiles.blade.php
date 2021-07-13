<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profil Tamatan') }}
        </h2>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="">
                @livewire('profiles-table')
            </div>

            <!-- <x-jet-section-border /> -->
        </div>
    </div>

    <x-slot name="scripts">
    </x-slot>
</x-app-layout>