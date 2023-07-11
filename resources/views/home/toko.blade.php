@extends('layouts.home.main')

@push('livewireCSS')
    @livewireStyles
@endpush

@push('livewireJS')
    @livewireScripts
@endpush

@section('container')
    @if (session()->has('success'))
        <div class="toast z-10" id="session-success">
            <div class="alert alert-success">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        </div>
    @endif

    @livewire('toko-produk')

    <script>
        setTimeout(function() {
            $('#session-success').fadeOut('fast');
        }, 5000);
    </script>
@endsection