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
                                    Angkatan Tahun Lulus
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
                                    {{ auth()->user()->student->profile->phone ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Akun Sosial Media
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">

                                    <div class="flex flex-wrap items-center">
                                        <div class="mt-1 mr-2">
                                            @isset (auth()->user()->student->profile->facebook)
                                            <a target="_blank" href="https://facebook.com/{{auth()->user()->student->profile->facebook}}">
                                                <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                                    <span>facebook</span>
                                                </span>
                                            </a>
                                            @else
                                            <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                                <span>facebook</span>
                                            </span>
                                            @endisset
                                        </div>

                                        <div class="mt-1 mr-2">
                                            @isset (auth()->user()->student->profile->instagram)
                                            <a target="_blank" href="https://instagram.com/{{auth()->user()->student->profile->instagram}}">
                                                <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                                    <span>instagram</span>
                                                </span>
                                            </a>
                                            @else
                                            <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                                <span>instagram</span>
                                            </span>
                                            @endisset
                                        </div>
                                        <div class="mt-1 mr-2">

                                            @isset (auth()->user()->student->profile->twitter)
                                            <a target="_blank" href="https://twitter.com/{{auth()->user()->student->profile->twitter}}">
                                                <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                                    <span>twitter</span>
                                                </span>
                                            </a>
                                            @else
                                            <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                                <span>twitter</span>
                                            </span>
                                            @endisset
                                        </div>

                                        <div class="mt-1 mr-2">
                                            @isset (auth()->user()->student->profile->youtube)
                                            <a target="_blank" href="https://youtube.com/{{auth()->user()->student->profile->youtube}}">
                                                <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                                    <span>youtube</span>
                                                </span>
                                            </a>
                                            @else
                                            <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                                <span>youtube</span>
                                            </span>
                                            @endisset
                                        </div>

                                        <div class="mt-1 mr-2">
                                            @isset (auth()->user()->student->profile->linkedin)
                                            <a target="_blank" href="https://linkedin.com/{{auth()->user()->student->profile->linkedin}}">
                                                <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                                    <span>linkedin</span>
                                                </span>
                                            </a>
                                            @else
                                            <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                <span class="w-2 h-2 mr-2 bg-red-600 rounded-full"></span>
                                                <span>linkedin</span>
                                            </span>
                                            @endisset
                                        </div>
                                    </div>

                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Testimoni
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->profile->testimoni ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Foto terbaru
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    @isset(auth()->user()->student->profile->photo)
                                    <img src="/storage/{{ auth()->user()->student->profile->photo }}" alt="" class="rounded-lg w-72">
                                    @else
                                    Belum diisi
                                    @endisset
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Alamat sekarang
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->profile->address ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    Aktivitas sekarang
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    @isset (auth()->user()->student->trace->activity_id)
                                    <span class="inline-flex items-center px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                        <span class="w-2 h-2 mr-2 bg-green-600 rounded-full"></span>
                                        <span>{{ auth()->user()->student->trace->activity->name ?? 'Belum diisi' }}</span>
                                    </span>

                                    @else
                                    Belum diisi
                                    @endisset
                                </dd>
                            </div>

                            @if (auth()->user()->student->trace->activity_id == '2')

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama perusahaan tempat bekerja
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->bekerja_nama ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Bidang Pekerjaan
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    <!-- TODO -->
                                    {{ auth()->user()->student->trace->income_id ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            @endif

                            @if (auth()->user()->student->trace->activity_id == '3')

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama Kampus/Perguruan Tinggi
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->melanjutkan_kampus ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Program Studi
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->melanjutkan_prodi ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            @endif

                            @if (auth()->user()->student->trace->activity_id == '4')

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nama / Brand Usaha
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->business_name ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Bidang usaha
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{ auth()->user()->student->trace->business_id ?? 'Belum diisi' }}
                                </dd>
                            </div>

                            @endif

                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="flex flex-col justify-center pt-12 pb-6 text-sm text-center text-gray-400 md:flex-row">
        <div class>Sistem Penelusuran Tamatan SMK Plus Al-Farhan </div>
        <span class="hidden md:px-2 md:block">-</span>
        <div>Made with love by Dd</div>
    </footer>
</x-app-layout>