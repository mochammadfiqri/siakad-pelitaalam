@extends('layouts.main')
@section('navbar1', 'Jurusan')
@section('navbar2', 'Data Jurusan')

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
    <livewire:index-jurusan />
    
    {{-- Footer --}}
    <footer class="footer py-4  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                            Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative
                                Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .nav-pills .nav-link.active {
            background-color: #e91e63;
            color: white; /* Adjust text color as needed */
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
<script>
    var ctx = document.getElementById("chart-bars").getContext("2d");

        new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
            label: "Sales",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "rgba(255, 255, 255, .8)",
            data: [50, 20, 10, 22, 50, 10, 40],
            maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                color: "#fff"
                },
            },
            x: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });


        var ctx2 = document.getElementById("chart-line").getContext("2d");

        new Chart(ctx2, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
            maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });

        var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

        new Chart(ctx3, {
        type: "line",
        data: {
            labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            datasets: [{
            label: "Mobile apps",
            tension: 0,
            borderWidth: 0,
            pointRadius: 5,
            pointBackgroundColor: "rgba(255, 255, 255, .8)",
            pointBorderColor: "transparent",
            borderColor: "rgba(255, 255, 255, .8)",
            borderWidth: 4,
            backgroundColor: "transparent",
            fill: true,
            data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
            maxBarThickness: 6

            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)'
                },
                ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5]
                },
                ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                },
                }
            },
            },
        },
        });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
</script>
<script>
        // Rounded slider
        const setValue = function(value, active) {
        document.querySelectorAll("round-slider").forEach(function(el) {
            if (el.value === undefined) return;
            el.value = value;
        });
        const span = document.querySelector("#value");
        span.innerHTML = value;
        if (active)
            span.style.color = 'red';
        else
            span.style.color = 'black';
        }

        document.querySelectorAll("round-slider").forEach(function(el) {
        el.addEventListener('value-changed', function(ev) {
            if (ev.detail.value !== undefined)
            setValue(ev.detail.value, false);
            else if (ev.detail.low !== undefined)
            setLow(ev.detail.low, false);
            else if (ev.detail.high !== undefined)
            setHigh(ev.detail.high, false);
        });

        el.addEventListener('value-changing', function(ev) {
            if (ev.detail.value !== undefined)
            setValue(ev.detail.value, true);
            else if (ev.detail.low !== undefined)
            setLow(ev.detail.low, true);
            else if (ev.detail.high !== undefined)
            setHigh(ev.detail.high, true);
        });
        });

        // Count To
        if (document.getElementById('status1')) {
        const countUp = new CountUp('status1', document.getElementById("status1").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }
        if (document.getElementById('status2')) {
        const countUp = new CountUp('status2', document.getElementById("status2").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }
        if (document.getElementById('status3')) {
        const countUp = new CountUp('status3', document.getElementById("status3").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }
        if (document.getElementById('status4')) {
        const countUp = new CountUp('status4', document.getElementById("status4").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }
        if (document.getElementById('status5')) {
        const countUp = new CountUp('status5', document.getElementById("status5").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }
        if (document.getElementById('status6')) {
        const countUp = new CountUp('status6', document.getElementById("status6").getAttribute("countTo"));
        if (!countUp.error) {
            countUp.start();
        } else {
            console.error(countUp.error);
        }
        }

        // Chart Doughnut Consumption by room
        var ctx1 = document.getElementById("chart-consumption").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(203,12,159,0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(72,72,176,0.0)');
        gradientStroke1.addColorStop(0, 'rgba(203,12,159,0)'); //purple colors

        new Chart(ctx1, {
        type: "doughnut",
        data: {
            labels: ['Living Room', 'Kitchen', 'Attic', 'Garage', 'Basement'],
            datasets: [{
            label: "Consumption",
            weight: 9,
            cutout: 90,
            tension: 0.9,
            pointRadius: 2,
            borderWidth: 2,
            backgroundColor: ['#FF0080', '#9E9E9E', '#03A9F4', '#4CAF50', '#ff667c'],
            data: [15, 20, 13, 32, 20],
            fill: false
            }],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                },
                ticks: {
                display: false
                }
            },
            x: {
                grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                },
                ticks: {
                display: false,
                }
            },
            },
        },
        });

        // Chart Consumption by day
        var ctx = document.getElementById("chart-cons-week").getContext("2d");

        new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["M", "T", "W", "T", "F", "S", "S"],
            datasets: [{
            label: "Watts",
            tension: 0.4,
            borderWidth: 0,
            borderRadius: 4,
            borderSkipped: false,
            backgroundColor: "#3A416F",
            data: [26, 29, 28, 32, 29, 28, 30],
            maxBarThickness: 6
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                display: false,
            }
            },
            interaction: {
            intersect: false,
            mode: 'index',
            },
            scales: {
            y: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: '#c1c4ce5c'
                },
                ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                color: '#9ca2b7',
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                }
                },
            },
            x: {
                grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: '#c1c4ce5c'
                },
                ticks: {
                display: true,
                color: '#9ca2b7',
                padding: 10,
                font: {
                    size: 14,
                    weight: 300,
                    family: "Roboto",
                    style: 'normal',
                    lineHeight: 2
                }
                }
            },
            },
        }
        });
</script>

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
                @if(session('toast_type'))
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