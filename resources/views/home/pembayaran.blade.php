@extends('layouts.home.main')

@section('container')
    <div class="font-inter pt-20 mx-10 text-center md:text-left lg:mx-20 mb-20 flex items-center">
        <div class="w-full md:w-1/2 justify-center shadow-xl md:shadow-none py-5 md:py-0">
            <h1 class="font-bold text-3xl mb-3">Pembelian Berhasil</h1>
            <p class="font-medium text-base mb-3">Terima kasih telah membeli produk kami. Silakan hubungi kami di WhatsApp berikut <span class="text-green-600">+62 821 8108 0809</span> untuk lebih lanjut terkait pesanan Anda.</p>
            <a href="{{ route('toko') }}" class="btn btn-ghost bg-redMain border-redMain text-white">Kembali</a>
        </div>

        <div class="hidden w-full md:w-1/2 md:flex justify-center">
            <img src="{{ asset('img/payment-success.svg') }}" alt="" class="md:w-64 lg:w-80">
        </div>
    </div>
@endsection