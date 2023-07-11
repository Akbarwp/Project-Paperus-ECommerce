@extends('layouts.home.main')

@section('container')
    {{-- Awal Hero Section --}}
    <div class="font-inter pt-10 pb-20 lg:pt-20 px-5 lg:px-0 lg:pl-12 w-full bg-[#EEEEEE] flex items-center">
        <div class="w-full lg:w-1/2">
            <h1 class="uppercase text-redMain font-extrabold text-3xl lg:text-5xl text-center lg:text-left">
                Desain Kemasan Yang Menarik
            </h1>
            <p class="mt-9 text-center lg:text-left lg:pr-28 text-sm md:text-base text-blackMain/50">
                Buat produk Anda menonjol dengan desain kemasan yang menarik dan profesional dengan kemasan kustom dengan
                cetakan logo, ukuran, dan bentuk yang Anda inginkan
            </p>
        </div>
        <div class="lg:w-1/2 lg:flex lg:justify-end hidden">
            <img src="{{ asset('img/homepage-place-image.png') }}" alt="" class="h-fit">
        </div>
    </div>
    {{-- Akhir Hero Section --}}

    {{-- Awal Brand Partner --}}
    <div class="mx-12 -translate-y-10 lg:-translate-y-28 font-inter bg-[#FAFAFA] items-center rounded-2xl shadow-2xl">
        <div class="text-center py-5 lg:py-14">
            <h1 class="font-extrabold px-2 md:px-4 text-xl md:text-3xl text-greyMain mb-2.5">
                Telah Bekerja Sama dengan Berbagai Brand dan Bisnis
            </h1>
            <p class="text-sm md:text-base px-5 text-blackMain/50">
                Kami bangga bermitra dengan merek-merek terkemuka untuk memberikan solusi kemasan terbaik bagi pelanggan
                kami
            </p>
        </div>

        <div class="flex flex-wrap justify-center items-center gap-3 lg:gap-6 pb-14 lg:pb-28">
            <img src="{{ asset('img/brand-partner-1.png') }}" alt="brand-partner1" class="rounded-lg w-fit">
            <img src="{{ asset('img/brand-partner-2.png') }}" alt="brand-partner2" class="rounded-lg w-fit">
            <img src="{{ asset('img/brand-partner-3.png') }}" alt="brand-partner3" class="rounded-lg w-fit">
            <img src="{{ asset('img/brand-partner-4.png') }}" alt="brand-partner4" class="rounded-lg w-fit">
            <img src="{{ asset('img/brand-partner-5.png') }}" alt="brand-partner5" class="rounded-lg w-fit">
        </div>
    </div>
    {{-- Akhir Brand Partner --}}

    {{-- Awal Keunggulan --}}
    <div class="sm:mt-6 font-inter">
        <div class="text-center mb-12 lg:mb-24">
            <h1 class="font-bold px-4 md:px-0 text-4xl text-redMain">
                Nikmati Kemudahan Bersama Kami
            </h1>
        </div>

        <div class="flex flex-wrap sm:flex-nowrap justify-between items-center gap-6 pb-10 lg:pb-28">
            <div class="flex justify-center flex-wrap">
                <div class="w-[106px] h-[106px] bg-greyMain/[.15] rounded-[30px] flex justify-center items-center text-redMain">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-14" viewBox="0 0 24 24">
                        <path
                            d="M21 8C22.1046 8 23 8.89543 23 10V14C23 15.1046 22.1046 16 21 16H19.9381C19.446 19.9463 16.0796 23 12 23V21C15.3137 21 18 18.3137 18 15V9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9V16H3C1.89543 16 1 15.1046 1 14V10C1 8.89543 1.89543 8 3 8H4.06189C4.55399 4.05369 7.92038 1 12 1C16.0796 1 19.446 4.05369 19.9381 8H21ZM7.75944 15.7849L8.81958 14.0887C9.74161 14.6662 10.8318 15 12 15C13.1682 15 14.2584 14.6662 15.1804 14.0887L16.2406 15.7849C15.0112 16.5549 13.5576 17 12 17C10.4424 17 8.98882 16.5549 7.75944 15.7849Z">
                        </path>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <h2 class="font-semibold text-greyMain text-2xl mb-4">
                        Konsultasi Produk
                    </h2>

                    <p class="text-sm text-greyMain mx-2 md:mx-12">
                        Bicarakan Kebutuhan Produk Anda Bersama Kami
                    </p>
                </div>
            </div>

            <div class="flex justify-center flex-wrap">
                <div class="w-[106px] h-[106px] bg-greyMain/[.15] rounded-[30px] flex justify-center items-center text-redMain">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-14" viewBox="0 0 24 24">
                        <path
                            d="M5.32894 3.27158C6.56203 2.8332 7.99181 3.10749 8.97878 4.09446C9.96603 5.08171 10.2402 6.51202 9.80129 7.74535L20.646 18.5902L18.5247 20.7115L7.67887 9.86709C6.44578 10.3055 5.016 10.0312 4.02903 9.04421C3.04178 8.05696 2.76761 6.62665 3.20652 5.39332L5.44325 7.63C6.02903 8.21578 6.97878 8.21578 7.56457 7.63C8.15035 7.04421 8.15035 6.09446 7.56457 5.50868L5.32894 3.27158ZM15.6963 5.15512L18.8783 3.38736L20.2925 4.80157L18.5247 7.98355L16.757 8.3371L14.6356 10.4584L13.2214 9.04421L15.3427 6.92289L15.6963 5.15512ZM8.62523 12.9333L10.7465 15.0546L5.7968 20.0044C5.21101 20.5902 4.26127 20.5902 3.67548 20.0044C3.12415 19.453 3.09172 18.5793 3.57819 17.99L3.67548 17.883L8.62523 12.9333Z">
                        </path>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <h2 class="font-semibold text-greyMain text-2xl mb-4">
                        Custom Produk
                    </h2>

                    <p class="text-sm text-greyMain mx-2 md:mx-12">
                        Produk yang Didesain Khusus untuk Kebutuhan Anda
                    </p>
                </div>
            </div>

            <div class="flex justify-center flex-wrap">
                <div class="w-[106px] h-[106px] bg-greyMain/[.15] rounded-[30px] flex justify-center items-center text-redMain">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-14" viewBox="0 0 24 24">
                        <path
                            d="M6.00488 9H19.9433L20.4433 7H8.00488V5H21.7241C22.2764 5 22.7241 5.44772 22.7241 6C22.7241 6.08176 22.7141 6.16322 22.6942 6.24254L20.1942 16.2425C20.083 16.6877 19.683 17 19.2241 17H5.00488C4.4526 17 4.00488 16.5523 4.00488 16V4H2.00488V2H5.00488C5.55717 2 6.00488 2.44772 6.00488 3V9ZM6.00488 23C4.90031 23 4.00488 22.1046 4.00488 21C4.00488 19.8954 4.90031 19 6.00488 19C7.10945 19 8.00488 19.8954 8.00488 21C8.00488 22.1046 7.10945 23 6.00488 23ZM18.0049 23C16.9003 23 16.0049 22.1046 16.0049 21C16.0049 19.8954 16.9003 19 18.0049 19C19.1095 19 20.0049 19.8954 20.0049 21C20.0049 22.1046 19.1095 23 18.0049 23Z">
                        </path>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <h2 class="font-semibold text-greyMain text-2xl mb-4">
                        Pesan Produk
                    </h2>

                    <p class="text-sm text-greyMain mx-2 md:mx-12">
                        Pesan Produk yang Anda Inginkan dengan Mudah dan Aman
                    </p>
                </div>
            </div>

            <div class="flex justify-center flex-wrap">
                <div class="w-[106px] h-[106px] bg-greyMain/[.15] rounded-[30px] flex justify-center items-center text-redMain">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-14" viewBox="0 0 24 24">
                        <path
                            d="M17 8H20L23 12.0557V18H20.9646C20.7219 19.6961 19.2632 21 17.5 21C15.7368 21 14.2781 19.6961 14.0354 18H8.96456C8.72194 19.6961 7.26324 21 5.5 21C3.73676 21 2.27806 19.6961 2.03544 18H1V6C1 5.44772 1.44772 5 2 5H16C16.5523 5 17 5.44772 17 6V8ZM17 10V13H21V12.715L18.9917 10H17Z">
                        </path>
                    </svg>
                </div>
                <div class="text-center mt-4">
                    <h2 class="font-semibold text-greyMain text-2xl mb-4">
                        Produk Kirim
                    </h2>

                    <p class="text-sm text-greyMain mx-2 md:mx-12">
                        Produk Dikirim ke Alamat Tujuan Anda Dengan Cepat dan Efisien
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir Keunggulan --}}

    {{-- Awal Produk --}}
    <div class="mx-12 font-inter bg-[#FAFAFA] items-center rounded-2xl shadow-2xl">
        <div class="text-center py-12">
            <h1 class="font-extrabold text-3xl text-redMain mb-2.5">
                Jenis-Jenis Box Packaging
            </h1>
        </div>

        <div class="w-full h-full items-center justify-center py-2 sm:py-8 px-10 sm:px-24 pb-28">
            <div class="relative flex items-center justify-center">
                <button aria-label="slide backward" class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer" id="prev">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="mx-auto overflow-x-hidden overflow-y-hidden">
                    <div id="slider" class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-2.png') }}" alt="carimg/carousel-image2"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-3.png') }}" alt="carimg/carousel-image3"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-4.png') }}" alt="carimg/carousel-image4"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-2.png') }}" alt="carimg/carousel-image2"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-3.png') }}" alt="carimg/carousel-image3"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-4.png') }}" alt="carimg/carousel-image4"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-2.png') }}" alt="carimg/carousel-image2"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-3.png') }}" alt="carimg/carousel-image3"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-4.png') }}" alt="carimg/carousel-image4"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-2.png') }}" alt="carimg/carousel-image2"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-3.png') }}" alt="carimg/carousel-image3"
                                class="object-cover object-center w-full" />
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="{{ asset('img/carousel-image-4.png') }}" alt="carimg/carousel-image4"
                                class="object-cover object-center w-full" />
                        </div>
                    </div>
                </div>
                <button aria-label="slide forward" class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400" id="next">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    {{-- Akhir Produk --}}

    {{-- Awal Kontak --}}
    <div class="mt-24 mx-12 font-inter flex flex-wrap mb-20 sm:mb-52">
        <div id="map" class="w-full lg:w-1/2 rounded-2xl mb-12 lg:mb-0"></div>
        <div class="grid grid-rows-3 gap-y-10 justify-center lg:gap-y-10 w-full mx-5 sm:mx-0 lg:w-1/2 lg:pl-14 xl:pl-36">
            <div class="flex items-center gap-8">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-[#25D366] rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-white fill-current w-8" viewBox="0 0 24 24">
                        <path
                            d="M7.25361 18.4944L7.97834 18.917C9.18909 19.623 10.5651 20 12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 13.4363 4.37821 14.8128 5.08466 16.0238L5.50704 16.7478L4.85355 19.1494L7.25361 18.4944ZM2.00516 22L3.35712 17.0315C2.49494 15.5536 2.00098 13.8345 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22C10.1671 22 8.44851 21.5064 6.97086 20.6447L2.00516 22ZM8.39232 7.30833C8.5262 7.29892 8.66053 7.29748 8.79459 7.30402C8.84875 7.30758 8.90265 7.31384 8.95659 7.32007C9.11585 7.33846 9.29098 7.43545 9.34986 7.56894C9.64818 8.24536 9.93764 8.92565 10.2182 9.60963C10.2801 9.76062 10.2428 9.95633 10.125 10.1457C10.0652 10.2428 9.97128 10.379 9.86248 10.5183C9.74939 10.663 9.50599 10.9291 9.50599 10.9291C9.50599 10.9291 9.40738 11.0473 9.44455 11.1944C9.45903 11.25 9.50521 11.331 9.54708 11.3991C9.57027 11.4368 9.5918 11.4705 9.60577 11.4938C9.86169 11.9211 10.2057 12.3543 10.6259 12.7616C10.7463 12.8783 10.8631 12.9974 10.9887 13.108C11.457 13.5209 11.9868 13.8583 12.559 14.1082L12.5641 14.1105C12.6486 14.1469 12.692 14.1668 12.8157 14.2193C12.8781 14.2457 12.9419 14.2685 13.0074 14.2858C13.0311 14.292 13.0554 14.2955 13.0798 14.2972C13.2415 14.3069 13.335 14.2032 13.3749 14.1555C14.0984 13.279 14.1646 13.2218 14.1696 13.2222V13.2238C14.2647 13.1236 14.4142 13.0888 14.5476 13.097C14.6085 13.1007 14.6691 13.1124 14.7245 13.1377C15.2563 13.3803 16.1258 13.7587 16.1258 13.7587L16.7073 14.0201C16.8047 14.0671 16.8936 14.1778 16.8979 14.2854C16.9005 14.3523 16.9077 14.4603 16.8838 14.6579C16.8525 14.9166 16.7738 15.2281 16.6956 15.3913C16.6406 15.5058 16.5694 15.6074 16.4866 15.6934C16.3743 15.81 16.2909 15.8808 16.1559 15.9814C16.0737 16.0426 16.0311 16.0714 16.0311 16.0714C15.8922 16.159 15.8139 16.2028 15.6484 16.2909C15.391 16.428 15.1066 16.5068 14.8153 16.5218C14.6296 16.5313 14.4444 16.5447 14.2589 16.5347C14.2507 16.5342 13.6907 16.4482 13.6907 16.4482C12.2688 16.0742 10.9538 15.3736 9.85034 14.402C9.62473 14.2034 9.4155 13.9885 9.20194 13.7759C8.31288 12.8908 7.63982 11.9364 7.23169 11.0336C7.03043 10.5884 6.90299 10.1116 6.90098 9.62098C6.89729 9.01405 7.09599 8.4232 7.46569 7.94186C7.53857 7.84697 7.60774 7.74855 7.72709 7.63586C7.85348 7.51651 7.93392 7.45244 8.02057 7.40811C8.13607 7.34902 8.26293 7.31742 8.39232 7.30833Z">
                        </path>
                    </svg>
                </div>
                <div>
                    <h2 class="text-blackMain font-semibold text-lg sm:text-2xl">
                        Konsultasi WhatsApp
                    </h2>
                    <a href="https://api.whatsapp.com/send?phone=6282181080809" target="_blank" class="text-blackMain font-medium text-sm sm:text-base">
                        +62 821 8108 0809
                    </a>
                </div>
            </div>
            
            <div class="flex items-center gap-8">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-[#EE4D2D] rounded-xl flex items-center justify-center">
                    <svg role="img" class="text-white fill-current w-8" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>Shopee</title>
                        <path
                            d="M15.9414 17.9633c.229-1.879-.981-3.077-4.1758-4.0969-1.548-.528-2.277-1.22-2.26-2.1719.065-1.056 1.048-1.825 2.352-1.85a5.2898 5.2898 0 0 1 2.8838.89c.116.072.197.06.263-.039.09-.145.315-.494.39-.62.051-.081.061-.187-.068-.281-.185-.1369-.704-.4149-.983-.5319a6.4697 6.4697 0 0 0-2.5118-.514c-1.909.008-3.4129 1.215-3.5389 2.826-.082 1.1629.494 2.1078 1.73 2.8278.262.152 1.6799.716 2.2438.892 1.774.552 2.695 1.5419 2.478 2.6969-.197 1.047-1.299 1.7239-2.818 1.7439-1.2039-.046-2.2878-.537-3.1278-1.19l-.141-.11c-.104-.08-.218-.075-.287.03-.05.077-.376.547-.458.67-.077.108-.035.168.045.234.35.293.817.613 1.134.775a6.7097 6.7097 0 0 0 2.8289.727 4.9048 4.9048 0 0 0 2.0759-.354c1.095-.465 1.8029-1.394 1.9449-2.554zM11.9986 1.4009c-2.068 0-3.7539 1.95-3.8329 4.3899h7.6657c-.08-2.44-1.765-4.3899-3.8328-4.3899zm7.8516 22.5981-.08.001-15.7843-.002c-1.074-.04-1.863-.91-1.971-1.991l-.01-.195L1.298 6.2858a.459.459 0 0 1 .45-.494h4.9748C6.8448 2.568 9.1607 0 11.9996 0c2.8388 0 5.1537 2.5689 5.2757 5.7898h4.9678a.459.459 0 0 1 .458.483l-.773 15.5883-.007.131c-.094 1.094-.979 1.9769-2.0709 2.0059z" />
                    </svg>
                </div>
                <div>
                    <h2 class="text-blackMain font-semibold text-lg sm:text-2xl">
                        Shopee
                    </h2>
                    <a href="https://shopee.co.id/paperus.id" target="_blank" class="text-blackMain font-medium text-sm sm:text-base">
                        https://shopee.co.id/paperus.id
                    </a>
                </div>
            </div>

            <div class="flex items-center gap-8">
                <div class="w-12 h-12 sm:w-16 sm:h-16 bg-[#02ac13] rounded-xl flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" class="fill-current text-white w-14" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 1521 1080.09" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:xodm="http://www.corel.com/coreldraw/odm/2003">
                    <defs>
                    <style type="text/css">
                    <![CDATA[
                        .fil7 {fill:#FEFEFE}
                        .fil5 {fill:#FCD066}
                        .fil4 {fill:#FDF8B4}
                        .fil6 {fill:#EEEFEE}
                        .fil2 {fill:#89C45F}
                        .fil1 {fill:#5FB74E}
                        .fil0 {fill:#4D4C4B}
                        .fil8 {fill:#FFFFFF}
                        .fil3 {fill:#4A9E4B}
                    ]]>
                    </style>
                    </defs>
                    <g id="Layer_x0020_1">
                    <metadata id="CorelCorpID_0Corel-Layer"/>
                    <g id="_2140068228016">
                    <path class="fil0" d="M760.63 153.99c31.33,-15.65 69.33,-24.19 104.1,-27.2l39.08 -3.41c42.81,-3.68 85.64,-1.42 128.5,-1.42l23.5 0 0 23.5c0,104.34 0,208.71 0,313.07l0 12c0,107.73 -88.09,195.82 -195.85,195.82l-394.77 0 0 -544.39 23.49 0c42.9,0 85.58,-2.82 128.47,0.51l39.07 2.95c37.12,2.79 71.1,11.8 104.41,28.57z"/>
                    <path class="fil1" d="M488.68 145.46l0 268.19 0 44.88 0 12 0 172.33 172.3 0 27.09 0 171.89 0c94.8,0 172.35,-77.57 172.35,-172.33l0 -12c0,-103.75 0,-204.96 0,-313.07 -41.19,0 -84.69,-1.01 -126.46,1.35l-39.09 3.37c-38.25,4.65 -76.95,13.58 -106.27,30.5 -31.65,-18.29 -66.17,-27.38 -106.04,-31.85l-39.08 -2.97c-42.62,-1.98 -86.31,-0.4 -126.69,-0.4z"/>
                    <path class="fil2" d="M537.42 642.86l123.56 0 27.09 0 171.89 0c42,0 80.58,-15.23 110.54,-40.4 -34.99,-81.34 -115.87,-138.26 -210.02,-138.26 -109.09,0 -200.31,76.42 -223.06,178.66z"/>
                    <path class="fil3" d="M760.49 642.86l101.48 -1.5c41.44,0 79.16,-14.61 108.54,-38.89 37.83,-31.26 61.8,-78.6 61.8,-131.94l0 -12c0,-103.75 0,-204.96 0,-313.07 -41.19,0 -84.69,-1.01 -126.46,1.35l-39.09 3.37c-38.25,4.65 -76.95,13.58 -106.27,30.5l0 462.18z"/>
                    <path class="fil1" d="M760.49 642.86l100.1 0c42,0 79.96,-15.22 109.92,-40.39 -34.61,-80.42 -117.21,-136.99 -210.02,-138.23l0 178.62z"/>
                    <path class="fil0" d="M905.85 130.53c-7.47,-73.37 -69.47,-130.53 -144.74,-130.53 -75.24,0 -137.21,56.67 -145.74,129.61l39.08 2.98c6.91,-52.68 51.81,-93.41 106.51,-93.41 54.67,0 99.97,41.43 105.8,94.71l39.09 -3.36z"/>
                    <path class="fil0" d="M824.06 487.13c-17.03,18.01 -34.04,36.03 -51.06,54.06l-12.52 13.27 -12.5 -13.27c-17.03,-18 -34.04,-36.05 -51.06,-54.06l-8.81 -9.35 6.44 -11.12c13.65,-23.54 39.19,-36.21 65.93,-36.21 26.77,0 52.29,12.67 65.95,36.21l6.45 11.12 -8.82 9.35z"/>
                    <path class="fil4" d="M811.52 475.32c-16.98,18.02 -34.03,36.02 -51.04,54.06 -17.01,-18.04 -34.03,-36.04 -51.05,-54.06 10.75,-18.53 30.93,-27.69 51.05,-27.65 20.13,-0.04 40.31,9.12 51.04,27.65z"/>
                    <path class="fil5" d="M811.52 475.32c-16.98,18.02 -34.03,36.02 -51.04,54.06l0 -81.71c20.13,-0.04 40.31,9.12 51.04,27.65z"/>
                    <path class="fil0" d="M632.93 213.25c76.25,0 138.09,61.88 138.09,138.1 0,76.25 -61.84,138.1 -138.09,138.1 -76.26,0 -138.08,-61.85 -138.08,-138.1 0,-76.22 61.82,-138.1 138.08,-138.1z"/>
                    <path class="fil6" d="M632.93 236.75c63.29,0 114.61,51.32 114.61,114.6 0,63.27 -51.32,114.6 -114.61,114.6 -63.31,0 -114.6,-51.33 -114.6,-114.6 0,-63.28 51.29,-114.6 114.6,-114.6z"/>
                    <path class="fil7" d="M632.93 236.75c52.23,0 96.31,34.96 110.12,82.75 -13.81,47.77 -57.89,82.74 -110.12,82.74 -52.25,0 -96.29,-34.97 -110.1,-82.74 13.81,-47.79 57.85,-82.75 110.1,-82.75z"/>
                    <path class="fil0" d="M888.05 213.25c76.27,0 138.08,61.88 138.08,138.1 0,76.25 -61.81,138.1 -138.08,138.1 -76.26,0 -138.1,-61.82 -138.1,-138.1 0,-76.22 61.84,-138.1 138.1,-138.1z"/>
                    <path class="fil6" d="M888.05 236.75c63.28,0 114.61,51.32 114.61,114.6 0,63.27 -51.33,114.6 -114.61,114.6 -63.29,0 -114.6,-51.33 -114.6,-114.6 0,-63.28 51.31,-114.6 114.6,-114.6z"/>
                    <path class="fil7" d="M888.05 236.75c52.22,0 96.3,34.96 110.09,82.75 -13.78,47.77 -57.87,82.74 -110.09,82.74 -52.25,0 -96.31,-34.97 -110.12,-82.74 13.81,-47.79 57.87,-82.75 110.12,-82.75z"/>
                    <path class="fil0" d="M647.33 280.08c40.87,0 74.03,33.14 74.03,73.97 0,40.9 -33.16,74.03 -74.03,74.03 -40.9,0 -74.03,-33.13 -74.03,-74.03 0,-13.62 3.71,-26.38 10.15,-37.36 5.28,13.07 18.06,22.24 33.05,22.24 19.68,0 35.66,-15.92 35.66,-35.61 0,-8.87 -3.24,-16.95 -8.56,-23.16 1.23,-0.08 2.49,-0.08 3.73,-0.08z"/>
                    <path class="fil0" d="M873.62 280.08c40.91,0 74.05,33.14 74.05,73.97 0,40.9 -33.14,74.03 -74.05,74.03 -40.86,0 -74,-33.13 -74,-74.03 0,-13.62 3.69,-26.38 10.11,-37.36 5.31,13.07 18.12,22.24 33.09,22.24 19.68,0 35.63,-15.92 35.63,-35.61 0,-8.87 -3.2,-16.95 -8.54,-23.16 1.25,-0.08 2.47,-0.08 3.71,-0.08z"/>
                    <path class="fil8" d="M813.15 982.93c-16.52,16.77 -36.3,25.21 -59.21,25.21 -18.53,0 -34.28,-3.79 -50.36,-13.12l0 -38.45c12.94,8.76 29.17,17.11 45.21,17.11 33.42,0 53.32,-23 53.32,-55.6 0,-32.64 -20.59,-56.33 -54.02,-56.33 -14.95,0 -27.04,5.37 -36.5,16.13 -10.14,11.67 -15.38,28.33 -15.38,50.36l0 151.85 -2.52 0c-18.42,0 -33.36,-14.94 -33.36,-33.35l0 -124.19c0,-52.7 32.23,-95.24 87.6,-95.24 27.33,0 49.54,9.34 66.37,28.12 15.83,17.54 23.69,39.79 23.69,66.54 0,23.82 -8.28,44.17 -24.84,60.96zm-760.66 21.66c-35.07,0 -52.49,-23.86 -52.49,-57.19l0 -126.44c0,-18.42 14.93,-33.35 33.36,-33.35l2.51 0 0 43.24 60.61 0 0 34.45 -60.61 0 0 86.09c0,14.64 6.54,18.76 20.52,18.76l40.09 0 0 34.44 -43.99 0zm208.34 -21.96c-17.74,17 -39.03,25.51 -63.78,25.51 -24.51,0 -45.7,-8.52 -63.41,-25.51 -17.78,-17.05 -26.65,-38.75 -26.65,-64.91 0,-51.02 38.97,-90.41 90.06,-90.41 24.53,0 45.76,8.58 63.6,25.68 17.89,17.16 26.83,38.8 26.83,64.73 0,26.16 -8.88,47.86 -26.65,64.91zm167.7 -109.98c-5.26,8.83 -9.34,15.16 -12.21,18.98 -3.17,4.15 -6.29,7.48 -9.38,9.77 24.93,8.06 34.21,25.33 34.21,51.06l0.01 52.13 -2.53 0c-18.42,0 -33.36,-14.93 -33.36,-33.35l0 -15.25c0,-16.65 -7.46,-27.96 -25.12,-27.96l-32.58 0 0 76.56 -2.51 0c-18.42,0 -33.36,-14.93 -33.36,-33.35l0 -185.01c0,-18.42 14.94,-33.36 33.36,-33.36l2.51 0 0 140.35 10.61 0c11.64,0 19.31,-3.97 23.7,-11.51l30.13 -50.86 40.88 -0.03 -24.36 41.83zm185.18 109.98c-17.72,17 -39.03,25.51 -63.78,25.51 -24.5,0 -45.68,-8.52 -63.41,-25.51 -17.78,-17.05 -26.64,-38.75 -26.64,-64.91 0,-51.02 38.96,-90.41 90.05,-90.41 24.54,0 45.77,8.58 63.6,25.68 17.89,17.16 26.83,38.8 26.83,64.73 0,26.16 -8.87,47.86 -26.65,64.91zm-25.89 -105.34c-9.89,-10.35 -22.46,-15.54 -37.89,-15.54 -33.01,0 -52.76,24.07 -52.76,55.97 0,31.46 20.23,55.96 52.76,55.96 32.57,0 52.77,-24.5 52.77,-55.96 0,-16.7 -5,-30.1 -14.88,-40.43zm-352.89 0c-9.89,-10.35 -22.45,-15.54 -37.88,-15.54 -33.01,0 -52.76,24.07 -52.76,55.97 0,31.46 20.23,55.96 52.76,55.96 32.55,0 52.78,-24.5 52.78,-55.96 0,-16.7 -5.01,-30.1 -14.9,-40.43zm966.63 104.36c-16.47,17.67 -37.65,26.49 -63.36,26.49 -27.1,0 -49.2,-9.36 -66.02,-28.13 -15.81,-17.76 -23.68,-40.02 -23.68,-66.54 0,-46.95 36.25,-86.16 83.9,-86.16 18.4,0 34.37,3.86 50.51,12.72l0 38.84c-12.95,-8.76 -29.19,-17.12 -45.2,-17.12 -33.42,0 -53.33,23 -53.33,55.61 0,32.19 21.06,56.32 54.01,56.32 14.92,0 27.21,-5.6 37.04,-16.85 9.77,-11.2 14.85,-27.65 14.85,-49.74l0 -120.86c0,-18.42 14.93,-33.36 33.36,-33.36l2.51 0 0 159.88c0,28.17 -8.14,51.21 -24.59,68.9zm101.3 -171.42c-3.77,4.22 -9.17,6.16 -15.76,6.16 -12.31,0 -21.11,-9.09 -21.11,-21.3 0,-12.51 8.65,-20.95 21.11,-20.95 12.01,0 21.13,8.9 21.13,20.95 0,5.96 -1.74,11.07 -5.37,15.14zm182.26 96.86c0,-14.14 -5.35,-25.33 -16.11,-33.82 -9.68,-7.63 -21.79,-11.52 -36.49,-11.52 -32.46,0 -53.3,25.38 -53.3,56.67 0,30.13 22.08,55.26 52.98,55.26 21.46,0 32.95,-12.55 45.2,-28.17l0 45.07c-6.25,4.67 -13.42,9.76 -20.76,12.75 -7.73,3.24 -16.94,4.81 -27.61,4.81 -51.63,0 -85.68,-42.77 -85.68,-92.19 0,-25.38 7.88,-46.35 23.74,-62.72 16.85,-17.33 38.92,-25.92 65.96,-25.92 51.27,0 87.95,29.43 87.95,82.61l0 94.67 -2.52 0c-18.42,0 -33.36,-14.93 -33.36,-33.35l0 -64.15zm-491.06 -10.16c-4.54,-14.02 -10.22,-20.92 -23.3,-28.21 -31.07,-17.38 -61.67,-2.6 -75.9,28.07l99.2 0.14zm-27.37 110.68c-22.92,4.86 -45.4,1.11 -67.33,-11.13 -21.39,-11.96 -35.74,-29.74 -42.91,-53.21 -14.52,-47.49 15.23,-100.42 63.06,-113.24 23.72,-6.35 46.46,-3.47 68.06,8.61 35.89,20.05 48.96,51.07 46.68,91.05l-144.52 -0.3c2.12,16.31 12.24,29.07 26.44,37.01 14.4,8.05 27.65,9.97 39.95,6.16 13.63,-4.29 24.7,-15.42 33.7,-25.79l29.46 21.46c-12.02,21.5 -28.38,34.22 -52.59,39.38zm302.48 -176.76l35.87 0 0 173.74 -2.52 0c-18.41,0 -33.35,-14.93 -33.35,-33.35l0 -140.39z"/>
                    </g>
                    </g>
                    </svg>
                </div>
                <div>
                    <h2 class="text-blackMain font-semibold text-lg sm:text-2xl">
                        Tokopedia
                    </h2>
                    <a href="https://www.tokopedia.com/paperus-id" target="_blank" class="text-blackMain font-medium text-sm sm:text-base">
                        https://www.tokopedia.com/paperus-id
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Akhir Kontak --}}

    <script>
        // Carousel
        let defaultTransform = 0;

        function goNext() {
            defaultTransform = defaultTransform - 398;
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        next.addEventListener("click", goNext);

        function goPrev() {
            var slider = document.getElementById("slider");
            if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
            else defaultTransform = defaultTransform + 398;
            slider.style.transform = "translateX(" + defaultTransform + "px)";
        }
        prev.addEventListener("click", goPrev);
        
        
        // LeafletJS Map
        let map = L.map('map', { zoomControl: false }).setView([-7.2458351, 112.7352428], 14);
        L.tileLayer('https://api.maptiler.com/maps/bright-v2/{z}/{x}/{y}.png?key=ymJjhfOMl9vKscg4Yzu7', {
            attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
        }).addTo(map);

        map.touchZoom.disable();
        map.doubleClickZoom.disable();
        map.scrollWheelZoom.disable();
        map.boxZoom.disable();
        map.keyboard.disable();

        let popup = L.popup({
                closeOnClick: false,
                autoClose: false,
                closeButton: false
            })
            .setLatLng([-7.2458351, 112.7352428])
            .setContent("Paperus Surabaya")
            .openOn(map)
    </script>
@endsection
