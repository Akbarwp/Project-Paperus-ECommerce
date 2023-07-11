@extends('layouts.home.main')

@section('container')
    <div class="font-inter pt-10 mx-12 ">

        @if (session()->has('success'))
            <div class="alert alert-success shadow-lg mb-5">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <h1 class="text-blackMain font-bold text-2xl md:text-3xl lg:text-4xl">
            Profil <span class="uppercase">{{ $user->name }}</span>
        </h1>
        
        <form method="post" class="mt-3 w-full lg:flex lg:flex-wrap lg:justify-center xl:gap-x-5">
            @csrf
            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label">
                    <span class="label-text font-semibold">Nama Lengkap:</span>
                </label>
                <input type="text" value="{{ $user->nama_lengkap }}" placeholder="Nama Lengkap" name="nama_lengkap" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('nama_lengkap')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Telepon:</span>
                </label>
                <input type="text" value="{{ $user->telepon }}" placeholder="contoh: 081234567890" name="telepon" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('telepon')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Jalan:</span>
                </label>
                <input type="text" value="{{ $user->jalan }}" placeholder="Nama Jalan" name="jalan" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('jalan')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Kelurahan:</span>
                </label>
                <input type="text" value="{{ $user->kelurahan }}" placeholder="Nama Kelurahan" name="kelurahan" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('kelurahan')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Kecamatan:</span>
                </label>
                <input type="text" value="{{ $user->kecamatan }}" placeholder="Nama Kecamatan" name="kecamatan" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('kecamatan')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Kabupaten:</span>
                </label>
                <input type="text" value="{{ $user->kabupaten }}" placeholder="Nama Kabupaten" name="kabupaten" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('kabupaten')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Provinsi:</span>
                </label>
                <input type="text" value="{{ $user->provinsi }}" placeholder="Nama Provinsi" name="provinsi" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('provinsi')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-control w-full lg:max-w-2xl xl:max-w-lg mt-2">
                <label class="label font-semibold">
                    <span class="label-text">Kode Pos:</span>
                </label>
                <input type="text" value="{{ $user->kode_pos }}" placeholder="Nomor Kode Pos" name="kode_pos" class="input input-bordered w-full lg:max-w-2xl xl:max-w-lg" required />
                @error('kode_pos')
                    <span class="label-text-alt text-redMain">{{ $message }}</span>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-warning mt-5 w-full">Ubah Profil</button>
        </form>

    <div class="pb-20"></div>
@endsection
