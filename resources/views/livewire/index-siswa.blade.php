<div>
    @include('livewire.modal-siswa')
    <div class="row mb-4">
        <div class="col-12">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="card border-radius-lg pt-2 pb-3">
                    <div class="card-body pb-0 p-2">
                        <div class="row">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h5 class="ms-2">Jumlah Siswa</h5>
                            </div>
                            <div class="col-6 text-start mb-2">
                                <div class="col-6 float-end">
                                    <div class="chart">
                                        <canvas id="doughnut-chart-gender" class="chart-canvas" height="250px"></canvas>
                                    </div>
                                </div>
                                <div class="col-5 my-auto float-end">
                                    <span class="badge badge-md badge-dot me-4 d-block text-end">
                                        <i class="fa-solid fa-circle" style="color: #ff0000;"></i>
                                        <span class="text-dark text-xs">Laki - Laki</span>
                                    </span>
                                    <span class="badge badge-md badge-dot me-4 d-block text-end">
                                        <i class="fa-solid fa-circle" style="color: #0084ff;"></i>
                                        <span class="text-dark text-xs">Perempuan</span>
                                    </span>
                                </div>
                            </div>
                            <div class="col-6 text-start mb-2">
                                <div class="col-6 float-start">
                                    <div class="chart">
                                        <canvas id="doughnut-chart-jurusan" class="chart-canvas" height="250px"></canvas>
                                    </div>
                                </div>
                                <div class="col-5 my-auto">
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="fa-solid fa-circle" style="color: #04ff00;"></i>
                                        <span class="text-dark text-xs">Keperawatan</span>
                                    </span>
                                    <span class="badge badge-md badge-dot me-4 d-block text-start">
                                        <i class="fa-solid fa-circle" style="color: #0091ff;"></i>
                                        <span class="text-dark text-xs">Farmasi</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="horizontal light mt-1 mb-2">
                    <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-start">
                        <div class="col-6">
                            <p class="text-sm">
                                Jumlah Total : <b>102 Siswa</b>
                            </p>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-sm btn-rounded btn-outline-secondary mb-2 float-end"
                                role="button">
                                <i class="material-icons material-icons-round">print</i>&nbsp;&nbsp;Rekap Laporan
                            </a>
                        </div>
                        {{-- <div class="w-100">
                            <p class="text-sm">
                                Jumlah Total : <b>102 Siswa</b>
                            </p>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card my-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="text-white text-uppercase ps-3 float-start">
                                    Daftar Siswa
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="float-start mb-2 col-12 col-md-12 col-lg-4">
                            <x-btn-search style="display: flex; align-items: center;" placeholder="Cari Siswa..." />
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                            {{-- <a href="#" class="btn btn-rounded btn-outline-secondary mb-2 float-end"
                                role="button">
                                <i class="material-icons material-icons-round">print</i>&nbsp;&nbsp;Rekap Laporan
                            </a> --}}
                            <button class="btn btn-rounded btn-outline-secondary mb-2 float-end"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">
                                <i class="fa-solid fa-filter fa-xl"></i></i>&nbsp;&nbsp;&nbsp;Filter
                            </button>
                            <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" href="#">
                                <i class="fa-solid fa-upload fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Unggah Data
                            </a>
                            <a class="btn btn-rounded bg-gradient-info mb-0 me-2 float-end" data-bs-toggle="modal"
                                data-bs-target="#addSiswa" data-te-ripple-init data-te-ripple-color="light">
                                <i class="fa-solid fa-plus fa-lg"></i>&nbsp;&nbsp;&nbsp;Tambah Siswa
                            </a>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="row mt-2">
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="input-group input-group-outline">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Pilih Tingkat</option>
                                        <option value="10">Kelas X</option>
                                        <option value="11">Kelas XI</option>
                                        <option value="12">Kelas XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="input-group input-group-outline">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Pilih Jurusan</option>
                                        <option value="1">Asisten Keperawatan</option>
                                        <option value="2">Farmasi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 col-lg-4">
                                <div class="input-group input-group-outline">
                                    <select class="form-control" aria-label="Default select example">
                                        <option selected>Pilih Rombel</option>
                                        <option value="1">X KEP</option>
                                        <option value="2">X FAR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        @include('livewire.table-siswa')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
