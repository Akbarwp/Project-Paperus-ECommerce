@extends('layouts.home.main')

@section('container')
    @if (session('error'))
        <div class="mt-10 mx-20">
            <div class="alert alert-error shadow-lg">
                <div class="text-blackMain">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="capitalize">{{ session('error') }}</span>
                </div>
            </div>
        </div>
    @endif
    <div class="font-inter mt-20 px-0 md:px-3 lg:px-10 flex flex-wrap md:flex-nowrap justify-center items-start">
        @if ($sales != null)
            <div class="w-full md:w-1/2 px-10 md:mr-5 lg:ml-10 lg:mr-16 xl:ml-24 xl:mr-32 mb-10">
                <h1 class="mb-6 font-medium text-xl">Ringkasan Pembayaran</h1>
                @foreach ($sales as $item)
                    <div class="flex gap-x-2 mb-5">
                        <div class="w-1/5">
                            <img src="{{ $item->foto }}" alt="foto produk" class="w-28 rounded-lg shadow-md">
                        </div>

                        <div class="w-4/5 my-auto">
                            <div class="w-full flex justify-between mb-2">
                                <h2 class="font-semibold text-lg">{{ Str::words(strip_tags($item->nama_produk), 10) }}</h2>
                                <p class="font-semibold text-base">Rp{{ $item->total }}</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <form method="post">
                                    @csrf
                                    @method('put')
                                    <input type="text" name="produk_id" hidden value="{{ $item->produk_id }}">
                                    <input type="text" name="sales_detail_id" hidden value="{{ $item->sales_detail_id }}">
                                    <input id="jml" name="jml" type="number" class="input input-xs input-primary w-12 text-center font-semibold" value="{{ $item->kuantitas }}">
                                    <button type="submit" class="btn btn-xs btn-primary ml-2">Simpan</button>
                                </form>
                                <form method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="text" name="sales_detail_id" hidden value="{{ $item->sales_detail_id }}">
                                    <input type="text" name="sales_id" hidden value="{{ $item->sales_id }}">
                                    <button type="submit" onclick="return confirm('Apakah Anda yakin?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="fill-current w-4 text-greyMain" viewBox="0 0 24 24">
                                            <path d="M7 4V2H17V4H22V6H20V21C20 21.5523 19.5523 22 19 22H5C4.44772 22 4 21.5523 4 21V6H2V4H7ZM6 6V20H18V6H6ZM9 9H11V17H9V9ZM13 9H15V17H13V9Z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="mt-14">
                    <div class="flex items-center justify-between">
                        <h2 class="font-medium text-base">Subtotal</h2>
                        <p class="text-base">{{ $subTotal }}</p>
                    </div>

                    <div class="divider"></div>

                    <div class="flex items-center justify-between">
                        <h2 class="font-medium text-base">Ongkos Kirim</h2>
                        <p class="font-medium text-base">{{ $sales[0]->biaya_kirim }}</p>
                    </div>

                    <div class="divider"></div>

                    <div class="flex items-center justify-between">
                        <h2 class="font-medium text-base">Total</h2>
                        <p class="font-medium text-base">Rp{{ $totalSemua }}</p>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 translate-y-0 md:-translate-y-10">
                <form method="post">
                    @csrf
                    <input type="text" name="sales_id" hidden value="{{ $sales[0]->sales_id }}">
                    <div class="h-[500px] md:h-[600px] xl:h-[800px] bg-[#EEEEEE] rounded-lg shadow-md">
                        <div class="px-6 py-6 mx-3 md:mx-9 bg-white rounded-lg translate-y-10">
                            <h1 class="font-semibold text-xl mb-5">Metode Pembayaran</h1>

                                <div class="form-control">
                                    <label class="label cursor-pointer flex justify-start gap-x-4">
                                        <input type="radio" name="metode_bayar" class="radio" value="cod" />
                                        <div>
                                            <span class="label-text font-medium text-base">Bayar di Tempat (COD)</span> 
                                            <p class="text-sm">Pembayaran Melalui Cash On Delivery</p>
                                        </div>
                                    </label>
                                    <label class="label cursor-pointer flex justify-start gap-x-4">
                                        <input type="radio" name="metode_bayar" class="radio" value="bank transfer" />
                                        <div>
                                            <span class="label-text font-medium text-base">Bank Transfer</span> 
                                            <p class="text-sm">Pembayaran Melalui Transfer Bank</p>
                                        </div>
                                    </label>
                                    <label class="label cursor-pointer flex justify-start gap-x-4">
                                        <input type="radio" name="metode_bayar" class="radio" value="e-wallet" />
                                        <div>
                                            <span class="label-text font-medium text-base">Pembayaran Virtual</span> 
                                            <p class="text-sm">Pembayaran Melaui Gopay, OVO, DANA, etc.</p>
                                        </div>
                                        <div class="flex items-center gap-x-2">
                                            <svg class="w-5" version="1.1" viewBox="0 0 65 65" xmlns="http://www.w3.org/2000/svg"><title>Gopay logo</title>
                                                    <g transform="scale(4.889 3.938)" fill="none" fill-rule="evenodd">
                                                        <path d="m0 0h63v16h-63z" fill="#fff" fill-opacity=".01"/>
                                                        <g transform="translate(0,1.143)">
                                                            <ellipse cx="6.811" cy="6.857" rx="6.811" ry="6.857" fill="#00aed6" fill-rule="nonzero"/>
                                                            <path d="m10.78 6.644a1.587 1.587 0 0 0-1.652-1.5h-4.302a0.285 0.285 0 0 1-0.284-0.286c0-0.158 0.127-0.286 0.284-0.286h4.359a1.362 1.362 0 0 0-0.993-1.26 10.97 10.97 0 0 0-3.84 0 1.82 1.82 0 0 0-1.362 1.526 13.71 13.71 0 0 0 0 4.06 1.92 1.92 0 0 0 1.552 1.526 19.13 19.13 0 0 0 4.748 0 1.669 1.669 0 0 0 1.317-1.44c0.14-0.772 0.199-1.556 0.173-2.34zm-1.413 0.96v0.254a0.285 0.285 0 0 1-0.284 0.286 0.285 0.285 0 0 1-0.284-0.286v-0.254a0.427 0.427 0 0 1 0.284-0.746 0.427 0.427 0 0 1 0.284 0.746z" fill="#fff"/>
                                                        </g>
                                                    </g>
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-7" viewBox="0 0 77 24"><title>Logo_ovo_purple</title><path d="M21.19,20.24a12.54,12.54,0,0,1-8.8,3.45,12.59,12.59,0,0,1-8.85-3.45,11.68,11.68,0,0,1,0-16.77A12.55,12.55,0,0,1,12.4,0a12.54,12.54,0,0,1,8.8,3.45,11.67,11.67,0,0,1,0,16.77M12.4,3.86a7.73,7.73,0,0,0-7.8,8,7.78,7.78,0,1,0,15.56,0,7.73,7.73,0,0,0-7.76-8m38-1.07L40.89,24l-.54-.1c-2.72-.49-3.27-1.17-4.54-3.93L28.68,4.44H26V.67H36.13V4.44H33.71l5.73,12.85L45,4.44H42V.67h8.4Zm23,17.45a13,13,0,0,1-17.64,0,11.68,11.68,0,0,1,0-16.77,13,13,0,0,1,17.64,0,11.65,11.65,0,0,1,0,16.77M64.65,3.86a7.74,7.74,0,0,0-7.81,8,7.78,7.78,0,1,0,15.56,0,7.72,7.72,0,0,0-7.75-8" fill="#4b2489" fill-rule="evenodd"/>
                                            </svg>
                                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" class="w-5" viewBox="0 0 110 110"><defs><style>.cls-1,.cls-2{fill:#008ceb;}.cls-1{fill-rule:evenodd;}.cls-3{fill:#fefefe;}</style></defs><title>Logo_dana_blue</title><circle class="cls-2" cx="54.61" cy="54.61" r="54.61"/><path class="cls-3" d="M86.43,54.84V70.21c0,1-.43,1.21-1.27.72a28.08,28.08,0,0,0-3.5-1.78,23.73,23.73,0,0,0-11.49-1.53,55.06,55.06,0,0,0-12.44,3.12c-4,1.35-7.92,2.81-12,3.94a33.41,33.41,0,0,1-10.42,1.37,22.12,22.12,0,0,1-11-3.43A2.71,2.71,0,0,1,23,70.2Q23,55.1,23,40c0-.49,0-1.07.44-1.32s.89.16,1.27.41a21,21,0,0,0,12.15,3.6A32.4,32.4,0,0,0,45.94,41c4.16-1.29,8.18-3,12.27-4.45a74.14,74.14,0,0,1,9.77-3,21.21,21.21,0,0,1,16.73,3.09,3.67,3.67,0,0,1,1.75,3.27c0,5,0,10,0,15Z"/>
                                            </svg>
                                            <svg width="92px" height="92px" class="w-6" viewBox="0 0 92 92" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
                                                <title>logo_header</title>
                                                <desc>Created with Sketch.</desc>
                                                <defs>
                                                    <polygon id="path-1" points="0 0.315655172 91.6832208 0.315655172 91.6832208 91.6827586 0 91.6827586"></polygon>
                                                </defs>
                                                <g id="Coming-Soon" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g id="Coming-Soon-LinkAja" transform="translate(-150.000000, -80.000000)">
                                                        <g id="Group-26" transform="translate(150.000000, 80.000000)">
                                                            <g id="Group-30">
                                                                <g id="Group-3" transform="translate(0.000000, 0.001586)">
                                                                    <mask id="mask-2" fill="white">
                                                                        <use xlink:href="#path-1"></use>
                                                                    </mask>
                                                                    <g id="Clip-2"></g>
                                                                    <path d="M83.0750131,91.6827586 L8.60817578,91.6827586 C3.87383668,91.6827586 -3.183391e-05,87.8225655 -3.183391e-05,83.1042345 L-3.183391e-05,8.89417931 C-3.183391e-05,4.17616552 3.87383668,0.315655172 8.60817578,0.315655172 L83.0750131,0.315655172 C87.8096706,0.315655172 91.6832208,4.17616552 91.6832208,8.89417931 L91.6832208,83.1042345 C91.6832208,87.8225655 87.8096706,91.6827586 83.0750131,91.6827586" id="Fill-1" fill="#E82529" mask="url(#mask-2)"></path>
                                                                </g>
                                                                <path d="M19.7807958,17.5217807 L24.1245329,17.5217807 C24.4552872,17.5217807 24.7093218,17.81396 24.6622076,18.1400841 L22.6448927,32.0860152 C22.567218,32.6227876 22.9851972,33.1034083 23.5292388,33.1034083 L31.1493218,33.1034083 C31.3657924,33.1034083 31.5316471,33.2950221 31.5001315,33.5082083 L30.9089758,37.5136979 C30.8784152,37.7218083 30.6991903,37.8763048 30.4878131,37.8763048 L21.8716471,37.8763048 C19.308699,37.8763048 16.8508028,35.78156 17.212436,33.252829 L19.2424844,17.9919324 C19.2781384,17.7229117 19.5082976,17.5217807 19.7807958,17.5217807" id="Fill-4" fill="#FEFEFE"></path>
                                                                <path d="M34.2652249,23.0864483 L32.2768789,37.3090138 C32.2453633,37.5345724 32.4210865,37.7360207 32.649654,37.7360207 L36.8530035,37.7360207 C37.1519239,37.7360207 37.4053218,37.5164897 37.4467059,37.2214552 L39.4156332,23.2301586 C39.457654,22.9078414 39.2058478,22.6220069 38.8795502,22.6220069 L34.8006713,22.6220069 C34.5307197,22.6220069 34.3024706,22.8202828 34.2652249,23.0864483" id="Fill-6" fill="#FEFEFE"></path>
                                                                <path d="M42.9353813,36.6454717 C41.6384678,36.5988372 41.0317135,37.0039545 40.2664263,37.4588786 C40.451063,36.176589 41.8991875,26.1838028 42.0312983,25.5699407 C42.1710491,24.9154717 42.2980664,23.8235269 42.8755336,23.2727959 C43.5523225,22.6262579 44.5999765,22.2563545 49.8124609,22.2395407 C55.1331806,22.2224097 56.1639626,26.0385062 55.8815958,28.5180648 C55.6409315,30.6404097 54.8492221,35.8840924 54.6257481,37.3491131 C54.5916858,37.5718166 54.4006824,37.7358303 54.1756166,37.7358303 L50.0655405,37.7358303 C49.7643917,37.7358303 49.5329592,37.471251 49.5749799,37.1743131 C49.7828554,35.7092924 50.3402671,31.8037338 50.5293606,30.6695959 C50.7639765,29.2667545 50.9517965,27.7230579 50.5761564,27.1136372 C50.2005163,26.5054855 49.0735958,26.0385062 46.9143017,26.412851 L45.3171945,37.6663545 C45.3171945,37.6663545 44.2895958,36.6943269 42.9353813,36.6454717" id="Fill-8" fill="#FEFEFE"></path>
                                                                <path d="M60.3392664,16.7138938 L64.898519,16.7138938 C65.0681938,16.7138938 65.1987128,16.8633145 65.175474,17.0308179 L62.338436,37.5119214 C62.3174256,37.66388 62.1869066,37.7771352 62.0328304,37.7771352 L57.5315156,37.7771352 C57.3443322,37.7771352 57.2004429,37.6124869 57.2262284,37.4278524 L60.0623114,16.95468 C60.0814118,16.81668 60.1995156,16.7138938 60.3392664,16.7138938" id="Fill-10" fill="#FEFEFE"></path>
                                                                <path d="M63.8672595,29.0540441 L69.0198962,23.0407338 C69.1822491,22.8513407 69.4197301,22.7422097 69.6699446,22.7422097 L74.1932249,22.7422097 C74.5198408,22.7422097 74.6917439,23.1276579 74.4733633,23.3690786 L69.2048512,29.195851 L74.0210035,39.518251 C74.1976817,39.8970372 73.92009,40.330389 73.5011557,40.330389 L69.4127266,40.330389 C69.1991211,40.330389 69.0052526,40.2063476 68.9161176,40.0131476 L63.8672595,29.0540441 Z" id="Fill-12" fill="#FEFEFE"></path>
                                                                <path d="M40.2964457,18.77076 C39.927809,20.3204841 38.5274353,21.4736566 37.0611654,21.4736566 C35.5952138,21.4736566 34.4708401,20.2173807 34.8397952,18.6679738 C35.2084318,17.1182497 36.4222588,15.8619738 38.161982,15.8619738 C39.6279336,15.8619738 40.6650824,17.2210359 40.2964457,18.77076" id="Fill-14" fill="#FEFEFE"></path>
                                                                <path d="M44.930699,41.36136 C44.5620623,42.9110841 43.1616886,44.0642566 41.6954187,44.0642566 C40.2294671,44.0642566 39.1050934,42.8079807 39.4740484,41.2585738 C39.8426851,39.7088497 41.0565121,38.4525738 42.7962353,38.4525738 C44.2621869,38.4525738 45.2993356,39.8116359 44.930699,41.36136" id="Fill-16" fill="#FEFEFE"></path>
                                                                <path d="M66.9848498,59.8806428 C66.6741509,61.4119669 65.2591336,62.5511807 63.7177356,62.550229 C62.1760194,62.5495945 60.9316318,61.3072772 61.2423308,59.7762703 C61.5530298,58.2449462 62.7668567,57.0038979 64.5960332,57.0048497 C66.1374311,57.0058014 67.2955488,58.3493186 66.9848498,59.8806428" id="Fill-18" fill="#FEFEFE"></path>
                                                                <path d="M28.1767668,52.2534938 L25.4164484,52.2534938 C25.3139433,52.2534938 25.2435903,52.1507076 25.2811543,52.0555352 L27.6833412,45.9790938 C27.729182,45.8633007 27.9004484,45.8880455 27.9115903,46.0117697 L28.4514934,51.9537007 C28.466137,52.1145421 28.3391197,52.2534938 28.1767668,52.2534938 M34.8637979,59.8841007 L31.7835488,41.510749 C31.6488913,40.7074938 30.951092,40.119011 30.1339156,40.119011 L27.0431612,40.119011 C26.1005592,40.119011 25.2448637,40.6675214 24.8545799,41.5224869 L16.5570713,59.9069421 C16.4367391,60.1737421 16.6334727,60.4748041 16.926663,60.4732179 L21.2379294,60.4481559 C21.5330298,60.4465697 21.7985246,60.2701834 21.9137633,59.9998938 L23.346926,56.6399903 C23.3857633,56.5483076 23.4758533,56.4889834 23.5758118,56.4889834 L28.7933896,56.4889834 C28.9213619,56.4889834 29.0286422,56.5857421 29.0410574,56.7126386 L29.3523931,59.8920317 C29.3883654,60.2619352 29.7006561,60.54428 30.0737495,60.54428 L34.3025661,60.54428 C34.6543308,60.54428 34.9217356,60.2295766 34.8637979,59.8841007" id="Fill-20" fill="#FEFEFE"></path>
                                                                <path d="M32.8070727,63.21228 L33.8028374,66.2777834 C33.9817439,66.7821972 34.1167197,66.8941834 34.4665744,66.8205834 C35.7243322,66.5563214 38.7635156,65.6613834 40.2504775,63.6567352 C42.1888443,61.0433007 42.4546574,56.4229972 42.796872,54.0747766 C43.0786021,52.1405559 43.6955433,47.3793972 43.9043737,45.761149 C43.9419377,45.4699214 43.7143253,45.2126386 43.4195433,45.2126386 L39.5545882,45.2126386 C39.2130104,45.2126386 38.9242768,45.4638938 38.878436,45.8011214 C38.566782,48.0868455 37.4443183,56.3062524 37.2482215,57.4454662 C37.0202907,58.7712179 36.9747682,60.6806938 35.0067958,61.8205421 C34.0247197,62.3890386 33.5211073,62.4975352 33.1324152,62.6783628 C32.9347266,62.7703628 32.7112526,62.8690248 32.8070727,63.21228" id="Fill-22" fill="#FEFEFE"></path>
                                                                <path d="M54.0768678,56.1348786 C54.0768678,56.1348786 52.061463,56.8178993 51.0940304,56.094589 C50.1262796,55.3715959 50.0457398,53.88532 50.610155,51.7563131 C51.1745702,49.626989 52.5854491,49.265651 53.1899751,49.2253614 C53.7948194,49.1850717 54.9316083,49.4702717 54.9316083,49.4702717 L54.0768678,56.1348786 Z M59.6576706,45.7626717 C58.3543903,45.4378166 56.1632623,44.7240234 52.6408401,44.9813062 C49.3909163,45.2186028 45.7211031,46.7166166 45.033809,53.1099821 C44.3465149,59.5033476 47.279373,60.7364648 51.4951377,60.9191959 C54.5846187,61.0530717 57.0094076,60.2060372 58.0847571,59.7438166 C58.4591239,59.5829752 58.7198436,59.2381338 58.7745979,58.8355545 L60.3322311,46.5262717 C60.3933522,46.03772 60.1482311,45.8848097 59.6576706,45.7626717 Z" id="Fill-24" fill="#FEFEFE"></path>
                                                                <path d="M62.6637785,54.9667959 L63.7980208,43.1796924 C63.8387682,42.7574441 64.1943529,42.5851821 64.6199723,42.5851821 L68.5326782,42.5851821 C68.8971765,42.5851821 69.0515709,42.8608648 68.9509758,43.3122993 L66.5627958,55.1152648 C66.5144083,55.3436786 66.3125813,55.5070579 66.0782837,55.5070579 L63.1562491,55.5070579 C62.8643322,55.5070579 62.6357647,55.2564372 62.6637785,54.9667959" id="Fill-26" fill="#FEFEFE"></path>
                                                                <path d="M16.8767474,76.7017007 C17.6515848,77.1283903 18.5566228,77.2524317 19.4180484,77.04908 C22.8494256,76.2388455 30.4430865,74.057811 46.5061592,71.7438524 C66.6869481,68.8366524 81.587128,68.8487076 81.587128,68.8487076 L81.6262837,68.8249145 C81.6262837,68.8249145 68.4196678,67.0166386 46.7449135,69.1262938 C25.0698408,71.235949 12.9723183,74.5514386 12.9723183,74.5514386 L16.8767474,76.7017007 Z" id="Fill-28" fill="#FEFEFE"></path>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                        <div class="text-right mr-9 -translate-y-32 lg:-translate-y-44 xl:-translate-y-[420px]">
                            <button type="submit" class="btn text-white bg-redMain border-redMain z-10">Pesan Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        
        @else
            <div class="w-full sm:w-96 lg:w-1/2">
                <div class="card bg-base-100 shadow-xl">
                    <figure><img src="https://source.unsplash.com/random/1920x1080/?shopping" /></figure>
                    <div class="card-body">
                        <h2 class="card-title capitalize">Belum ada barang belanjaan</h2>
                        <p>Silakan membeli sesuatu di etalase toko</p>
                        <div class="card-actions justify-end">
                            <a href="{{ route('toko') }}" class="btn btn-primary">Cari Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="mb-10 md:mb-16 lg:mb-28"></div>
@endsection