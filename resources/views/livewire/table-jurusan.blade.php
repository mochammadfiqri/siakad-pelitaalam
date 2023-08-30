<div>
    <table class="table align-items-center mb-0">
        <thead>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Kode Jurusan</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Nama</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataJurusan->count() > 0)
                @foreach ($dataJurusan as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center me-3">{{ $data->kode_jurusan }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center me-3">{{ $data->nama }}</span>
                        </td>
                        <td class="text-center">
                            <a class="border-radius-md me-2" data-bs-toggle="modal" wire:click='editJurusan({{ $data->id }})'
                                data-bs-target="#updateJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-sharp fa-solid fa-pen-to-square fa-lg"></i>
                            </a>
                            <a class="border-radius-md" data-bs-toggle="modal" wire:click='destroyJurusan({{ $data->id }})'
                                data-bs-target="#hapusJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-sharp fa-solid fa-trash fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Tidak ada data yang ditemukan</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
    <div class="float-end me-3">
        {{ $dataJurusan->links() }}
    </div>
</div>