<div>
    <table class="table align-items-center mb-0">
        <thead>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                NIS</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                NISN</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 40%;">
                Nama</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Rombel</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Foto</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Informasi</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataSiswa->count() > 0)
                @foreach ($dataSiswa as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->nis }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->nisn }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->nama }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center me-1">
                                {{ optional($data->rombel)->kelas }} {{ optional(optional($data->rombel)->jurusan)->nama }}
                            </span>
                        </td>
                        <td class="text-center">
                            @if ($data->foto !== null)
                                <img src="{{ asset('storage/'.$data->foto) }}" class="avatar avatar-sm">
                            @else
                                <img src="{{ asset('img/user.png') }}" class="avatar avatar-sm">
                            @endif
                        </td>
                        <td class="text-center">
                            <a class="btn btn-rounded bg-gradient-info btn-sm mb-0 " href="#">Detail</a>
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
                                    <li><a class="dropdown-item border-radius-md" >
                                        Edit
                                    </a></li>
                                    <li><a class="dropdown-item border-radius-md" data-bs-toggle="modal" data-bs-target="#deleteSiswa"
                                        wire:click='deleteSiswa({{ $data->id }})'>
                                        Hapus
                                    </a></li>
                                </ul>
                            </div>
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
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold"> </span>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="float-end me-3">
        {{ $dataSiswa->links() }}
    </div>
</div>