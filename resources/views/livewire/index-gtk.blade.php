<div>
    @include('livewire.modal-create-users')
    <div class="row">
        <div class="col-12">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-white shadow-dark border-radius-lg pt-4 pb-3">
                    <div class="col-12 col-md-12 col-lg-4">
                        <ul class="nav nav-pills nav-fill p-0 ms-3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#dataGuru"
                                    role="tab" aria-controls="dataGuru" aria-selected="true">
                                    Data
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#kehadiranGuru"
                                    role="tab" aria-controls="kehadiranGuru" aria-selected="false">
                                    Kehadiran
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade active show" id="dataGuru" role="tabpanel" aria-labelledby="dataGuru-tab">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card my-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-white text-uppercase ps-3 float-start">
                                            Daftar GTK
                                        </h6>
                                        <div class="align-content-center float-end me-4">
                                            <h6 class="fw-semibold text-white mb-0">
                                                <img src="{{ asset('img/icon-user.svg') }}" alt="icon-user"> 
                                                Jumlah Total : <span class="fw-extrabold">{{ $countGuru }} GTK</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="float-start mb-2 col-12 col-md-12 col-lg-4">
                                        <div
                                            class="input-group input-group-outline @if ($errors->has('search')) is-filled is-invalid @elseif ($search) is-filled @endif">
                                            <label class="form-label">Cari...</label>
                                            <input wire:model="search" type="text" class="form-control"
                                                oninput="checkInput(this)" onfocus="focused(this)"
                                                onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-8">
                                        <a href="#" class="btn btn-rounded btn-outline-secondary mb-2 float-end" role="button">
                                            <i class="material-icons material-icons-round">print</i>&nbsp;&nbsp;Rekap Laporan
                                        </a>
                                        <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" href="#">
                                            <i class="fa-solid fa-upload"></i>&nbsp;&nbsp;&nbsp;Unggah Data
                                        </a>
                                        <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" data-bs-toggle="modal"
                                            data-bs-target="#addUser" data-te-ripple-init data-te-ripple-color="light">
                                            <i class="material-icons material-icons-round">add</i>&nbsp;&nbsp;&nbsp;Tambah Guru
                                        </a>
                                    </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- <livewire:table-data-guru> --}}
                                @include('livewire.table-gtk')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="kehadiranGuru" role="tabpanel" aria-labelledby="kehadiranGuru-tab">
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="card my-2">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="text-white text-uppercase ps-3 float-start">
                                            Daftar Kehadiran
                                        </h6>
                                        <div class="align-content-center float-end me-4">
                                            <h6 class="fw-semibold text-white mb-0"><img
                                                    src="{{ asset('img/icon-user.svg') }}" alt="icon-user"> Jumlah Total
                                                : <span class="fw-extrabold">28 GTK</span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="float-start col-4">
                                        <div
                                            class="input-group input-group-outline @if ($errors->has('search')) is-filled is-invalid @elseif ($search) is-filled is-valid @endif">
                                            <label class="form-label">Cari...</label>
                                            <input wire:model="search" type="text" class="form-control"
                                                oninput="checkInput(this)" onfocus="focused(this)"
                                                onfocusout="defocused(this)">
                                        </div>
                                    </div>
                                    <div class="float-end">
                                        <a href="#"
                                            class="btn btn-rounded btn-outline-secondary mb-2 float-start me-2"
                                            role="button">
                                            <i class="material-icons material-icons-round">print</i>&nbsp;&nbsp;Rekap
                                            Laporan
                                        </a>
                                        <a class="btn btn-rounded bg-gradient-info mb-0 me-1" href="#">
                                            <i class="fa-solid fa-upload"></i>&nbsp;&nbsp;&nbsp;Unggah Data
                                        </a>
                                        <a class="btn btn-rounded bg-gradient-info mb-0" href="#">
                                            <i
                                                class="material-icons material-icons-round">add</i>&nbsp;&nbsp;&nbsp;Tambah
                                            Guru
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>