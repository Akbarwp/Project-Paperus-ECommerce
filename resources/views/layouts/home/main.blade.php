<!DOCTYPE html>
<html lang="en" data-theme='light' class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paperus</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- JQuery --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    {{-- LeafletJS --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

    <style>
        #map {
            /* width: 50%; */
            height: 500px;
        }
    </style>
    @stack('livewireCSS')
</head>
<body class="scrollbar-thin scrollbar-thumb-redMain scrollbar-track-redMain/30 scrollbar-thumb-rounded-full hover:scrollbar-thumb-redMain/80 transition-all">
    <header>
        <nav>
            @include('layouts.home.navbar')
        </nav>
    </header>

    <main>
        @yield('container')
    </main>

    @include('layouts.home.footer')

    @stack('livewireJS')
</body>
</html>