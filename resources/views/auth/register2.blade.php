<x-guest-layout>
    <div class="font-inter w-full flex items-center">
        <div class="w-full lg:w-1/2 py-10 px-4 xl:pl-40 2xl:pl-56 lg:py-0">
            <div class="lg:w-[480px] lg:h-[665px] 2xl:w-[780px]">
                <h1 class="uppercase font-extrabold text-center xl:text-center lg:text-left text-redMain text-4xl sm:text-5xl lg:text-[55px] mb-7">Hi! Welcome</h1>
                <p class="text-base sm:text-lg text-center lg:text-left xl:text-center mb-7">
                    Daftar dengan nama lengkap, email dan kata sandi anda untuk mengakses platform kami
                </p>

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="__('Username')" class="font-semibold" />

                        <x-input id="name" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="text" name="name" :value="old('name')" required placeholder="Masukkan Username" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" class="font-semibold" />
        
                        <x-input id="email" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="email" name="email" :value="old('email')" required placeholder="Masukkan Email" />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Kata Sandi')" class="font-semibold" />
        
                        <x-input id="password" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Kata Sandi" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" class="font-semibold" />

                        <x-input id="password_confirmation" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="password" name="password_confirmation" required placeholder="Masukkan Konfirmasi Kata Sandi" />
                    </div>

                    <div class="flex items-center justify-center mt-5">
                        <button class="btn btn-block bg-redMain border-redMain">Daftar</button>
                    </div>
                </form>

                <p class="text-sm lg:text-base text-blackMain font-semibold mt-7 lg:mt-5">
                    By clicking 'SIGN UP' you agree to our website “Brand” <a href="#" class="link">Terms & Conditions</a>, “Brand” <a href="#" class="link">Privacy Notice</a> and <a href="#" class="link">Terms & Conditions</a>.
                </p>
                
                <p class="text-sm lg:text-base font-semibold mt-14 text-center">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="font-semibold text-redMain">Masuk Sekarang</a>
                </p>
            </div>
        </div>

        <div class="hidden w-1/2 lg:flex justify-end">
            <img src="{{ asset('img/loreg-image.png') }}" alt="" class="">
        </div>
    </div>
</x-guest-layout>