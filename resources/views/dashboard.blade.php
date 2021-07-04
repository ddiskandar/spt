<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-6 py-4 bg-white border-b border-gray-200">
                    <div class="text-lg font-semibold">
                        Complete your profile
                    </div>
                    <div class="mt-1 text-sm text-gray-500">
                        Having a detailed profile page makes you stand out in front of employers.
                    </div>
                </div>
                <div class="bg-white ">
                    <nav aria-label="Progress">
                        <ol class="divide-y divide-gray-300 rounded-md md:flex md:divide-y-0">
                            <li class="relative md:flex-1 md:flex">
                                <a href="https://stackjobs.dev/user/profile" class="flex items-center w-full group">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg> </span>

                                        <span class="ml-4 text-sm font-medium text-gray-900">Login information</span>
                                    </span>
                                </a>

                                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="relative md:flex-1 md:flex">
                                <a href="https://stackjobs.dev/user/profile" class="flex items-center w-full group">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg> </span>

                                        <span class="ml-4 text-sm font-medium text-gray-900">About you</span>
                                    </span>
                                </a>

                                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="relative md:flex-1 md:flex">
                                <a href="https://stackjobs.dev/user/profile" class="flex items-center w-full group">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg> </span>

                                        <span class="ml-4 text-sm font-medium text-gray-900">Skills</span>
                                    </span>
                                </a>

                                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="relative md:flex-1 md:flex">
                                <a href="https://stackjobs.dev/user/profile" class="flex items-center w-full group">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 border-2 border-indigo-600 rounded-full" aria-current="step">
                                            <span class="text-indigo-600">04</span>
                                        </span>

                                        <span class="ml-4 text-sm font-medium text-indigo-600">Favorite stacks</span>
                                    </span>
                                </a>

                                <div class="absolute top-0 right-0 hidden w-5 h-full md:block" aria-hidden="true">
                                    <svg class="w-full h-full text-gray-300" viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                        <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor" stroke-linejoin="round"></path>
                                    </svg>
                                </div>
                            </li>
                            <li class="relative md:flex-1 md:flex">
                                <a href="https://stackjobs.dev/user/profile" class="flex items-center w-full group">
                                    <span class="flex items-center px-6 py-4 text-sm font-medium">
                                        <span class="flex items-center justify-center flex-shrink-0 w-10 h-10 bg-indigo-600 rounded-full group-hover:bg-indigo-800">
                                            <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg> </span>

                                        <span class="ml-4 text-sm font-medium text-gray-900">Your values</span>
                                    </span>
                                </a>

                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                <div class="px-6 py-4 bg-white border-b border-gray-200">
                    <div class="text-lg font-semibold">
                        Profile preview
                    </div>
                    <div class="mt-1 text-sm text-gray-500">
                        Here's how employers see your profile.
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
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
                                dd@smkplusalfarhan.sch.id
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Short bio
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                Solo Developer
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Country
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                Indonesia
                            </dd>
                        </div>
                        <div class="sm:col-span-2">
                            <dt class="text-sm font-medium text-gray-500">
                                Resume
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                Using TALL stack
                            </dd>
                        </div>

                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Skills
                            </dt>
                            <dd class="mt-1">
                                <div class="w-full">
                                    <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium text-gray-100 bg-gray-700">
                                        Skill level: Junior
                                    </span>
                                    <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                        Tailwind CSS
                                    </span>
                                    <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                        Laravel
                                    </span>
                                    <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                        Livewire
                                    </span>
                                </div>
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Values
                            </dt>
                            <dd class="mt-1">
                                <div class="w-full">
                                    <span class="inline-flex rounded-full items-center my-1 py-0.5 pl-2.5 pr-2.5 text-sm font-medium bg-indigo-100 text-indigo-700">
                                        Low stress
                                    </span>
                                </div>
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Favorite tech stacks
                            </dt>
                            <dd class="mt-1">
                                <div class="w-full">
                                    <div class="text-sm text-gray-700">No stacks added.</div>
                                </div>
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                GitHub profile
                            </dt>
                            <dd class="mt-1">
                                <div class="w-full">
                                    <a href="https://github.com/ddiskandar" class="font-mono text-gray-800 hover:text-black" target="_blank">
                                        ddiskandar
                                    </a>
                                </div>
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Portfolio
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                    <div class="p-3 text-gray-700">No portfolio links.</div>
                                </ul>
                            </dd>
                        </div>
                        <div class="sm:col-span-1">
                            <dt class="text-sm font-medium text-gray-500">
                                Attachments
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                <ul class="border border-gray-200 divide-y divide-gray-200 rounded-md">
                                    <div class="p-3 text-gray-700">No attachments.</div>
                                </ul>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-24 pb-6 text-center">
        <p class="text-sm text-gray-400">Sistem Penelusuran Tamatan SMK Plus Al-Farhan. Developed with
            < /> and <3 by Dd. </p>
    </div>
</x-app-layout>