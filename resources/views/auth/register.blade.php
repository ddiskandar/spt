<x-guest-layout>
    <div class="flex">
        <div class="flex-1 hidden bg-indigo-600 lg:block">
            @include('partials.auth-info')
        </div>
        <div class="flex flex-col items-start flex-1 min-h-screen pt-12 bg-gray-100 sm:justify-center sm:pt-0">
            @livewire('registration')
        </div>
    </div>
</x-guest-layout>