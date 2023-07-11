<div class="navbar font-inter bg-[#EEEEEE]">
    
    {{-- Mobile --}}
    <div class="flex-1">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'bg-transparent text-black font-bold' : '' }}">Beranda</a></li>
                <li><a href="{{ route('portofolio') }}" class="{{ Request::is('portofolio') ? 'bg-transparent text-black font-bold' : '' }}">Portofolio</a>
                </li>
                <li><a href="{{ route('toko') }}" class="{{ Request::is('toko') ? 'bg-transparent text-black font-bold' : '' }}">Toko</a></li>
                <li><a href="{{ route('custom') }}" class="hidden {{ Request::is('custom') ? 'bg-transparent text-black font-bold' : '' }}">Custom</a></li>
                <li><a href="{{ route('tentang-kami') }}" class="{{ Request::is('tentang-kami') ? 'bg-transparent text-black font-bold' : '' }}">Tentang Kami</a></li>
                @if (!auth()->user())
                    <li><a href="{{ route('register') }}" class="text-[#475467] font-semibold">Register</a></li>
                    <li><a href="{{ route('login') }}" class="bg-[#1D2939] text-white">Login</a></li>
                @endif

                @if (auth()->user())
                    <li><a href="{{ route('cart') }}">
                        Cart
                        @if (auth()->user())
                            <span class="indicator-item badge badge-primary">{{ 
                                DB::table('sales')
                                    ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
                                    ->where('user_id', '=', auth()->user()->id)
                                    ->where('status', '=', 'keranjang')
                                    ->count('sd.id')
                                }}</span>
                        @endif
                    </a></li>
                    <li tabindex="0">
                        <a class="justify-between" href="{{ route('profil') }}">
                            Profil
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z"/></svg>
                        </a>
                        <ul class="p-2 bg-base-100">
                            <li><a>Profile</a></li>
                            @if (auth()->user()->name == 'Admin')
                                <li><a href="http://paperus-deuscode.test/admin">Admin Panel</a></li>
                            @endif
                            <form action="{{ route('logout') }}" method="post">
                                @csrf
                                <li><button>Logout</button></li>
                            </form>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <a href="{{ route('home') }}" class="lg:ml-11 w-52">
            <img src="{{ asset('img/logo-paperus.png') }}" alt="logo">
        </a>
    </div>

    {{-- Website --}}
    <div class="hidden lg:flex">
        <ul class="menu menu-horizontal justify-end px-1 text-[#475467]/60">
            <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'bg-transparent text-black font-bold' : '' }}">Beranda</a></li>
            <li><a href="{{ route('portofolio') }}" class="{{ Request::is('portofolio') ? 'bg-transparent text-black font-bold' : '' }}">Portofolio</a>
            </li>
            <li><a href="{{ route('toko') }}" class="{{ Request::is('toko') ? 'bg-transparent text-black font-bold' : '' }}">Toko</a></li>
            <li><a href="{{ route('custom') }}" class="hidden {{ Request::is('custom') ? 'bg-transparent text-black font-bold' : '' }}">Custom</a></li>
            <li><a href="{{ route('tentang-kami') }}" class="{{ Request::is('tentang-kami') ? 'bg-transparent text-black font-bold' : '' }}">Tentang Kami</a></li>

            @if (!auth()->user())
                <li class="items-center text-xl">|</li>
                <li><a href="{{ route('register') }}" class="text-[#475467] font-semibold">Register</a></li>
                <li><a href="{{ route('login') }}" class="btn bg-[#1D2939] text-white">Login</a></li>
            @endif

            @if (auth()->user())
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full text-redMain">
                            <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-6 mx-auto my-2" viewBox="0 0 24 24"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                        </div>
                    </label>
                    <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="{{ route('profil') }}">Profil</a></li>
                        <li><a href="{{ route('cart') }}">
                            Cart
                            @if (auth()->user())
                                <span class="indicator-item badge badge-primary">{{ 
                                    DB::table('sales')
                                        ->join('sales_detail as sd', 'sd.sales_id', '=', 'sales.id')
                                        ->where('user_id', '=', auth()->user()->id)
                                        ->where('status', '=', 'keranjang')
                                        ->count('sd.id')
                                    }}
                                </span>
                            @endif
                        </a></li>
                        @if (auth()->user()->name == 'Admin')
                            <li><a href="http://paperus-deuscode.test/admin">Admin Panel</a></li>
                        @endif
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <li><button>Logout</button></li>
                        </form>
                    </ul>
                </div>
            @endif
        </ul>
    </div>
</div>
