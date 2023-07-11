<x-guest-layout>
    <div class="font-inter w-full flex items-center">
        <div class="w-full lg:w-1/2 pt-20 px-4 lg:pt-32 xl:pl-40 2xl:pl-56">
            <div class="lg:w-[480px] lg:h-[665px] 2xl:w-[780px]">
                <h1 class="uppercase font-extrabold text-center xl:text-center lg:text-left text-redMain text-4xl sm:text-5xl lg:text-[55px] mb-7">Welcome Back</h1>
                <p class="text-base sm:text-lg text-center lg:text-left xl:text-center mb-7">
                    Masukkan email dan kata sandi Anda untuk mengakses akun Anda
                </p>

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <x-label for="email" :value="__('Email')" class="font-semibold" />
        
                        <x-input id="email" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="email" name="email" :value="old('email')" required placeholder="Masukkan Email" />
                    </div>
        
                    <!-- Password -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Kata Sandi')" class="font-semibold" />
        
                        <x-input id="password" class="block mt-1 w-full placeholder:text-[#BBBBBB] placeholder:text-base" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan Kata Sandi" />
                    </div>
        
                    {{-- <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div> --}}
        
                    <div class="flex items-center justify-end mt-3">
                        @if (Route::has('password.request'))
                            <a class="text-sm" href="{{ route('password.request') }}">
                                {{ __('Lupa Password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex items-center justify-center mt-5">
                        <button class="btn btn-block bg-redMain border-redMain">Login</button>
                    </div>
                </form>

                <p class="text-sm lg:text-base text-blackMain font-semibold mt-7">
                    By clicking 'LOGIN' you agree to our website “Brand” <a href="#" class="link">Terms & Conditions</a>, “Brand” <a href="#" class="link">Privacy Notice</a> and <a href="#" class="link">Terms & Conditions</a>.
                </p>
                
                <p class="text-sm lg:text-base font-semibold mt-14 lg:mt-24 text-center">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold text-redMain">Daftar Sekarang</a>
                </p>
            </div>
        </div>

        <div class="hidden w-1/2 lg:flex justify-end">
            <img src="{{ asset('img/loreg-image.png') }}" alt="" class="">
        </div>
    </div>
</x-guest-layout>
