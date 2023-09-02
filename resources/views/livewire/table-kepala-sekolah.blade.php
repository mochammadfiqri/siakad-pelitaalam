<div>
    <table class="table align-items-center mb-0">
        <thead>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                No.</th>
            <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                NIP</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Nama</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                No. Telepon</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Status</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                Foto</th>
            <th class="text-end text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-3">
                Informasi</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataKS->count() > 0)
                @foreach ($dataKS as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-left">
                            <span class="text-secondary text-xs font-weight-bold text-left me-3">{{ $data->nip }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center me-3">{{ $data->nama }}</span>
                        </td>
                        <td class="text-end">
                            <span class="text-secondary text-xs font-weight-bold text-end me-3">{{ $data->no_hp }}</span>
                        </td>
                        <td class="text-end">
                            <span class="text-secondary text-xs font-weight-bold text-end me-3">{{ $data->status }}</span>
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
        {{ $dataKS->links() }}
    </div>
</div>