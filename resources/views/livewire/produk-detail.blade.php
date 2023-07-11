<div>
    {{-- Detail Produk --}}
    <div class="font-inter pt-3 px-0 mb-8 lg:pt-12 lg:px-12 lg:mb-16 flex flex-wrap md:flex-nowrap justify-center">
        <div class="w-full mb-10 lg:mb-0 md:w-1/2 flex justify-center">
            <img src="{{ env('APP_URL'). '/' .$produk[0]->foto }}" alt="foto produk" class="w-72 lg:w-full shadow-md rounded-xl">
        </div>
        <div class="w-full md:w-1/2 mx-7 lg:ml-14">
            <div>
                <h1 class="font-medium text-3xl lg:text-4xl">{{ $produk[0]->nama }}</h1>
                <h2 class="font-medium text-4xl lg:text-5xl my-7">Rp{{ $produk[0]->harga }}</h2>
            </div>
    
            <div class="divider"></div>
    
            <div class="mb-5">
                <h3 class="font-medium text-2xl mt-7">Spesifikasi Produk</h3>
                <div class="flex mt-6 gap-x-14">
                    <h4 class="font-semibold text-sm">Ukuran</h4>
                    <div>
                        <h4 class="font-normal text-sm">Panjang</h4>
                        <p class="font-normal text-base">{{ $produk[0]->panjang }} {{ $produk[0]->satuan_ukuran }}</p>
                    </div>
                    <div>
                        <h4 class="font-normal text-sm">Lebar</h4>
                        <p class="font-normal text-base">{{ $produk[0]->lebar }} {{ $produk[0]->satuan_ukuran }}</p>
                    </div>
                    <div>
                        <h4 class="font-normal text-sm">Tinggi</h4>
                        <p class="font-normal text-base">{{ $produk[0]->tinggi }} {{ $produk[0]->satuan_ukuran }}</p>
                    </div>
                </div>
                <div class="flex gap-x-14 mt-5">
                    <h4 class="font-semibold text-sm">Bahan</h4>
                    <p class="font-normal text-sm">{{ $produk[0]->nama_bahan }}</p>
                </div>
                <div class="flex gap-x-14 mt-5">
                    <h4 class="font-semibold text-sm">Stok</h4>
                    <p class="font-normal text-sm">{{ $produk[0]->stok }}</p>
                </div>
                <p class="mt-8 mb-3 font-normal text-sm">
                    <span id="deskripsi">{{ Str::words(strip_tags($produk[0]->deskripsi), 33,) }}</span>
                    <span id="dots"></span>
                    <span id="more" style="display: none">{{ $produk[0]->deskripsi }}</span>
                </p>
                <button class="link link-hover font-medium text-sm" onclick="myFunction()" id="myBtn">Lihat Selengkapnya</button>
            </div>
    
            @if ($produk[0]->stok <= 0)
                <div class="flex gap-x-3">
                    <button disabled class="btn btn-ghost capitalize border border-greyMain text-greyMain">
                        <span class="mr-2">Masukkan Keranjang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M4.00436 6.41662L0.761719 3.17398L2.17593 1.75977L5.41857 5.00241H20.6603C21.2126 5.00241 21.6603 5.45012 21.6603 6.00241C21.6603 6.09973 21.6461 6.19653 21.6182 6.28975L19.2182 14.2898C19.0913 14.7127 18.7019 15.0024 18.2603 15.0024H6.00436V17.0024H17.0044V19.0024H5.00436C4.45207 19.0024 4.00436 18.5547 4.00436 18.0024V6.41662ZM6.00436 7.00241V13.0024H17.5163L19.3163 7.00241H6.00436ZM5.50436 23.0024C4.67593 23.0024 4.00436 22.3308 4.00436 21.5024C4.00436 20.674 4.67593 20.0024 5.50436 20.0024C6.33279 20.0024 7.00436 20.674 7.00436 21.5024C7.00436 22.3308 6.33279 23.0024 5.50436 23.0024ZM17.5044 23.0024C16.6759 23.0024 16.0044 22.3308 16.0044 21.5024C16.0044 20.674 16.6759 20.0024 17.5044 20.0024C18.3328 20.0024 19.0044 20.674 19.0044 21.5024C19.0044 22.3308 18.3328 23.0024 17.5044 23.0024Z"></path></svg>
                    </button>
                    <button disabled class="btn btn-ghost capitalize border border-greyMain text-greyMain">
                        Beli Sekarang
                    </button>
                </div>
                <p class="mt-2 text-sm text-error font-medium">*Stok produk telah habis</p>

            @else
                <div class="flex gap-x-3">
                    <form method="post">
                        @csrf
                        <input type="text" name="id_produk" id="id_produk" hidden value="{{ $produk[0]->id }}">
                        <button type="submit" class="btn btn-ghost capitalize border border-greyMain text-greyMain">
                            <span class="mr-2">Masukkan Keranjang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-5 h-5" viewBox="0 0 24 24"><path d="M4.00436 6.41662L0.761719 3.17398L2.17593 1.75977L5.41857 5.00241H20.6603C21.2126 5.00241 21.6603 5.45012 21.6603 6.00241C21.6603 6.09973 21.6461 6.19653 21.6182 6.28975L19.2182 14.2898C19.0913 14.7127 18.7019 15.0024 18.2603 15.0024H6.00436V17.0024H17.0044V19.0024H5.00436C4.45207 19.0024 4.00436 18.5547 4.00436 18.0024V6.41662ZM6.00436 7.00241V13.0024H17.5163L19.3163 7.00241H6.00436ZM5.50436 23.0024C4.67593 23.0024 4.00436 22.3308 4.00436 21.5024C4.00436 20.674 4.67593 20.0024 5.50436 20.0024C6.33279 20.0024 7.00436 20.674 7.00436 21.5024C7.00436 22.3308 6.33279 23.0024 5.50436 23.0024ZM17.5044 23.0024C16.6759 23.0024 16.0044 22.3308 16.0044 21.5024C16.0044 20.674 16.6759 20.0024 17.5044 20.0024C18.3328 20.0024 19.0044 20.674 19.0044 21.5024C19.0044 22.3308 18.3328 23.0024 17.5044 23.0024Z"></path></svg>
                        </button>
                    </form>
            
                    <form method="post">
                        @csrf
                        @method('put')
                        <input type="text" name="id_produk" id="id_produk" hidden value="{{ $produk[0]->id }}">
                        <button type="submit" class="btn btn-ghost capitalize border border-greyMain text-greyMain">
                            Beli Sekarang
                        </button>
                    </form>
                </div>
            @endif
        </div>
    </div>
    
    <div class="divider mx-1 md:mx-12"></div>
    
    {{-- Produk Serupa --}}
    <div class="mt-7 mx-12">
        <h1 class="mb-8 font-medium text-3xl md:text-4xl">Produk Serupa</h1>

        <div class="flex flex-wrap justify-center md:justify-start items-center gap-6 mb-24">
            @foreach ($produkSerupa as $item)
                <a href="{{ route('toko.produk', $item->slug) }}">
                    <div class="card w-80 bg-base-100 shadow-xl">
                        <figure><img src="{{ env('APP_URL'). '/' .$item->foto }}" alt="foto produk" class="w-56 md:w-72 rounded-xl"></figure>
                        <div class="card-body">
                            <h2 class="card-title font-medium text-lg">{{ $item->shortJudul() }}</h2>
                            {{-- <p>{{ $item->shortDeskripsi() }}</p> --}}
                            <div class="card-actions justify-start">
                                <h3 class="font-semibold text-2xl md:text-3xl text-blackMain">Rp {{ $item->harga }}</h3>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>