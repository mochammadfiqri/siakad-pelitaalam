<div>
    <table class="table align-items-center mb-0">
        <thead>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 5%;">
                No.</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 10%;">
                Kelas</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" >
                Wali Kelas</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                WhatsApp</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 10%;">
                Informasi</th>
            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="width: 10%;">
                Aksi</th>
        </thead>
        <tbody>
            @if ($dataRombel->count() > 0)
                @foreach ($dataRombel as $data)
                    <tr>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $loop->iteration }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->kelas }} {{ $data->jurusan->kode_jurusan }} {{ $data->kode_kelas }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->walas->nama }}</span>
                        </td>
                        <td class="text-center">
                            <span class="text-secondary text-xs font-weight-bold text-center">{{ $data->walas->no_hp }}</span>
                        </td>
                        <td class="text-center">
                            <a href="rombel/{{ $data->id }}" class="btn btn-rounded bg-gradient-info btn-sm mb-0 me-1">Detail</a>
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
        {{ $dataRombel->links() }}
    </div>
</div>