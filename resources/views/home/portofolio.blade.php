@extends('layouts.home.main')

@push('livewireCSS')
    @livewireStyles
@endpush

@push('livewireJS')
    @livewireScripts
@endpush

@section('container')
    <div class="font-inter pt-9 w-full text-center">
        <h1 class="uppercase text-redMain font-semibold text-3xl sm:text-4xl md:text-5xl">
            Portofolio
        </h1>
        <p class="mt-5 mx-5 sm:mx-0 text-base sm:text-lg md:text-xl text-blackMain">
            Temukan Berbagai Pilihan Produk Berkualitas Tinggi di Portofolio Kami
        </p>
    </div>

    <div class="font-inter mt-10 sm:mt-20 md:mt-28 mx-12 mb-20 sm:mb-32 md:mb-52">
        @livewire('porto-list')
    </div>
@endsection