<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    <title>
        SIAKAD - PELITA ALAM
    </title>
    @yield('stylesheet')
    @livewireStyles
</head>

<body class="g-sidenav-show bg-gray-200">
    @yield('sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ps ps--active-y ">
        <!-- Navbar -->
        @include('layouts.navbar')
        <!-- End Navbar -->
        @yield('content')

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div>
        <div class="ps__rail-y" style="top: 0px; height: 1186px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 913px;"></div></div>
    </main>
    @include('layouts.fixedPlugin')

    <!--   Core JS Files   -->
    @yield('javascript')
    {{-- <script src="https://unpkg.com/dropzone@6.0.0-beta.1/dist/dropzone-min.js"></script> --}}
    {{-- <script src="{{ asset('js/plugins/dropzone.min.js') }}"></script> --}}
    @livewireScripts
</body>

</html>