@extends('layouts.publicMain')

@section('stylesheet')
<!-- Fonts and icons -->
<link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
<!-- Nucleo Icons -->
<link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
<link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
<!-- Font Awesome Icons -->
{{-- <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script> --}}
<script src="https://kit.fontawesome.com/f78f9c4cfa.js" crossorigin="anonymous"></script>
<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
<!-- CSS Files -->
<link id="pagestyle" href="{{ asset('css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />

<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

{{-- Sweet Alert 2 --}}
<link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<style>
    .colored-toast.swal2-icon-success {
    background-color: #4caf50 !important;
    }
    
    .colored-toast.swal2-icon-error {
    background-color: #f44335 !important;
    }
    
    .colored-toast.swal2-icon-warning {
    background-color: #fb8c00 !important;
    }
    
    .colored-toast.swal2-icon-info {
    background-color: #03a9f4 !important;
    }
    
    .colored-toast.swal2-icon-question {
    background-color: #87adbd !important;
    }
    
    .colored-toast .swal2-title {
    color: white;
    }
    
    .colored-toast .swal2-close {
    color: white;
    }
    
    .colored-toast .swal2-html-container {
    color: white;
    }
</style>
@endsection

@section('content')
<body class="bg-gray-200">
    <main class="main-content mt-0">
        {{-- @include('sweetalert::alert') --}}
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                    <div class="row mt-3">
                                        <div class="col-2 text-center ms-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-facebook text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center px-1">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-github text-white text-lg"></i>
                                            </a>
                                        </div>
                                        <div class="col-2 text-center me-auto">
                                            <a class="btn btn-link px-3" href="javascript:;">
                                                <i class="fa fa-google text-white text-lg"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST" role="form" class="text-start">
                                    @csrf
                                    <div class="input-group input-group-outline mt-0 mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" name="username" id="username" class="form-control"
                                            oninput="checkInput(this)" onfocus="focused(this)"
                                            onfocusout="defocused(this)" required>
                                    </div>
                                    <div class="input-group input-group-outline mt-0 mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" name="password" id="password" class="form-control"
                                            oninput="checkInput(this)" onfocus="focused(this)"
                                            onfocusout="defocused(this)" required>
                                    </div>
                                    <div class="form-check form-switch d-flex align-items-center mb-3">
                                        <input class="form-check-input" type="checkbox" id="showpassword">
                                        <label class="form-check-label mb-0 ms-3" for="showpassword">Lihat
                                            Password</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">
                                            Sign in</button>
                                    </div>
                                    <p class="mt-2 text-sm text-center">
                                        <a href="forgot-password"
                                            class="text-primary text-gradient font-weight-bold">Lupa Password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    {{-- JS Files --}}
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    
    <!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
    <script src="{{ asset('js/plugins/countup.min.js') }}"></script>
    <script src="{{ asset('js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('js/plugins/prism.min.js') }}"></script>
    <script src="{{ asset('js/plugins/highlight.min.js') }}"></script>
    
    <!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
    <script src="{{ asset('js/plugins/rellax.min.js') }}"></script>
    
    <!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
    <script src="{{ asset('js/plugins/tilt.min.js') }}"></script>
    <!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
    <script src="{{ asset('js/plugins/choices.min.js') }}"></script>
    <!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
    
    <!--  Google Maps Plugin    -->
    <script src="{{ asset('js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showpassword');
    
        showPasswordCheckbox.addEventListener('change', function() {
            if (this.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const inputs = document.querySelectorAll('.form-control');
    
            inputs.forEach(function (input) {
                const div = input.parentNode;
                const errorElement = div.querySelector('.text-danger');
    
                // Check initial input value
                if (input.value.trim() !== '') {
                    div.classList.add('is-filled');
                    if (input.checkValidity() && !errorElement) {
                        div.classList.add('is-valid');
                    }
                }
    
                // Check input on focusout
                input.addEventListener('focusout', function () {
                    if (input.value.trim() !== '') {
                        div.classList.add('is-filled');
                        if (input.checkValidity() && !errorElement) {
                            div.classList.add('is-valid');
                            div.classList.remove('is-invalid');
                        } else {
                            div.classList.remove('is-valid');
                            div.classList.add('is-invalid');
                        }
                    } else {
                        div.classList.remove('is-filled');
                        div.classList.remove('is-valid');
                        div.classList.remove('is-invalid');
                    }
                });
            });
        });
    
        function focused(input) {
            input.parentNode.classList.add('is-focused');
        }
    
        function defocused(input) {
            input.parentNode.classList.remove('is-focused');
        }
    </script>

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <script>
        // Menyiapkan SweetAlert2 Toast sesuai dengan definisi Anda
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-right',
        iconColor: 'white',
        customClass: {
            popup: 'colored-toast'
        },
        showConfirmButton: false,
        timer: 3500,
        timerProgressBar: true
        });

        // Menampilkan SweetAlert2 Toast berdasarkan jenis pesan
        document.addEventListener("DOMContentLoaded", function() {
            @if(session('toast_type'))
            Toast.fire({
                icon: '{{ session('toast_type') }}',
                title: '{{ session('toast_message') }}'
            });
            @endif
        });
    </script>
</body>
@endsection