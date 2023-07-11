@extends('layouts.home.main')

@section('container')
    {{-- Awal Tentang Kami --}}
    <div class="mx-6 sm:mx-12 font-inter pt-9 text-center">
        <h1 class="uppercase text-redMain font-semibold text-3xl sm:text-4xl md:text-5xl">
            Tentang Kami
        </h1>
        <p class="mt-4 sm:mt-8 lg:px-32 xl:px-72 text-base sm:text-lg md:text-xl font-semibold text-blackMain">
            Paperus adalah sebuah perusahaan custom packanging No.1 Di Indonesia dengan lebih dari 99ribu pelanggan di seluruh daerah dan pelosok negeri. Paperus selalu memberikan pelayanan terbaik dengan desain box terupdate dengan lebih dari 100+ model yang dapat dipilih dan di modifikasi sesuai keinginan pelanggan
        </p>
    </div>
    {{-- Akhir Tentang Kami --}}

    {{-- Awal Keunggulan --}}
    <div class="px-10 lg:px-40 font-inter bg-pinkkMain h-[456px] mt-80 lg:mt-96">
        <div class="flex justify-center -translate-y-60">
            <img src="{{ asset('img/about-photo.png') }}" alt="foto tentang kami">
        </div>

        <div class="text-center -translate-y-36 flex flex-wrap justify-center lg:justify-between gap-10">
            <div>
                <h1 class="text-5xl xl:text-8xl font-semibold">99k+</h1>
                <h2 class="text-2xl xl:text-3xl font-semibold">Product Sold</h2>
            </div>
            <div>
                <h1 class="text-5xl xl:text-8xl font-semibold">55k+</h1>
                <h2 class="text-2xl xl:text-3xl font-semibold">Brand Partnership</h2>
            </div>
            <div>
                <h1 class="text-5xl xl:text-8xl font-semibold">99k+</h1>
                <h2 class="text-2xl xl:text-3xl font-semibold">Customer Satisfied</h2>
            </div>
        </div>
    </div>
    {{-- Akhir Keunggulan --}}

    {{-- Awal Testimoni --}}
    <div class="font-inter mt-16 mb-12">
        <h1 class="uppercase text-redMain font-semibold text-3xl sm:text-4xl md:text-5xl text-center">
            Testimonial
        </h1>

        <div class="flex flex-wrap justify-center mx-6 xl:mx-44 lg:gap-x-11">
            <div class="bg-pinkkMain shadow-md rounded-xl w-full lg:w-80 px-3 mt-8 lg:mt-14 py-4">
                <div class="flex items-center justify-start">
                    <img src="{{ asset('img/user-foto-1.png') }}" alt="foto user" class="mask mask-circle w-11">
                    <h1 class="font-medium text-base ml-3">
                        Nadia Hamira (Toko Kue Yu)
                    </h1>
                </div>
                <p class="text-sm mt-3">
                    Saya beli custom dus berbentuk segitiga dan mendapatkan desain yang sesuai dengan yang saya inginkan. Pengerjaan sangat cepat dan sesuai dengan estimasi pengiriman. Terima kasih paperus sangat terpercaya.
                </p>
            </div>

            <div class="bg-pinkkMain shadow-md rounded-xl w-full lg:w-80 px-3 mt-8 lg:mt-14 py-4">
                <div class="flex items-center justify-start">
                    <img src="{{ asset('img/user-foto-2.png') }}" alt="foto user" class="mask mask-circle w-11">
                    <h1 class="font-medium text-base ml-3">
                        Dillania (Hampers Natal)
                    </h1>
                </div>
                <p class="text-sm mt-3">
                    Paper us ini memang sangat juara. Saya sudah menggunakan jasa pembuatan packingan untuk hampers saya dari tahun 2020 dan selalu memuaskan hasilnya tidak pernah mengecewakan.
                </p>
            </div>

            <div class="bg-pinkkMain shadow-md rounded-xl w-full lg:w-80 px-3 mt-8 lg:mt-14 py-4">
                <div class="flex items-center justify-start">
                    <img src="{{ asset('img/user-foto-3.png') }}" alt="foto user" class="mask mask-circle w-11">
                    <h1 class="font-medium text-base ml-3">
                        Pak Bagus (Ayam Geprex Bagus)
                    </h1>
                </div>
                <p class="text-sm mt-3">
                    Saya baru beralih ke toko ini semenjak langganan saya slow respon dan selalu tidak tepat waktu dalam mengirim box. Alhamdulillah semenjak pakai paperus pesanan saya selalu tepat waktu dan packing rapih sekali. 
                </p>
            </div>
        </div>
    </div>
    {{-- Akhir Testimoni --}}
@endsection
