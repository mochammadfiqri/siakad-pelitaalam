<div>
    {{-- @include('livewire.modal-rombel') --}}
    <div class="row">
        <div class="col-12 mt-0">
            <div class="card my-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-3 pb-2">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="text-white text-center text-uppercase ps-3 fw-bold">
                                <div class="float-start">
                                    <a class="text-white" href="javascript:history.back()"><i
                                            class="fa-solid fa-angle-left fa-lg"></i></a>
                                </div>
                                <div class="me-3">
                                    @foreach ($kelas as $data)
                                        {{ $data->kelas }} {{ $data->jurusan->nama }} {{ $data->kode_kelas }}
                                    @endforeach
                                    {{-- {{ $kelas->kelas }} --}}
                                </div>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card mt-2">
                <div class="tab-content" id="rombel-tabContent">
                    <div class="row align-items-center mt-3 mb-3">
                        <div class="col-5">
                            <div class="row">
                                <div class="nav-wrapper position-relative end-0">
                                    <ul class="nav nav-pills navbar-light pt-3 pb-3 ms-3" id="rombel-tab">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-5 py-1 active" data-bs-toggle="tab"
                                                href="#siswa" role="tab" aria-controls="siswa"
                                                aria-selected="true">
                                                <span class="material-icons align-middle mb-1">badge</span>
                                                Siswa
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#walas"
                                                role="tab" aria-controls="walas" aria-selected="false">
                                                <span class="material-icons align-middle mb-1">laptop</span>
                                                Wali Kelas
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="float-end">
                                        <x-btn-tambah-data toggle="modal" target="#addMapel" href="#" />
                                        <a class="btn btn-rounded bg-gradient-info mb-0 me-2 ms-2 float-end" href="#">
                                            <i class="fa-solid fa-upload"></i>&nbsp;&nbsp;&nbsp;Unggah Data
                                        </a>
                                        <x-btn-search style="display: flex; align-items: center;" placeholder="Cari Siswa..." />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="tab-pane fade active show" id="siswa" role="tabpanel" aria-labelledby="siswa-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                                <x-tbl-detail-kelas :dataKelas="$siswa" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="walas" role="tabpanel" aria-labelledby="walas-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <x-tbl-detail-kelas :dataKelas="$walas" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
