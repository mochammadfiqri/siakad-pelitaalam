<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://github.com/mochammadfiqri/siakad-pelitaalam" target="_blank">
            <div class="d-flex align-items-center">
                <img src="{{ asset('img/logo-ct.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                <div class="d-flex flex-column ms-2">
                    <span class="font-weight-bold text-white">
                        SIAKAD
                    </span>
                    <span class="font-weight-bold text-white">
                        PELITA ALAM
                    </span>
                </div>
            </div>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            @if (Auth::user()->role_id == 1)
                <!-- Admin -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                        aria-controls="ProfileNav" role="button" aria-expanded="false">
                        <img src="{{ asset('img/user.png') }}" class="avatar">
                        <span
                            class="nav-link-text ms-2 ps-1 font-weight-bold text-white text-capitalize">{{ Auth::user()->nama }}</span>
                    </a>
                    <div class="collapse" id="ProfileNav" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    {{-- <a href="/profile_admin"
                                        class="nav-link text-white {{ request()->routeIs('profile-admin') ? 'active bg-gradient-primary' : '' }}">
                                        --}}
                                    <span class="material-icons-round">person</span>
                                    <span class="sidenav-normal ms-3 ps-1">My Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="/logout">
                                    <span class="material-icons-round">logout</span>
                                    <span class="sidenav-normal ms-3 ps-1">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr class="horizontal light mt-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('dashboard.admin') ? 'active bg-gradient-primary' : '' }}"
                        href="/admin/dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="collapse" href="#setSekolah"
                        class="nav-link text-white" aria-controls="setSekolah" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">tune</i>
                        </div>
                        <span class="nav-link-text ms-1">Pengaturan Sekolah</span>
                    </a>
                    <div class="collapse" id="setSekolah">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs('KS') ? 'active bg-gradient-primary' : '' }}" href="/kepala-sekolah">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Kepala Sekolah</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Admin Sekolah</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Staff Sekolah</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="horizontal light mt-0 mb-2">
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white collapsed" data-bs-toggle="collapse" href="#kurikulum" aria-controls="kurikulum" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">school</i>
                        </div>
                        <span class="nav-link-text ms-1">Kurikulum</span>
                    </a>
                    <div class="collapse" id="kurikulum">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs('data.gtk') ? 'active bg-gradient-primary' : '' }}" href="/gtk">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">GTK</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs('siswa') ? 'active bg-gradient-primary' : '' }}" href="/siswa">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Siswa</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs('jurusan') ? 'active bg-gradient-primary' : '' }}" href="/jurusan">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Jurusan</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs('TahunAkademik') ? 'active bg-gradient-primary' : '' }}" href="/tahun-akademik">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Tahun Akademik</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Monev</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Kalender</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Buku Induk</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Buku Kerja</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="horizontal light mt-0 mb-2">
                    </div>
                </li>
                {{-- PPDB --}}
                <li class="nav-item">
                    <a class="nav-link text-white" data-bs-toggle="collapse" href="#ppdb"
                        class="nav-link text-white" aria-controls="ppdb" role="button" aria-expanded="false">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">person_pin</i>
                        </div>
                        <span class="nav-link-text ms-1">PPDB</span>
                    </a>
                    <div class="collapse" id="ppdb">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Alur</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Jalur</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Pendaftar</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="#">
                                    <div
                                        class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                        <i class="material-icons-round opacity-10">person</i>
                                    </div>
                                    <span class="nav-link-text ms-1">Ujian Penerimaan</span>
                                </a>
                            </li>
                        </ul>
                        <hr class="horizontal light mt-0 mb-2">
                    </div>
                </li>
                {{-- <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages
                    </h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('create.user') ? 'active bg-gradient-primary' : '' }}" href="/tambah-akun">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Tambah Akun</span>
                    </a>
                </li> --}}
            @elseif(Auth::user()->role_id == 2)
                <!-- Siswa -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                        aria-controls="ProfileNav" role="button" aria-expanded="false">
                        <img src="{{ asset('img/drake.jpg') }}" class="avatar">
                        <span
                            class="nav-link-text ms-2 ps-1 font-weight-bold text-white text-capitalize">{{ Auth::user()->nama }}</span>
                    </a>
                    <div class="collapse" id="ProfileNav" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    {{-- <a href="/profile_admin"
                                        class="nav-link text-white {{ request()->routeIs('profile-admin') ? 'active bg-gradient-primary' : '' }}">
                                        --}}
                                    <span class="material-icons-round">person</span>
                                    <span class="sidenav-normal ms-3 ps-1">My Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="/logout">
                                    <span class="material-icons-round">logout</span>
                                    <span class="sidenav-normal ms-3 ps-1">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr class="horizontal light mt-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary"
                        href="{{ asset('pages/dashboard.html') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            @elseif(Auth::user()->role_id == 3)
                <!-- Guru -->
                <li class="nav-item mb-2 mt-0">
                    <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white"
                        aria-controls="ProfileNav" role="button" aria-expanded="false">
                        <img src="{{ asset('img/drake.jpg') }}" class="avatar">
                        <span
                            class="nav-link-text ms-2 ps-1 font-weight-bold text-white text-capitalize">{{ Auth::user()->nama }}</span>
                    </a>
                    <div class="collapse" id="ProfileNav" style="">
                        <ul class="nav ">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-white">
                                    {{-- <a href="/profile_admin"
                                        class="nav-link text-white {{ request()->routeIs('profile-admin') ? 'active bg-gradient-primary' : '' }}">
                                        --}}
                                    <span class="material-icons-round">person</span>
                                    <span class="sidenav-normal ms-3 ps-1">My Profile</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white " href="/logout">
                                    <span class="material-icons-round">logout</span>
                                    <span class="sidenav-normal ms-3 ps-1">Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <hr class="horizontal light mt-0 mb-2">
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary"
                        href="{{ asset('pages/dashboard.html') }}">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons-round opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>
