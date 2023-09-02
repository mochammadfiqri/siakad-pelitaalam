<div>
    @include('livewire.modal-tahun-akademik')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card my-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-white text-uppercase ps-3 float-start">
                                    Tahun AKademik
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="float-start mb-2 col-12 col-md-12 col-lg-4">
                            <div
                                class="input-group input-group-outline @if ($errors->has('search')) is-filled is-invalid @elseif ($search) is-filled @endif">
                                <label class="form-label">Cari...</label>
                                <input wire:model="search" type="text" class="form-control"
                                    oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            <a href="#" class="btn btn-rounded btn-outline-secondary mb-2 float-end"
                                role="button">
                                <i class="material-icons material-icons-round">print</i>&nbsp;&nbsp;Rekap Laporan
                            </a>
                            <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" data-bs-toggle="modal"
                                data-bs-target="#addTA" data-te-ripple-init data-te-ripple-color="light">
                                <i class="material-icons material-icons-round">add</i>&nbsp;&nbsp;&nbsp;Tambah Tahun
                                Akademik
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                </div>
            </div>
        </div>
    </div>
    {{-- @if ($dataTA->count() > 0)
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card mt-2">
                    <div class="card-body px-0 pb-2">
                        <button type="button" class="btn btn-sm btn-outline-success btn-rounded ms-4" style="width: 15%"
                            disabled>Aktif</button>
                        <style>
                            /* Menyembunyikan tanda dropdown */
                            .dropdown-toggle::after {
                                content: none !important;
                            }

                            /* Penanganan Z-Index */
                            .dropdown {
                                position: relative;
                                z-index: 1000;
                            }
                        </style>
                        <div class="btn-group dropstart float-end">
                            <button type="button" class="btn btn-link text-secondary mb-0 dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-icons">more_horiz</span>
                            </button>
                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Hapus</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <a href="#" class="ms-4 mt-2">
                        <h4 class="fw-bold mb-0">2023 / 2024 - Genap</h4>
                        <p class="fw-bold fst-italic text-info mb-0">Miftahul Hikam, M.Pd.</p>
                        <div class="d-flex mb-3 flex-grow-1 flex-wrap justify-content-md-start justify-content-between mt-4">
                            <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Awal</p>
                                <p class="fw-bold m-0">Sen, 01 Jan 2024</p>
                            </div>
                            <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Akhir</p>
                                <p class="fw-bold m-0">Jum, 28 Jun 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @else
        <div class="row">
                <div class="col-12 mt-2">
                    <div class="card mt-2">
                        <div class="card-body px-0 pb-2">
                            <h5 class="text-center">Tidak Ada Tahun Akademik</h5>
                        </div>
                    </div>
                </div>
        </div>
    @endif --}}
    <div class="row">
            <div class="col-12 mt-2">
                <div class="card mt-2">
                    <div class="card-body px-0 pb-2">
                        <button type="button" class="btn btn-sm btn-outline-success btn-rounded ms-4" style="width: 15%"
                            disabled>Aktif</button>
                        <style>
                            /* Menyembunyikan tanda dropdown */
                            .dropdown-toggle::after {
                                content: none !important;
                            }

                            /* Penanganan Z-Index */
                            .dropdown {
                                position: relative;
                                z-index: 1000;
                            }
                        </style>
                        <div class="btn-group dropstart float-end">
                            <button type="button" class="btn btn-link text-secondary mb-0 dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="material-icons">more_horiz</span>
                            </button>
                            <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit</a></li>
                                <li><a class="dropdown-item border-radius-md" href="javascript:;">Hapus</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <a href="#" class="ms-4 mt-2">
                        <h4 class="fw-bold mb-0">2023 / 2024 - Genap</h4>
                        <p class="fw-bold fst-italic text-info mb-0">Miftahul Hikam, M.Pd.</p>
                        <div class="d-flex mb-3 flex-grow-1 flex-wrap justify-content-md-start justify-content-between mt-4">
                            <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Awal</p>
                                <p class="fw-bold m-0">Sen, 01 Jan 2024</p>
                            </div>
                            <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Akhir</p>
                                <p class="fw-bold m-0">Jum, 28 Jun 2024</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
</div>
