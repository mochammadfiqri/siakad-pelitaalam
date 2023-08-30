<!-- Create Modal Books -->
<div wire:ignore.self class="modal fade" id="addJurusan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="addJurusanLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="addJurusanLabel">Tambah Jurusan</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="createJurusan">
                <div class="modal-body">
                    <div class="input-group input-group-outline mt-2 @if ($errors->has('kode_jurusan')) is-filled @elseif ($kode_jurusan) is-filled @endif">
                        <label class="form-label">Kode Jurusan</label>
                        <input wire:model="kode_jurusan" type="text" class="form-control" oninput="checkInput(this)"
                            onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                    </div>
                    {{-- selectUser : {{ var_export($categories) }} --}}
                    <div class="input-group input-group-outline mt-3 @if ($errors->has('nama')) is-filled @elseif ($nama) is-filled @endif">
                        <label class="form-label">Nama Jurusan</label>
                        <input wire:model="nama" type="text" class="form-control" oninput="checkInput(this)"
                            onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                    </div>
                    <div style="float: right;" class="border-0 mt-3">
                        <button type="submit" class="btn btn-success btn-rounded shadow-dark float-end">Simpan</button>
                        <button type="button" class="btn btn-danger btn-rounded shadow-dark me-2" wire:click="closeModal"
                            data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal Books -->
<div wire:ignore.self class="modal fade" id="updateJurusan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="updateJurusanLabel" aria-hidden="true">
    <div class="modal-dialog overflow-auto overflow-x-hidden" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-primary">
                <h5 class="modal-title font-weight-normal text-white" id="updateJurusanLabel">Tambah Jurusan</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form wire:submit.prevent="updateJurusan">
                <div class="modal-body">
                    <div class="input-group input-group-outline mt-2 @if ($errors->has('kode_jurusan')) is-filled @elseif ($kode_jurusan) is-filled @endif">
                        <label class="form-label">Kode Jurusan</label>
                        <input wire:model="kode_jurusan" type="text" class="form-control" oninput="checkInput(this)"
                            onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                    </div>
                    {{-- selectUser : {{ var_export($categories) }} --}}
                    <div class="input-group input-group-outline mt-3 @if ($errors->has('nama')) is-filled @elseif ($nama) is-filled @endif">
                        <label class="form-label">Nama Jurusan</label>
                        <input wire:model="nama" type="text" class="form-control" oninput="checkInput(this)"
                            onfocus="focused(this)" onfocusout="defocused(this)" data-gtm-form-interact-field-id="3">
                    </div>
                    <div style="float: right;" class="border-0 mt-3">
                        <button type="submit" class="btn btn-success btn-rounded shadow-dark float-end">Simpan</button>
                        <button type="button" class="btn btn-danger btn-rounded shadow-dark me-2" wire:click="closeModal"
                            data-bs-dismiss="modal">Batal</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>