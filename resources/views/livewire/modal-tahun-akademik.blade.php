<!-- Create Modal Tahun Akademik -->
<div wire:ignore.self class="modal fade" id="addTA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addTALabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="addTALabel">Tambah Tahun Akademik</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="createTA">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Tahun Awal</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tahun_awal" type="number" class="form-control" min="2010"
                                    max="2100" value="{{ old('tahun_awal') }}" placeholder="Contoh: 2022">
                            </div>
                            @error('tahun_awal')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label">Tahun Akhir</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tahun_akhir" type="number" class="form-control" min="2010"
                                    max="2100" step="1" placeholder="Contoh: 2023" value="{{ old('tahun_akhir') }}">
                            </div>
                            @error('tahun_akhir')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <label class="form-label">Semester</label>
                            <div class="input-group input-group-outline">
                                <select wire:model='semester_id' class="form-control" aria-label="Semester">
                                    <option selected>Pilih Semester</option>
                                    @foreach ($semester as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_semester }}</option>    
                                    @endforeach
                                </select>
                            </div>
                            {{-- @error('semester')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                        </div>
                        <div class="col-12 mt-2">
                            <div class="col-12">
                                <label class="form-label">Kepala Sekolah</label>
                                <div class="input-group input-group-outline">
                                    <select wire:model='user_id' class="form-control" aria-label="Kepala Sekolah">
                                        <option selected>Pilih Kepala Sekolah</option>
                                        @foreach ($users as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>    
                                        @endforeach
                                    </select>
                                </div>
                                {{-- @error('kepsek')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mt-3">Tanggal Awal</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tgl_awal" type="date" class="form-control"
                                    oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                    data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tgl_awal')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-3">Tanggal Akhir</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tgl_akhir" type="date" class="form-control"
                                    oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                    data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tgl_akhir')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div style="float: right;" class="border-0 mt-3">
                        <button type="submit"
                            class="btn btn-success btn-rounded shadow-dark float-end">Simpan</button>
                        <button type="button" class="btn btn-danger btn-rounded shadow-dark me-2"
                            wire:click="closeModal" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal Tahun Akademik -->
<div wire:ignore.self class="modal fade" id="updateTA" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="updateTALabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="updateTALabel">Tambah Tahun Akademik</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="editTA">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio1">
                                <label class="custom-control-label" for="customRadio1">Aktif</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-check ">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="customRadio2">
                                <label class="custom-control-label" for="customRadio2">Non-Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label">Tahun Awal</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tahun_awal" type="number" class="form-control" min="2010"
                                    max="2100" step="1" oninput="checkInput(this)" onfocus="focused(this)"
                                    onfocusout="defocused(this)" value="{{ old('tahun_awal') }}"
                                    data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tahun_awal')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label">Tahun Akhir</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tahun_akhir" type="number" class="form-control" min="2010"
                                    max="2100" step="1" oninput="checkInput(this)" onfocus="focused(this)"
                                    onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tahun_akhir')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mt-2">
                            <label class="form-label">Semester</label>
                            <div class="input-group input-group-outline">
                                <select wire:model='' class="form-control" aria-label="Semester">
                                    <option selected>Pilih Semester</option>
                                    <option value="10">Kelas X</option>
                                </select>
                            </div>
                            {{-- @error('semester')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                        </div>
                        <div class="col-12 mt-2">
                            <div class="col-12">
                                <label class="form-label">Kepala Sekolah</label>
                                <div class="input-group input-group-outline">
                                    <select wire:model='' class="form-control" aria-label="Kepala Sekolah">
                                        <option selected>Pilih Kepala Sekolah</option>
                                        <option value="10">Kelas X</option>
                                    </select>
                                </div>
                                {{-- @error('kepsek')<span class="text-danger text-xs font-weight-light">{{ $message }}</span>@enderror --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mt-3">Tanggal Awal</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tgl_awal" type="date" class="form-control"
                                    oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                    data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tgl_awal')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label mt-3">Tanggal Akhir</label>
                            <div class="input-group input-group-outline mt-n2">
                                <input wire:model="tgl_akhir" type="date" class="form-control"
                                    oninput="checkInput(this)" onfocus="focused(this)" onfocusout="defocused(this)"
                                    data-gtm-form-interact-field-id="3">
                            </div>
                            @error('tgl_akhir')
                                <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div style="float: right;" class="border-0 mt-3">
                        <button type="submit"
                            class="btn btn-success btn-rounded shadow-dark float-end">Simpan</button>
                        <button type="button" class="btn btn-danger btn-rounded shadow-dark me-2"
                            wire:click="closeModal" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>