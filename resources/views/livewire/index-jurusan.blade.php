<div>
    @include('livewire.modal-jurusan')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card my-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-white text-uppercase ps-3 float-start">
                                    Daftar Jurusan
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
                            <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" href="#">
                                <i class="fa-solid fa-upload"></i>&nbsp;&nbsp;&nbsp;Unggah Data
                            </a>
                            <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end"
                                data-bs-toggle="modal" data-bs-target="#addJurusan" data-te-ripple-init
                                data-te-ripple-color="light">
                                <i class="material-icons material-icons-round">add</i>&nbsp;&nbsp;&nbsp;Tambah Jurusan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @include('livewire.table-jurusan')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>