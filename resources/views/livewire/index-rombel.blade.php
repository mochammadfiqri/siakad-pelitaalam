<div>
    @include('livewire.modal-rombel')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card my-2">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-faded-light shadow-dark border-radius-lg ">
                        <div class="row">
                            <div class="nav-wrapper position-relative end-0">
                                <ul class="nav nav-pills nav-fill navbar-light pt-3 pb-3">
                                    <li class="nav-item">
                                        <a class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('mapel') ? 'active' : '' }}"
                                            href="{{ route('mapel') }}">
                                            <span class="material-icons align-middle mb-1">badge</span>
                                            Mapel
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a
                                            class="nav-link mb-0 px-0 py-1 {{ request()->routeIs('rombel') ? 'active' : '' }}">
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
                            <ul class="nav nav-pills navbar-light pt-3 pb-3" id="rombel-tab">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1 active" data-bs-toggle="tab" href="#reguler"
                                        role="tab" aria-controls="reguler" aria-selected="true">
                                        <span class="material-icons align-middle mb-1">badge</span>
                                        Reguler
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#ekstra"
                                        role="tab" aria-controls="ekstra" aria-selected="false">
                                        <span class="material-icons align-middle mb-1">laptop</span>
                                        Ekstrakurikuler
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#teori"
                                        role="tab" aria-controls="teori" aria-selected="false">
                                        <span class="material-icons align-middle mb-1">badge</span>
                                        Teori Peminatan
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-5 py-1" data-bs-toggle="tab" href="#praktik"
                                        role="tab" aria-controls="praktik" aria-selected="false">
                                        <span class="material-icons align-middle mb-1">badge</span>
                                        Praktik
                                    </a>
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
                <div class="tab-content" id="rombel-tabContent">
                    <div class="row mt-3 mb-3">
                        <div class="col-12">
                            <div class="float-end">
                                <x-btn-tambah-data toggle="modal" target="#addMapel" href="#" />
                                <x-btn-search style="display: flex; align-items: center; width: 55%" placeholder="Cari Rombel..."/>
                            </div>
                        </div>
                    </div>
                    <hr class="dark horizontal my-0">
                    <div class="tab-pane fade active show" id="reguler" role="tabpanel" aria-labelledby="reguler-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                                <x-tbl-rombel :dataRombel="$reguler" />
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="ekstra" role="tabpanel" aria-labelledby="ekstra-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="teori" role="tabpanel" aria-labelledby="teori-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="praktik" role="tabpanel" aria-labelledby="praktik-tab">
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                {{-- @include('livewire.table-mapel') --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
