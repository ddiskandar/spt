<x-slide-overs wire:model="panel">
    <x-slot name="title">
        <h2 id="slide-over-heading" class="mt-6 text-xl font-bold text-gray-900">
            {{ $studentDetail->name ?? '' }}
        </h2>
        <p class="text-sm">{{ $studentDetail->jurusan->name ?? '' }} / {{ $studentDetail->year_id ?? '' }}</p>
    </x-slot>

    <div class="">
        <x-jet-label value="Nama Lengkap" />
        <p class="text-sm text-gray-600">
            {{ $studentDetail->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6">
        <x-jet-label value="NIPD" />
        <p class="text-sm text-gray-600">
            {{ $studentDetail->nipd ?? '...' }}
        </p>
    </div>
    <div class="mt-6">
        <x-jet-label value="Angkatan" />
        <p class="text-sm text-gray-600">
            {{ $studentDetail->angkatan->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6">
        <x-jet-label value="Jurusan" />
        <p class="text-sm text-gray-600">
            {{ $studentDetail->jurusan->name ?? '...' }}
        </p>
    </div>
    <div class="mt-6">
        <x-jet-label value="Tanggal lahir" />
        <p class="text-sm text-gray-600">
            {{ $studentDetail->birth_date ?? '...' }}
        </p>
    </div>
    


</x-slide-overs>