<!-- Create Modal Siswa -->
<div wire:ignore.self class="modal fade" id="addSiswa" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addSiswaLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                {{-- <h5 class="modal-title font-weight-normal text-white" id="addSiswaLabel">Tambah Guru</h5> --}}
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link disabled {{ $currentStep != 1 ? '' : 'active' }}" href="#step1">Data
                            Pribadi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled {{ $currentStep != 2 ? '' : 'active' }}" href="#step2">Data
                            Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled {{ $currentStep != 3 ? '' : 'active' }}"
                            href="#step3">Konfirmasi</a>
                    </li>
                </ul>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                {{-- Step 1 --}}
                <div id="step1" class="needs-validation" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
                    <div class="mb-2">
                        <x-form-input label="Nama Lengkap" model="nama" type="text"
                            placeholder="Masukan Nama..." />
                    </div>
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="input-group input-group-outline mt-n2">
                                    <select wire:model='jenis_kelamin' class="form-control" aria-label="Jenis Kelamin">
                                        <option selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki - Laki">Laki - Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <x-form-input label="Tanggal Lahir" model="tgl_lahir" type="date"
                                    placeholder="Masukan Tanggal..." />
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Alamat</label>
                        <div
                            class="input-group input-group-outline @if ($errors->has('alamat')) is-filled is-invalid @elseif ($alamat) is-filled @endif">
                            <textarea wire:model="alamat" type="text" cols="5" rows="5" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-2">
                        <label class="text-sm mb-0" for="foto">Pilih Foto</label>
                        <div class="input-group input-group-outline my-1">
                            <input wire:model="foto" type="file" class="form-control" name="foto">
                        </div>
                        @error('foto')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-success btn-rounded shadow-dark float-end" wire:click="firstStepSubmit"
                        type="button">Next</button>
                </div>

                {{-- Step 2 --}}
                <div id="step2" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
                    <div class="mb-2">
                        <div class="row">
                            <div class="col-6">
                                <x-form-input label="NIS" model="nis" type="number"
                                    placeholder="Masukan NIS..." />
                            </div>
                            <div class="col-6">
                                <x-form-input label="NISN" model="nisn" type="number"
                                    placeholder="Masukan NISN..." />
                            </div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <x-form-input label="Email" model="email" type="text" placeholder="Masukan Email..." />
                    </div>
                    <div class="mb-2">
                        <x-form-input label="Username" model="username" type="text"
                            placeholder="Masukan Username..." />
                    </div>
                    <div class="mb-2">
                        <x-form-input label="Password" model="password" type="password"
                            placeholder="Masukan Password..." />
                    </div>
                    <div class="mb-2">
                        <x-form-input label="No. Handphone" model="no_hp" type="number"
                            placeholder="Masukan No. Handphone..." />
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Rombel</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='rombel_id' class="form-control" aria-label="Rombel">
                                <option selected>Pilih Rombel</option>
                                @foreach ($dataRombel as $data)
                                    <option value="{{ $data->id }}">{{ $data->kelas }} {{ $data->jurusan->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-rounded shadow-dark mt-1" type="button"
                        wire:click="back(1)">Back</button>
                    <button class="btn btn-success btn-rounded shadow-dark float-end" wire:click="secondStepSubmit"
                        type="button">Next</button>
                </div>

                {{-- Step 3 --}}
                <div id="step3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
                    <div class="row mb-2">
                        <div class="col-6">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="{{ $nama }}"
                                onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                        </div>
                        <div class="col-6">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" placeholder="{{ $jenis_kelamin }}" onfocus="focused(this)"
                                onfocusout="defocused(this)" disabled>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="{{ $tgl_lahir }}"
                                onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                        </div>
                        <div class="col-6">
                            <label>Alamat</label>
                            <textarea class="form-control text-body text-justify" style="overflow: auto;" disabled>{{ $alamat }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            @if ($foto)
                                <img src="{{ $foto->temporaryUrl() }}" class="w-100 h-100 p-2">
                            @else
                                <img src="{{ asset('img/user.png') }}" class="w-100 h-100 p-2">
                            @endif
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="{{ $username }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                            <div class="mb-2">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="{{ $password }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                            <div class="mb-0">
                                <label>No. Handphone</label>
                                <input type="text" class="form-control" placeholder="{{ $no_hp }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-rounded shadow-dark" type="button"
                        wire:click="back(2)">Back</button>
                    <button class="btn btn-success btn-rounded shadow-dark float-end" wire:click="submitForm"
                        type="button">Finish</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal Siswa -->
<div wire:ignore.self class="modal fade" id="deleteSiswa" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="deleteSiswaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="deleteSiswaLabel">Hapus Siswa</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form wire:submit.prevent="destroySiswa">
                <div class="modal-body">
                    <div class="mb-4">
                        Apakah anda yakin akan menghapus {{ $siswaName }} ?    
                        {{-- @foreach ($dataSiswa as $data)
                            Apakah anda yakin akan menghapus {{ $data->nama }} ini ?
                        @endforeach --}}
                    </div>
                    <div style="float: right;" class="border-0">
                        <button type="button" class="btn btn-primary btn-rounded shadow-dark" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success btn-rounded shadow-dark">Ya, Hapus!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>