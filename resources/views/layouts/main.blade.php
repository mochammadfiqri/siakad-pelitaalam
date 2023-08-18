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
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            @include('layouts.navbar')
        </nav>
        <!-- End Navbar -->
        @yield('content')
    </main>
    @include('layouts.fixedPlugin')
    <!--   Core JS Files   -->
    @yield('javascript')
    @livewireScripts
</body>

</html>