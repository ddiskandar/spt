<x-guest-layout>
    <div class="flex min-h-screen">
        <div class="flex-1 px-12 mt-12 md:flex md:justify-end">
            <div class="w-full md:w-96">
                @livewire('registration')
            </div>
        </div>
        <div class="flex-1 hidden bg-indigo-600 md:block">
            <div class="max-w-md mx-auto mt-12">
                <a href="/" class="text-sm font-semibold text-white uppercase"><- Kembali ke beranda</a>
                <h2 class="mt-24 text-xl font-bold text-white">Sistem Penelusuran Tamatan</h2>
                <h2 class="text-4xl font-bold text-white">SMK PLus Al-Farhan</h2>
                <p class="mt-3 text-sm text-indigo-100 text-semibold">Gabung bersama banyak alumni lainnya. Jalin erat silaturahmi. Dapatkan banyak manfaat.</p>

                <img class="mt-20" src="/images/undraw_online_ad_re_ol62.svg" alt="">
            </div>
        </div>
    </div>
</x-guest-layout>