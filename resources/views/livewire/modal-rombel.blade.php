<!-- Create Modal Books -->
<div wire:ignore.self class="modal fade" id="addRombel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addRombelLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="addRombelLabel">Tambah Jurusan</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="createRombel">
                <div class="modal-body">
                    {{-- Data : {{ var_export($kelas) }} --}}
                    <div class="mb-3">
                        <label class="form-label text-bolder">Tingkat Kelas</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='kelas' class="form-control" aria-label="Tingkat Kelas">
                                <option selected>Pilih Tingkat Kelas</option>
                                <option value="X">X</option>
                                <option value="XI">XI</option>
                                <option value="XII">XII</option>
                                <option value="XII">XII</option>
                            </select>
                        </div>
                        @error('kelas')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Data : {{ var_export($jurusan_id) }} --}}
                    <div class="mb-3">
                        <label class="form-label text-bolder">Jurusan</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='jurusan_id' class="form-control" aria-label="Jurusan">
                                <option selected>Pilih Jurusan</option>
                                @foreach ($jurusan as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('jurusan_id')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Data : {{ var_export($kode_kelas) }} --}}
                    <div class="mb-3">
                        <label class="form-label text-bolder">Kode Kelas</label>
                        <div class="input-group input-group-outline mt-n2">
                            <input wire:model="kode_kelas" type="text" class="form-control" placeholder="Contoh : Kode 1 untuk X KEP 1">
                        </div>
                        @error('kode_kelas')
                            <span class="text-danger text-xs font-weight-light">{{ $message }}</span>
                        @enderror
                    </div>
                    {{-- Data : {{ var_export($user_id) }} --}}
                    <div class="mb-3">
                        <label class="form-label text-bolder">Wali Kelas</label>
                        <div class="input-group input-group-outline mt-n2">
                            <select wire:model='user_id' class="form-control" aria-label="Wali Kelas">
                                <option selected>Pilih Wali Kelas</option>
                                @foreach ($walas as $data)
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
