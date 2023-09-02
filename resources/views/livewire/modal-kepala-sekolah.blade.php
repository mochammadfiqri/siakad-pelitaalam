<!-- Create Modal Kepala Sekolah -->
<div wire:ignore.self class="modal fade" id="addKS" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addKSLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
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
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <div class="input-group input-group-outline mt-n2">
                            <input wire:model="nama" type="text" class="form-control" value="{{ old('nama') }}"
                                placeholder="Masukan Nama...">
                        </div>
                        @error('nama')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- JK : {{ var_export($jenis_kelamin) }} --}}
                    <div class="mb-3">
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
                                {{-- @error('semester')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                            </div>
                            <div class="col-6">
                                <label class="form-label">Tanggal Lahir</label>
                                <div class="input-group input-group-outline mt-n2">
                                    <input wire:model="tgl_lahir" type="date" class="form-control" oninput="checkInput(this)"
                                        onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                                </div>
                                {{-- @error('semester')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <div class="input-group input-group-outline mt-n2">
                            <textarea wire:model="alamat" type="text" cols="5" rows="5" class="form-control" value="{{ old('alamat') }}"
                                placeholder="Masukan Alamat..."></textarea>
                        </div>
                        @error('alamat')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
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
                    <button class="btn btn-danger btn-rounded shadow-dark" wire:click="clearForm" data-bs-dismiss="modal"
                        type="button">Tutup</button>
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
                            <input type="text" class="form-control" placeholder="tes" onfocus="focused(this)"
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
