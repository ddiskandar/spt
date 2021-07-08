<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col items-start justify-between md:flex-row md:items-center">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ auth()->user()->student->name }}
            </h2>
            <div class="mt-4 md:mt-0">
                <a href="{{ url()->previous() }}">
                    <x-jet-secondary-button>
                        Kembali
                    </x-jet-secondary-button>
                </a>
            </div>
        </div>
    </x-slot>

    <div>
        <div class="py-10 mx-auto max-w-7xl sm:px-6 lg:px-8">

            @if (Laravel\Fortify\Features::canUpdateProfileInformation())

            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-profile-information-form')
            </div>

            <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('student.trace-student')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.update-photo-and-address')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.profile-student')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.akun-sosmed')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.join-wa')
            </div>

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('student.update-email')
            </div>

            <x-jet-section-border />

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>

            <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
            <div class="mt-10 sm:mt-0">
                @livewire('profile.two-factor-authentication-form')
            </div>

            <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())

            <x-jet-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
            @endif
        </div>
    </div>
</x-app-layout>