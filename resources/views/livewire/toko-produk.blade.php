<div>
    {{-- Search --}}
    <div class="font-inter px-12 pt-14 flex flex-wrap lg:flex-nowrap items-center">
        <div class="w-full lg:w-1/2">
            <p class="font-semibold text-base md:text-lg text-greyMain text-center lg:text-start">
                Dapatkan Koleksi Produk Terbaik Yang Sesuai Dengan Kebutuhan Anda
            </p>
        </div>

        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mt-5 lg:mt-0">
            <div class="form-control">
                <div class="input-group">
                    <input wire:model="search" type="text" placeholder="Cari di Toko" class="input input-bordered w-[300px] md:w-[400px] xl:w-[532px]" />
                    <button class="btn btn-square btn-ghost btn-disabled border-l-0 border-y-1 border-r-1 border-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 h-6 text-greyMain" viewBox="0 0 24 24"><path d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Tab --}}
    <div class="font-inter px-3 md:px-12 pt-8 md:pt-16 w-full flex justify-center items-center">
        <div class="w-full text-lg font-semibold text-center text-greyMain">
            <ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0" role="tablist" data-te-nav-ref>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a wire:click="produkByKateogri" class="tab-custom cursor-pointer" role="tab" data-te-toggle="pill"
                    {{ $kategori == '' ? 'aria-selected="true" data-te-nav-active' : '' }}>
                        Semua
                    </a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a wire:click="produkByKateogri('box')" class="tab-custom cursor-pointer" role="tab" data-te-toggle="pill"
                    {{ $kategori == 'box' ? 'aria-selected="true" data-te-nav-active' : '' }}>
                        Box
                    </a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a wire:click="produkByKateogri('parcel')" class="tab-custom cursor-pointer" role="tab" data-te-toggle="pill"
                    {{ $kategori == 'parcel' ? 'aria-selected="true" data-te-nav-active' : '' }}>
                        Parcel
                    </a>
                </li>
                <li role="presentation" class="flex-grow basis-0 text-center">
                    <a wire:click="produkByKateogri('hang tag')" class="tab-custom cursor-pointer" role="tab" data-te-toggle="pill"
                    {{ $kategori == 'hang tag' ? 'aria-selected="true" data-te-nav-active' : '' }}>
                        Hang Tag
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Produk Card --}}
    <div class="font-inter px-12 pt-11 w-full flex flex-wrap justify-center items-center gap-6">
        @foreach ($produk as $item)
            <a href="{{ route('toko.produk', $item->slug) }}">
                <div class="card w-80 bg-base-100 shadow-xl">
                    <figure><img src="{{ $item->foto }}" alt="foto produk" class="w-56 md:w-72 rounded-xl"></figure>
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
    
    {{-- Pagination --}}
    <div class="font-inter mt-12 flex justify-center items-center">
        {{ $produk->links() }}
    </div>

    <div class="mb-20 lg:mb-40"></div>
</div>