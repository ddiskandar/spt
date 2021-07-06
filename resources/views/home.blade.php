<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @include('partials.status-profile')

    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">

                <div class="p-6 bg-white">
                    <div class="md:flex md:gap-x-12">
                        <div class="w-64">
                            <img class="w-64 rounded" src="{{ Auth::user()->profile_photo_url }}" alt="">
                        </div>
                        <dl class="grid flex-1 grid-cols-1 mt-6 md:mt-0 gap-x-4 gap-y-6 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Full name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->name }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email address
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->email }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tahun Lulus
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->angkatan->name }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Tanggal Lahir
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->birth_date }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Kompetensi Keahlian
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->jurusan->name }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    NIPD
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->nipd }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nomor WA
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->profile->phone ?? '-' }}
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Alamat sekarang
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->profile->address ?? '-' }}
                                </dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Testimoni
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->profile->testimoni ?? '-' }}
                                </dd>
                            </div>
                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Akun Sosial Media
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    facebook / instagram / twitter / youtube / linkedin
                                </dd>
                            </div>
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Aktivitas sekarang
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->activity->name ?? '-' }}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="flex flex-col justify-center pt-24 pb-6 text-sm text-center text-gray-400 md:flex-row">
        <div class>Sistem Penelusuran Tamatan SMK Plus Al-Farhan </div>
        <span class="hidden md:px-2 md:block">-</span>
        <div>Made with love by Dd</div>
    </footer>
</x-app-layout>