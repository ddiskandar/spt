<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 md:col-span-4">
            <div class="-space-y-px bg-white rounded-md" x-ref="radiogroup">
                <template x-for="(option, index) in Object.values(options)" :key="index">
                    <div :class="{
                            'border-gray-200': !(active === index),
                            'bg-indigo-50 border-indigo-200 z-10': active === index,
                            'rounded-tl-md rounded-tr-md': index === 0,
                            'rounded-bl-md rounded-br-md': index === (Object.values(options).length - 1),
                        }" class="relative z-10 flex p-4 border border-indigo-200 rounded-tl-md rounded-tr-md bg-indigo-50">
                        <div class="flex items-center h-5">
                            <input :id="'notification_frequency_option-'+index" name="frequency_setting" type="radio" @click="select(index)" @indexdown.space="select(index)" @indexdown.arrow-up="onArrowUp(index)" @indexdown.arrow-down="onArrowDown(index)" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" :checked="active === index">
                        </div>
                        <label :for="'notification_frequency_option-'+index" class="flex flex-col ml-3 cursor-pointer">
                            <span :class="{ 'text-indigo-900': active === index, 'text-gray-900': !(active === index) }" class="block text-sm font-medium text-indigo-900" x-text="option.title"></span>
                            <span :class="{ 'text-indigo-700': active === index, 'text-gray-500': !(active === index) }" class="block text-sm text-indigo-700" x-text="option.description"></span>
                        </label>
                    </div>
                </template>

                <div :class="{
                            'border-gray-200': !(active === index),
                            'bg-indigo-50 border-indigo-200 z-10': active === index,
                            'rounded-tl-md rounded-tr-md': index === 0,
                            'rounded-bl-md rounded-br-md': index === (Object.values(options).length - 1),
                        }" class="relative z-10 flex p-4 border border-indigo-200 rounded-tl-md rounded-tr-md bg-indigo-50">
                    <div class="flex items-center h-5">
                        <input :id="'notification_frequency_option-'+index" name="frequency_setting" type="radio" @click="select(index)" @indexdown.space="select(index)" @indexdown.arrow-up="onArrowUp(index)" @indexdown.arrow-down="onArrowDown(index)" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" :checked="active === index" id="notification_frequency_option-0" checked="checked">
                    </div>
                    <label :for="'notification_frequency_option-'+index" class="flex flex-col ml-3 cursor-pointer" for="notification_frequency_option-0">
                        <span :class="{ 'text-indigo-900': active === index, 'text-gray-900': !(active === index) }" class="block text-sm font-medium text-indigo-900" x-text="option.title">Never</span>
                        <span :class="{ 'text-indigo-700': active === index, 'text-gray-500': !(active === index) }" class="block text-sm text-indigo-700" x-text="option.description">Don't receive any notifications.</span>
                    </label>
                </div>

                <div :class="{
                            'border-gray-200': !(active === index),
                            'bg-indigo-50 border-indigo-200 z-10': active === index,
                            'rounded-tl-md rounded-tr-md': index === 0,
                            'rounded-bl-md rounded-br-md': index === (Object.values(options).length - 1),
                        }" class="relative flex p-4 border border-gray-200">
                    <div class="flex items-center h-5">
                        <input :id="'notification_frequency_option-'+index" name="frequency_setting" type="radio" @click="select(index)" @indexdown.space="select(index)" @indexdown.arrow-up="onArrowUp(index)" @indexdown.arrow-down="onArrowDown(index)" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" :checked="active === index" id="notification_frequency_option-1">
                    </div>
                    <label :for="'notification_frequency_option-'+index" class="flex flex-col ml-3 cursor-pointer" for="notification_frequency_option-1">
                        <span :class="{ 'text-indigo-900': active === index, 'text-gray-900': !(active === index) }" class="block text-sm font-medium text-gray-900" x-text="option.title">As they're posted</span>
                        <span :class="{ 'text-indigo-700': active === index, 'text-gray-500': !(active === index) }" class="block text-sm text-gray-500" x-text="option.description">Receive notifications when relevant jobs are posted.</span>
                    </label>
                </div>

                <div :class="{
                            'border-gray-200': !(active === index),
                            'bg-indigo-50 border-indigo-200 z-10': active === index,
                            'rounded-tl-md rounded-tr-md': index === 0,
                            'rounded-bl-md rounded-br-md': index === (Object.values(options).length - 1),
                        }" class="relative flex p-4 border border-gray-200">
                    <div class="flex items-center h-5">
                        <input :id="'notification_frequency_option-'+index" name="frequency_setting" type="radio" @click="select(index)" @indexdown.space="select(index)" @indexdown.arrow-up="onArrowUp(index)" @indexdown.arrow-down="onArrowDown(index)" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" :checked="active === index" id="notification_frequency_option-2">
                    </div>
                    <label :for="'notification_frequency_option-'+index" class="flex flex-col ml-3 cursor-pointer" for="notification_frequency_option-2">
                        <span :class="{ 'text-indigo-900': active === index, 'text-gray-900': !(active === index) }" class="block text-sm font-medium text-gray-900" x-text="option.title">Daily at most</span>
                        <span :class="{ 'text-indigo-700': active === index, 'text-gray-500': !(active === index) }" class="block text-sm text-gray-500" x-text="option.description">Receive notifications once a day if any relevant jobs were posted.</span>
                    </label>
                </div>

                <div :class="{
                            'border-gray-200': !(active === index),
                            'bg-indigo-50 border-indigo-200 z-10': active === index,
                            'rounded-tl-md rounded-tr-md': index === 0,
                            'rounded-bl-md rounded-br-md': index === (Object.values(options).length - 1),
                        }" class="relative flex p-4 border border-gray-200 rounded-bl-md rounded-br-md">
                    <div class="flex items-center h-5">
                        <input :id="'notification_frequency_option-'+index" name="frequency_setting" type="radio" @click="select(index)" @indexdown.space="select(index)" @indexdown.arrow-up="onArrowUp(index)" @indexdown.arrow-down="onArrowDown(index)" class="w-4 h-4 text-indigo-600 border-gray-300 cursor-pointer focus:ring-indigo-500" :checked="active === index" id="notification_frequency_option-3">
                    </div>
                    <label :for="'notification_frequency_option-'+index" class="flex flex-col ml-3 cursor-pointer" for="notification_frequency_option-3">
                        <span :class="{ 'text-indigo-900': active === index, 'text-gray-900': !(active === index) }" class="block text-sm font-medium text-gray-900" x-text="option.title">Weekly at most</span>
                        <span :class="{ 'text-indigo-700': active === index, 'text-gray-500': !(active === index) }" class="block text-sm text-gray-500" x-text="option.description">Receive notifications once a week if any relevant jobs were posted.</span>
                    </label>
                </div>
            </div>
        </div>

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="block w-full mt-1" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>