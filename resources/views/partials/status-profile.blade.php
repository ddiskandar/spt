<div class="pt-6">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-6 py-4 bg-white border-b border-gray-200">
                <div class="text-lg font-semibold">
                    Lengkapi profil
                </div>
                <div class="mt-1 text-sm text-gray-500">
                    Jalin erat silaturahmi dengan selalu memperbaharui data kamu dengan yang terbaru.
                </div>
            </div>
            <div class="bg-white ">
                <nav aria-label="Progress">
                    <ol class="divide-y divide-gray-300 rounded-md md:flex md:divide-y-0">
                        <li class="relative md:flex-1 md:flex">
                            <a href="/user/profile" class="flex items-center w-full group">
                                <span class="flex items-center px-6 py-4 text-sm font-medium">

                                    @isset (auth()->user()->student->trace->activity_id)

                                    <x-status-checked />

                                    @else

                                    <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                        <span class="text-indigo-600">01</span>
                                    </span>

                                    @endisset

                                    <span class="ml-4 text-sm font-medium text-indigo-600">Aktivitas</span>
                                </span>
                            </a>

                            <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                        <li class="relative md:flex-1 md:flex">
                            <a href="/user/profile" class="flex items-center w-full group">
                                <span class="flex items-center px-6 py-4 text-sm font-medium">
                                    @isset (auth()->user()->student->profile->photo)

                                    <x-status-checked />

                                    @else

                                    <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                        <span class="text-indigo-600">02</span>
                                    </span>

                                    @endisset
                                    <span class="ml-4 text-sm font-medium text-indigo-600">Photo</span>
                                </span>
                            </a>

                            <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>

                        <li class="relative md:flex-1 md:flex">
                            <a href="/user/profile" class="flex items-center w-full group">
                                <span class="flex items-center px-6 py-4 text-sm font-medium">
                                    @isset (auth()->user()->student->profile->testimoni)

                                    <x-status-checked />

                                    @else

                                    <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                        <span class="text-indigo-600">03</span>
                                    </span>

                                    @endisset

                                    <span class="ml-4 text-sm font-medium text-indigo-600">Testimoni</span>
                                </span>
                            </a>

                            <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                        <li class="relative md:flex-1 md:flex">
                            <a href="/user/profile" class="flex items-center w-full group">
                                <span class="flex items-center px-6 py-4 text-sm font-medium">
                                    @isset (auth()->user()->student->profile->facebook)

                                    <x-status-checked />

                                    @else

                                    <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                        <span class="text-indigo-600">04</span>
                                    </span>

                                    @endisset

                                    <span class="ml-4 text-sm font-medium text-indigo-600">Akun sosial media</span>
                                </span>
                            </a>

                            <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                    <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                </svg>
                            </div>
                        </li>
                        <li class="relative md:flex-1 md:flex">
                            <a href="/user/profile" class="flex items-center w-full group">
                                <span class="flex items-center px-6 py-4 text-sm font-medium">
                                    @if (auth()->user()->student->profile->join_wa == '1')

                                    <x-status-checked />

                                    @else

                                    <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                        <span class="text-indigo-600">05</span>
                                    </span>

                                    @endif

                                    <span class="ml-4 text-sm font-medium text-indigo-600">Gabung Grup WA</span>
                                </span>
                            </a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>