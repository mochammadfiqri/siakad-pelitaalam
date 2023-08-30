<!-- Create Modal Guru -->
<div wire:ignore.self class="modal fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                {{-- <h5 class="modal-title font-weight-normal text-white" id="addUserLabel">Tambah Guru</h5> --}}
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
                {{-- <div class="row my-3">
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('nip')) is-filled is-invalid @elseif ($nip) is-filled @endif">
                                <label class="form-label">NIP</label>
                                <input wire:model="nip" type="number" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('nama')) is-filled is-invalid @elseif ($nama) is-filled @endif">
                                <label class="form-label">Nama Lengkap</label>
                                <input wire:model="nama" type="text" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div wire:ignore class="input-group input-group-outline mt-1">
                                <select wire:model='jenis_kelamin' class="form-control">
                                    <option selected>Jenis Kelamin</option>
                                    <option value="L">Laki - Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('tgl_lahir')) is-filled is-invalid @elseif ($tgl_lahir) is-filled @endif">
                                <input wire:model="tgl_lahir" type="date" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('alamat')) is-filled is-invalid @elseif ($alamat) is-filled @endif">
                                <label class="form-label">Alamat</label>
                                <input wire:model="alamat" type="text" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('email')) is-filled is-invalid @elseif ($email) is-filled @endif">
                                <label class="form-label">Email</label>
                                <input wire:model="email" type="email" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('username')) is-filled is-invalid @elseif ($username) is-filled @endif">
                                <label class="form-label">Username</label>
                                <input wire:model="username" type="text" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('password')) is-filled is-invalid @elseif ($password) is-filled @endif">
                                <label class="form-label">Password</label>
                                <input wire:model="password" type="password" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('no_hp')) is-filled is-invalid @elseif ($no_hp) is-filled @endif">
                                <label class="form-label">No. Handphone</label>
                                <input wire:model="no_hp" type="tel" class="form-control" oninput="checkInput(this)"
                                    onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                        </div>
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('role_id')) is-filled is-invalid @elseif ($role_id) is-filled @endif">
                                <select class="form-control">
                                    <option selected>Pilih Role</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-6">
                            <div
                                class="input-group input-group-outline @if ($errors->has('mapel_id')) is-filled is-invalid @elseif ($mapel_id) is-filled @endif">
                                <select class="form-control">
                                    <option selected>Pilih Mata Pelajaran</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="text-sm mb-0" for="cover">Pilih foto</label>
                            <div class="input-group input-group-outline my-1">
                            <input wire:model="foto" type="file" class="form-control" name="foto">
                        </div>
                        </div>
                    </div> --}}

                {{-- Step 1 --}}
                <div id="step1" class="needs-validation" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('nama')) is-filled is-invalid @elseif ($nama) is-filled @endif">
                            <label class="form-label">Nama Lengkap</label>
                            <input wire:model="nama" type="text" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div wire:ignore class="input-group input-group-outline mt-1">
                            <select wire:model='jenis_kelamin' class="form-control">
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('tgl_lahir')) is-filled is-invalid @elseif ($tgl_lahir) is-filled @endif">
                            <input wire:model="tgl_lahir" type="date" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('alamat')) is-filled is-invalid @elseif ($alamat) is-filled @endif">
                            <label class="form-label">Alamat</label>
                            <textarea wire:model="alamat" type="text" cols="5" rows="5" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3"></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
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
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('nip')) is-filled is-invalid @elseif ($nip) is-filled @endif">
                            <label class="form-label">NIP</label>
                            <input wire:model="nip" type="number" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('email')) is-filled is-invalid @elseif ($email) is-filled @endif">
                            <label class="form-label">Email</label>
                            <input wire:model="email" type="email" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('username')) is-filled is-invalid @elseif ($username) is-filled @endif">
                            <label class="form-label">Username</label>
                            <input wire:model="username" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('password')) is-filled is-invalid @elseif ($password) is-filled @endif">
                            <label class="form-label">Password</label>
                            <input wire:model="password" type="password" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div
                            class="input-group input-group-outline @if ($errors->has('no_hp')) is-filled is-invalid @elseif ($no_hp) is-filled @endif">
                            <label class="form-label">No. Handphone</label>
                            <input wire:model="no_hp" type="number" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                    </div>
                    <div class="mb-3">
                        <div wire:ignore class="input-group input-group-outline mt-1">
                            <select wire:model="mapel_id" class="form-control selectpicker dropdown-toggle" data-live-search="true">
                                @foreach ($mapel as $item)
                                    <option selected>Pilih Mata Pelajaran...</option>
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>                                
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-danger btn-rounded shadow-dark" type="button"
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
                            <input type="text" class="form-control" placeholder="{{ $jenis_kelamin }}"
                                onfocus="focused(this)" onfocusout="defocused(this)" disabled>
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
                            {{-- @if ($foto)
                                    <img src="{{ $foto->temporaryUrl() }}" class="w-50 p-4">
                                @endif --}}
                            <img src="{{ asset('img/user.png') }}" class="w-100 p-4">
                        </div>
                        <div class="col-6">
                            <div class="mb-2">
                                <label>NIP</label>
                                <input type="number" class="form-control" placeholder="{{ $nip }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                            <div class="mb-2">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="{{ $username }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                            <div class="mb-0">
                                <label>Password</label>
                                <input type="text" class="form-control" placeholder="{{ $password }}"
                                    onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-6">
                            <label>No. Handphone</label>
                            <input type="text" class="form-control" placeholder="{{ $no_hp }}"
                                onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                        </div>
                        <div class="col-6">
                            <label>Mata Pelajaran</label>
                            
                            <input type="text" class="form-control" placeholder="tes"
                                onfocus="focused(this)" onfocusout="defocused(this)" disabled>
                            
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

<!-- Update Modal Books -->
{{-- <div wire:ignore.self class="modal fade" id="updateBooks" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="updateBooksLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normzal" id="updateBooksLabel">Edit Buku</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="updateBooks" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div wire:ignore class="input-group input-group-outline mt-3">
                            <select wire:model='ddc_id' class="form-control">
                                <option selected>Pilih Klasifikasi</option>
                                @foreach ($ddcCategory as $item)
                                    <option value="{{ $item->id }}">{{ $item->ddc_number }} - {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('judul')) is-filled is-invalid @elseif ($judul) is-filled is-valid @endif">
                            <label class="form-label">Judul Buku</label>
                            <input wire:model="judul" type="text" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div wire:ignore class="input-group input-group-outline mt-3">
                            <select wire:model='categories' data-placeholder="Pilih Kategori..." class="form-control"
                                multiple>
                                @foreach ($kategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="form-label text-xs mb-1 mb-lg-1 mb-md-1">* Tekan <b>CTRL</b> untuk memilih lebih
                            dari 1 Kategori</label>
                        <div
                            class="input-group input-group-outline mt-2 mb-3 @if ($errors->has('cetakan')) is-filled is-invalid @elseif ($cetakan) is-filled is-valid @endif">
                            <label class="form-label">Cetakan</label>
                            <input wire:model="cetakan" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('edisi')) is-filled is-invalid @elseif ($edisi) is-filled is-valid @endif">
                            <label class="form-label">Edisi</label>
                            <input wire:model="edisi" type="text" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('kata_kunci')) is-filled is-invalid @elseif ($kata_kunci) is-filled is-valid @endif">
                            <label class="form-label">Kata Kunci</label>
                            <input wire:model="kata_kunci" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('bahasa')) is-filled is-invalid @elseif ($bahasa) is-filled is-valid @endif">
                            <label class="form-label">Bahasa</label>
                            <input wire:model="bahasa" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('isbn_issn')) is-filled is-invalid @elseif ($isbn_issn) is-filled is-valid @endif">
                            <label class="form-label">ISBN / ISSN</label>
                            <input wire:model="isbn_issn" type="number" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('halaman')) is-filled is-invalid @elseif ($halaman) is-filled is-valid @endif">
                            <label class="form-label">Halaman</label>
                            <input wire:model="halaman" type="number" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('tahun_terbit')) is-filled is-invalid @elseif ($tahun_terbit) is-filled is-valid @endif">
                            <label class="form-label">Tahun Terbit</label>
                            <input wire:model="tahun_terbit" type="number" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('kota_terbit')) is-filled is-invalid @elseif ($kota_terbit) is-filled is-valid @endif">
                            <label class="form-label">Kota Terbit</label>
                            <input wire:model="kota_terbit" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('penerbit')) is-filled is-invalid @elseif ($penerbit) is-filled is-valid @endif">
                            <label class="form-label">Penerbit</label>
                            <input wire:model="penerbit" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('pengarang')) is-filled is-invalid @elseif ($pengarang) is-filled is-valid @endif">
                            <label class="form-label">Pengarang</label>
                            <input wire:model="pengarang" type="text" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('abstrak')) is-filled is-invalid @elseif ($abstrak) is-filled is-valid @endif">
                            <label class="form-label">Abstrak</label>
                            <textarea wire:model="abstrak" type="text" cols="5" rows="5" class="form-control"
                                oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3"></textarea>
                        </div>
                        <div
                            class="input-group input-group-outline my-3 @if ($errors->has('url')) is-filled is-invalid @elseif ($url) is-filled is-valid @endif">
                            <label class="form-label">Website</label>
                            <input wire:model="url" type="text" class="form-control" oninput="checkInput(this)"
                                onfocus="focused(this)" onfocusout="defocused(this)"
                                data-gtm-form-interact-field-id="3">
                        </div>
                        <label class="text-sm mb-0" for="cover">Pilih File</label>
                        <div class="input-group input-group-outline my-1">
                            <input wire:model="file" type="file" class="form-control" name="file">
                        </div>
                        @error('file')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                        <label class="text-sm mb-0 my-2" for="cover">Pilih Cover Buku</label>
                        <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
                            x-on:livewire-upload-finish="isUploading = false"
                            x-on:livewire-upload-error="isUploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress">
                            <div class="input-group input-group-outline my-1">
                                <input wire:model="cover" type="file" class="form-control" name="cover">
                            </div>
                            <div x-show="isUploading" class="progress rounded">
                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60"
                                    aria-valuemin="0" aria-valuemax="100" x-bind:value="progress"></div>
                            </div>
                        </div>
                        @error('cover')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span><br>
                        @enderror
                        
                        <div style="float: right;" class="border-0 mt-3">
                            <button type="button" class="btn btn-danger" wire:click="closeModal"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}


<!-- Delete Modal Books -->
{{-- <div wire:ignore.self class="modal fade" id="deleteBooks" data-bs-backdrop="static" data-bs-keyboard="false"
        tabindex="-1" aria-labelledby="deleteBooksLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-normal" id="deleteBooksLabel">Hapus Buku</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit.prevent="destroyBooks">
                    <div class="modal-body">
                        <div class="mb-4">
                            Apakah anda yakin akan menghapus Buku ini ?
                        </div>
                        <div style="float: right;" class="border-0">
                            <button type="button" class="btn btn-primary" wire:click="closeModal"
                                data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-success">Ya, Hapus!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
