<div>
    <table class="table align-items-center mb-0">
        <thead>
            {{-- SISWA --}}
            {{-- <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    No.</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    NISN</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    NIS</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Nama</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Mata Pelajaran</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Foto</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    Informasi</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    AKsi</th>
            </tr> --}}
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.</th>
            <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                NIP</th>
            <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Nama</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Mata Pelajaran</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Foto</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                Informasi</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataGuru->count() > 0)
                @foreach ($dataGuru as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-left">
                            <span class="text-secondary text-xs font-weight-bold text-left me-3">{{ $data->nip }}</span>
                        </td>
                        <td class="text-left">
                            <span class="text-secondary text-xs font-weight-bold text-left me-3">{{ $data->nama }}</span>
                        </td>
                        <td class="text-center">
                            @if ($data->mapel) <!-- Check if the mapel relationship exists -->
                                <span class="text-secondary text-xs font-weight-bold text-center me-3">{{ $data->mapel->name }}</span>
                            @else
                                <span class="text-secondary text-xs font-weight-bold text-center me-3">No Mapel</span>
                            @endif
                        </td>
                        <td class="text-end">
                            @if ($data->foto !== null)
                                <img src="{{ asset('storage/'.$data->foto) }}" class="avatar avatar-sm me-3">
                            @else
                                <img src="{{ asset('img/user.png') }}" class="avatar avatar-sm me-3">
                            @endif
                        </td>
                        <td class="text-end">
                            <a class="btn btn-rounded bg-gradient-info btn-sm mb-0 me-1" href="#">Detail</a>
                            {{-- <span class="text-secondary text-xs font-weight-bold text-center me-3">Informasi</span> --}}
                        </td>
                        <td class="text-center">
                            <style>
                                /* Menyembunyikan tanda dropdown */
                                .dropdown-toggle::after {
                                content: none !important;
                                }

                                /* Penanganan Z-Index */
                                .dropdown {
                                position: relative;
                                z-index: 1000;
                                }

                                /* Hindari elemen anak dropdown tertutup oleh overflow tabel */
                                /* .table-responsive {
                                overflow: visible;
                                } */
                            </style>
                            <div class="btn-group dropstart">
                                <button type="button" class="btn btn-link text-secondary mb-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="material-icons">more_vert</span>
                                </button>
                                <ul class="dropdown-menu px-2 py-3" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Edit</a></li>
                                    <li><a class="dropdown-item border-radius-md" href="javascript:;">Hapus</a></li>
                                </ul>
                            </div>

                            {{-- <button type="button" data-bs-toggle="modal" data-bs-target="#updateBooks"
                                wire:click='editBooks({{ $data->id }})'
                                class="btn btn-info btn-sm mt-3 ms-4">Edit</button>
                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteBooks"
                                wire:click='deleteBooks({{ $data->id }})'
                                class="btn btn-danger btn-sm mt-3">Hapus</button>
                            <a href="e-catalog/detail/{{ $data->id }}" type="button"
                                class="btn btn-primary btn-sm mt-3">Detail</a> --}}
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
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                </tr>
            @endif

        </tbody>
    </table>
    <div class="float-end me-3">
        {{ $dataGuru->links() }}
    </div>
</div>