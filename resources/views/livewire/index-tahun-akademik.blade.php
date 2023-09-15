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
                                    Daftar Tahun AKademik
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
    @if ($dataTA->count() > 0)
        @foreach ($dataTA as $data)
            <div class="row">
                <div class="col-12 mt-2">
                    <div class="card mt-2">
                        <div class="card-body px-0 pb-2">
                            @if($data->status === 'active')
                                <button type="button" class="btn btn-sm btn-outline-success btn-rounded shadow-dark ms-4"
                                    style="width: 15%" disabled>Aktif</button>
                            @else
                                <button type="button" class="btn btn-sm btn-outline-secondary btn-rounded shadow-dark ms-4"
                                    style="width: 15%" disabled>Nonaktif</button>
                            @endif
                            {{-- <button type="button" class="btn btn-sm @if($data->status === 'aktif') btn-outline-success @else btn-outline-secondary @endif btn-rounded shadow-dark ms-4"
                                style="width: 15%" @if($data->status !== 'aktif') disabled @endif>{{ $data->status }}</button> --}}
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
                                    <li>
                                        @if($data->status === 'active')
                                            <a class="dropdown-item border-radius-md" wire:click="validDeactivation({{ $data->id }})">Nonaktifkan</a>
                                        @else
                                            <a class="dropdown-item border-radius-md" wire:click="validActivation({{ $data->id }})">Aktifkan</a>
                                        @endif
                                    </li>
                                    <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal" data-bs-target="#updateTA" wire:click='editTA({{ $data->id }})'>Edit</a></li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <a href="/tahun-akademik/mapel" class="ms-4 mt-2">
                            <h4 class="fw-bold mb-0">{{ $data->tahun_awal }} / {{ $data->tahun_akhir }} - {{ $data->semester }}</h4>
                            @foreach ($data->users as $kepsek)
                                <p class="fw-bold fst-italic text-info mb-0">{{ $kepsek->nama }}</p>    
                            @endforeach
                            <div
                                class="d-flex mb-3 flex-grow-1 flex-wrap justify-content-md-start justify-content-between mt-4">
                                <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                    <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Awal</p>
                                    <p class="fw-bold m-0">{{ $data->formatted_tgl_awal }}</p>
                                </div>
                                <div class="me-md-5 mb-lg-0 mb-3 p-3 p-md-0">
                                    <p class="fw-bolder text-xs text-secondary mb-1">Tanggal Akhir</p>
                                    <p class="fw-bold m-0">{{ $data->formatted_tgl_akhir }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="col-12 mt-2">
                <div class="card mt-2">
                    <div class="card-body px-0 pb-2">
                        <h5 class="text-center">Tidak Ada Data Tahun Akademik</h5>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>