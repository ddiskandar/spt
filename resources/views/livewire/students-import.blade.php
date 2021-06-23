<div>

    <x-jet-button wire:click="import" wire:loading.attr="disabled" class="ml-4">
        {{ __('Impor Data Tamatan') }}
    </x-jet-button>

    <!-- Delete User Confirmation Modal -->
    <x-jet-dialog-modal wire:model="studentImport">
        <x-slot name="title">
            <div class="flex items-center justify-between mt-4">
                <h1 class="font-semibold font-3xl">
                    {{ __('Import Data Tamatan') }}
                </h1>
                <x-button-icon wire:click="$toggle('studentImport')">
                    <x-icon-x-circle />
                </x-button-icon>
            </div>
        </x-slot>

        <x-slot name="content">
            <div class="grid grid-cols-6 gap-6">

                <div class="col-span-6 pb-24 mt-2">
                    <x-jet-label for="file" :value="__('Pilih file Excel')" />
                    <input wire:model.defer="file" id="file" class="block w-full mt-1" type="file" name="file">
                    @if($errorMessages) <p class="mt-2 text-sm text-red-600">{{ $errorMessages }}</p> @endif
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex justify-between">
                <a href="/xlsx/contoh_format_impor.xlsx">
                    <x-jet-secondary-button>
                        {{ __('Contoh Format') }}
                    </x-jet-secondary-button>
                </a>

                <x-jet-button class="ml-2" wire:click="store" wire:loading.attr="disabled">
                    {{ __('Proses Impor') }}
                </x-jet-button>
            </div>
        </x-slot>

    </x-jet-dialog-modal>
</div>