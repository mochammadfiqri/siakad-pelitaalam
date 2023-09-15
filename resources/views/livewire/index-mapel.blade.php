<div>
    @include('livewire.modal-mapel')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card my-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-faded-light shadow-dark border-radius-lg ">
                        <div class="row">
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill navbar-light pt-3 pb-3" >
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('mapel') ? 'active' : '' }}">
                                            <span class="material-icons align-middle mb-1">badge</span>
                                            Mapel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('rombel') ? 'active' : '' }}" 
                                        href="{{ route('rombel') }}">
                                            <span class="material-icons align-middle mb-1">laptop</span>
                                            Rombel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#jam-mengajar"
                                            role="tab" aria-controls="jam-mengajar" aria-selected="false">
                                            <span class="material-icons align-middle mb-1">
                                                badge
                                            </span>
                                            Jam Mengajar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#jadwal-mengajar"
                                            role="tab" aria-controls="jadwal-mengajar" aria-selected="false">
                                            <span class="material-icons align-middle mb-1">
                                                laptop
                                            </span>
                                            Jadwal Mengajar
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3 align-items-center">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills navbar-light pt-3 pb-3" id="mapel-tab" >
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1 active" data-bs-toggle="tab" href="#kelompok-a"
                                        role="tab" aria-controls="kelompok-a" aria-selected="true">
                                        <span class="material-icons align-middle mb-1">badge</span>
                                        Kelompok A
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#kelompok-b"
                                        role="tab" aria-controls="kelompok-b" aria-selected="false">
                                        <span class="material-icons align-middle mb-1">laptop</span>
                                        Kelompok B
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#kelompok-c"
                                        role="tab" aria-controls="kelompok-c" aria-selected="false">
                                        <span class="material-icons align-middle mb-1">badge</span>
                                        Kelompok C
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div class="ms-7">
                                        <a href="#"
                                            class="btn btn-rounded btn-outline-secondary mb-0 me-2 float-end">
                                            <i class="fa-solid fa-download fa-lg"></i>&nbsp;&nbsp;&nbsp;Unduh
                                            Data
                                        </a>
                                        <a href="#"
                                            class="btn btn-rounded btn-outline-secondary mb-0 me-2 float-end">
                                            <i class="fa-solid fa-upload fa-lg"></i>&nbsp;&nbsp;&nbsp;Unggah
                                            Data
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card mt-2">
                <div class="tab-content" id="Mapel-tabContent">
                    <div class="tab-pane fade active show" id="kelompok-a" role="tabpanel"
                        aria-labelledby="kelompok-a-tab">
                        <div class="row align-items-center mt-3 mb-3">
                            <div class="col-6">
                                <h4 class="ms-3 fw-bold">Kelompok A</h4>
                            </div>
                            <div class="col-6">
                                <x-btn-tambah-data toggle="modal" target="#addMapel" href="#" />
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                                <x-tbl-mapel :dataMapel="$mapelKelompokA" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="kelompok-b" role="tabpanel" aria-labelledby="kelompok-b-tab">
                        <div class="row align-items-center mt-3 mb-3">
                            <div class="col-6">
                                <h4 class="ms-3 fw-bold">Kelompok B</h4>
                            </div>
                            <div class="col-6">
                                <x-btn-tambah-data toggle="modal" target="#addMapel" href="#" />
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                                <x-tbl-mapel :dataMapel="$mapelKelompokB" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="kelompok-c" role="tabpanel" aria-labelledby="kelompok-c-tab">
                        <div class="row align-items-center mt-3 mb-3">
                            <div class="col-6">
                                <h4 class="ms-3 fw-bold">Kelompok C</h4>
                            </div>
                            <div class="col-6">
                                <x-btn-tambah-data toggle="modal" target="#addMapel" href="#" />
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                                <x-tbl-mapel :dataMapel="$mapelKelompokC" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
