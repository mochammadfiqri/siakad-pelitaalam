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

    <link href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
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
    <body class="sign-in-basic">
        <!-- End Navbar -->
        <div class="page-header align-items-start min-vh-100"
            style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Selamat Datang</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="card-body col-12 col-md-6 col-lg-6">
                                    <h5 class="text-center color-secondary fw-semibold mb-4">Pilih akun untuk masuk</h5>
                                    <div class="row justify-content-center mb-5">
                                        <div class="col-lg-4 col-md-6 col-6">
                                            <div class="nav-wrapper position-relative end-0">
                                                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#warga-sekolah" role="tab"
                                                            aria-controls="warga-sekolah" aria-selected="true">
                                                            Warga Sekolah
                                                        </a>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#lainnya" role="tab"
                                                            aria-controls="lainnya" aria-selected="false">
                                                            Lainnya
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade active show" id="warga-sekolah" role="tabpanel" aria-labelledby="warga-sekolah-tab">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-5 col-md-6 col-12">
                                                    <a class="text-decoration-none mb-4" href="/login/kepala_sekolah">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-kepala-sekolah.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Kepala Sekolah</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="text-decoration-none mb-4" href="/login/manajemen">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-manajemen-sekolah.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Manajemen
                                                                            <!-- -->
                                                                            <!-- -->Sekolah
                                                                            <!-- -->
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-12">
                                                    <a class="text-decoration-none mb-4" href="/login/gtk">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-guru.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">GTK</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="text-decoration-none mb-4" href="/login/siswa">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-murid.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Siswa</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-5 col-md-6 col-12 ">
                                                    <a class="text-decoration-none mb-4" href="/login/staff">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-kepala-sekolah.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Staff Sekolah</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a class="text-decoration-none mb-4" href="/login/bendahara">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img
                                                                        src="{{ asset('img/icon-role-manajemen-sekolah.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Bendahara
                                                                            <!-- -->
                                                                            <!-- -->Sekolah
                                                                            <!-- -->
                                                                        </h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-lg-5 col-md-6 col-12">
                                                    <a class="text-decoration-none mb-4" href="/login/alumni">
                                                        <div class="card mb-4 pointer rounded-ss border-2">
                                                            <div class="card-body p-sm-4 p-3">
                                                                <div class="d-flex align-items-center"><img src="{{ asset('img/icon-role-guru.svg') }}">
                                                                    <div class="ms-sm-4 ms-3 color-secondary">
                                                                        <label class="mb-1 fs-14-ss">Saya Seorang</label>
                                                                        <h5 class="m-0 fw-bold sm-fs-6">Alumni</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .nav-pills .nav-link.active {
                background-color: #e91e63;
                color: white; /* Adjust text color as needed */
            }
            
            /* Change the outline color when the link is clicked */
            .card:active {
                border-color: #e91e63; /* Change this to your desired color */
            }
            /* Change the color when the link is hovered */
            .card:hover {
                border-color: #e91e63; /* Change to the desired color */
            }
            
            /* Change the color of the link text when hovered */
            .card:hover a {
                color: #e91e63; /* Change to the desired color */
            }
        </style>
        {{-- JS Files --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
        <script src="{{ asset('js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>
        
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