<x-guest-layout>
    <div class="flex">
        <div class="flex-1 hidden bg-indigo-600 md:block">
            @include('partials.auth-info')
        </div>
        <div class="flex flex-col flex-1 min-h-screen pt-12 bg-gray-100 sm:justify-center sm:pt-0">
            <div class="w-full px-12 lg:w-96 ">
                <h1 class="mb-2 text-4xl font-bold">Login</h1>
                <p class="mb-4 text-sm">Belum punya akun? <a class="font-semibold text-indigo-600 hover:underline" href="/register">Daftar Sekarang</a></p>
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                    {{ session('status') }}
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mt-6">
                        <x-jet-label for="email" value="{{ __('Alamat Email') }}" />
                        <x-jet-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="flex items-center justify-between mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                        @if (Route::has('password.request'))
                        <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Lupa password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="mt-4">
                        <x-jet-button class="justify-center w-full py-3 mt-2">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-guest-layout>