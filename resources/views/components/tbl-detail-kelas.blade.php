<div>
    <table class="table align-items-center mb-0">
        <thead>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 5%;">
                No.</th>
            <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 5%;">
                Foto</th>
            <th class="text-start text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >
                Nama</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataKelas->count() > 0)
                @foreach ($dataKelas as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-start">
                            @if ($data->foto !== null)
                                <img src="{{ asset('storage/'.$data->foto) }}" class="avatar avatar-sm ms-2 me-3">
                            @else
                                <img src="{{ asset('img/user.png') }}" class="avatar avatar-sm ms-2 me-3">
                            @endif
                        </td>
                        <td class="text-start">
                            
                            <span class="text-secondary text-xs font-weight-bold text-center ms-3">{{ $data->nama }}</span>
                        </td>
                        <td class="text-center">
                            <a class="border-radius-md me-3" data-bs-toggle="modal" wire:click='editJurusan({{ $data->id }})'
                                data-bs-target="#updateJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-brands fa-whatsapp fa-xl" style="color: #48e91c;"></i>
                            </a>
                            <a class="border-radius-md me-3" data-bs-toggle="modal" wire:click='editJurusan({{ $data->id }})'
                                data-bs-target="#updateJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-solid fa-circle-info fa-xl"></i>
                            </a>
                            <a class="border-radius-md me-3" data-bs-toggle="modal" wire:click='editJurusan({{ $data->id }})'
                                data-bs-target="#updateJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-sharp fa-solid fa-pen-to-square fa-xl"></i>
                            </a>
                            <a class="border-radius-md" data-bs-toggle="modal" wire:click='destroyJurusan({{ $data->id }})'
                                data-bs-target="#hapusJurusan" data-te-ripple-init data-te-ripple-color="light"><i class="fa-sharp fa-solid fa-trash fa-xl"></i>
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
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Tidak ada data yang ditemukan</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    {{-- <div class="float-end me-3">
        {{ $dataKelas->links() }}
    </div> --}}
</div>