@extends('layouts.main')
@section('navbar1', 'Detail Kelas')
@section('navbar2', 'Detail Kelas')

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

@section('sidebar')
    @include('layouts.sidebar')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <livewire:detail-rombel />

        <style>
            .nav-pills .nav-link.active {
                background-color: #e91e63;
                color: white;
                /* Adjust text color as needed */
            }
        </style>
    </div>
@endsection

@section('javascript')
    {{-- Script From Material Dashboard --}}
    <script src="{{ asset('js/core/popper.min.js') }}"></script>
    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('js/material-dashboard.min.js?v=3.0.4') }}"></script>

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
            @if (session('toast_type'))
                Toast.fire({
                    icon: '{{ session('toast_type') }}',
                    title: '{{ session('toast_message') }}'
                });
            @endif
        });
    </script>

    {{-- Refresh komponen setiap 5 detik (5000 milidetik) --}}
    <script>
        Livewire.hook('message.processed', (message, component) => {
            setTimeout(() => {
                Livewire.find(component.el.getAttribute('wire:id')).call('updateTotalCount');
            }, 3000);
        });
    </script>
    
@endsection