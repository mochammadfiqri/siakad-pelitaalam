<!-- Create Modal Books -->
<div wire:ignore.self class="modal fade" id="addMapel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addMapelLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="addMapelLabel">Tambah Jurusan</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="createMapel">
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label text-bolder">Kode Mapel</label>
                                <div class="input-group input-group-outline mt-n2">
                                    <input wire:model="kode_mapel" type="text" class="form-control"
                                        value="{{ old('kode_mapel') }}" placeholder="Masukan Kode Mapel...">
                                </div>
                                @error('kode_mapel')
                                    <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label class="form-label text-bolder">KKM</label>
                                <div class="input-group input-group-outline mt-n2">
                                    <input wire:model="kkm" type="text" class="form-control"
                                        value="{{ old('kkm') }}" placeholder="Masukan KKM...">
                                </div>
                                @error('kkm')
                                    <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {{-- selectUser : {{ var_export($categories) }} --}}
                    <div class="mb-3">
                        <label class="form-label text-bolder">Mata Pelajaran</label>
                        <div class="input-group input-group-outline mt-n2">
                            <input wire:model="name" type="text" class="form-control" value="{{ old('name') }}"
                                placeholder="Masukan Mata Pelajaran...">
                        </div>
                        @error('name')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-bolder">Kelompok Pembelajaran</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='kelompok_id' class="form-control" aria-label="Kelompok Pembelajaran">
                                <option selected>Pilih Kelompok Pembelajaran</option>
                                @foreach ($kelompok_pemb as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('kelompok_id')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-bolder">Guru Pengajar</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='user_id' class="form-control" aria-label="Guru Pengajar">
                                <option selected>Pilih Guru Pengajar</option>
                                @foreach ($guru as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>    
                                @endforeach
                            </select>
                        </div>
                        @error('user_id')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    <div style="float: right;" class="border-0 mt-3">
                        <button type="submit" class="btn btn-success btn-rounded shadow-dark float-end">Simpan</button>
                        <button type="button" class="btn btn-danger btn-rounded shadow-dark me-2"
                            wire:click="resetModal" data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>