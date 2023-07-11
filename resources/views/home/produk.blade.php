@extends('layouts.home.main')

@push('livewireCSS')
    @livewireStyles
@endpush

@push('livewireJS')
    @livewireScripts
@endpush

@section('container')
    <div class="font-inter pt-7 pl-6 mb-6 lg:pt-14 lg:pl-12 lg:mb-12 w-full flex justify-start">
        <div class="text-sm breadcrumbs">
            <ul>
                <li><a href="{{ route('home') }}">Beranda</a></li>
                <li><a href="{{ route('toko') }}">Toko</a></li>
                <li>{{ $produk[0]->nama_kategori }}</li>
                <li>{{ $produk[0]->nama }}</li>
            </ul>
        </div>
    </div>
    <div class="divider px-1 lg:px-10"></div>
    @livewire('produk-detail')

    <script>
        function myFunction() {
            const dots = document.getElementById("dots");
            const moreText = document.getElementById("more");
            const btnText = document.getElementById("myBtn");
            const desc = document.getElementById("deskripsi");
    
            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Lihat Selengkapnya";
                moreText.style.display = "none";
                desc.style.display = "inline";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Lihat Sedikit";
                moreText.style.display = "inline";
                desc.style.display = "none";
            }
        }
    </script>
@endsection