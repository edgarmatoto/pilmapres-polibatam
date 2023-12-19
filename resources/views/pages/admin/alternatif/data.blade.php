@forelse ($alternatif as $item)
    <tr>
        <td class='right'>{{ $loop->iteration }}</td>
        <td class='center'>{{ $item->mahasiswa->nim }}</td>
        <td class='center'>{{ ucwords($item->mahasiswa->nama) }}</td>
        <td class='center'>{{ $item->jenis_perlombaan }}</td>
        <td class='center'>{{ $item->tingkat_perlombaan }}</td>
        <td class='center'>{{ $item->capaian_prestasi }}</td>
        <td class='center'>{{ $item->ipk }}</td>
        <td class='center'>{{ $item->tmpt_perlombaan }}</td>
        <td class='center'>{{ date('d/m/Y', strtotime($item->tgl_perlombaan)) }}</td>
        <td class='center'>
            <a href="{{ route('admin.alternatif.unduh-berkas', ['alternatif' => $item]) }}">
                {{ $item->nama_berkas }}
            </a>
        </td>
        <td>
            <div class='btn-group mb-1'>
                <div class='dropdown'>
                    <button
                        class='btn btn-primary dropdown-toggle me-1 btn-sm'
                        type='button'
                        id='dropdownMenuButton'
                        data-bs-toggle='dropdown'
                        aria-haspopup='true'
                        aria-expanded='false'
                    >
                        Aksi
                    </button>
                    <div
                        class='dropdown-menu dropdown-menu-end'
                        aria-labelledby='dropdownMenuButton'
                    >
                        <a
                            class='dropdown-item'
                            href='{{ route('admin.alternatif.edit', ['alternatif' => $item]) }}'
                        >Edit</a>
                        <button
                            class='dropdown-item'
                            type="button"
                            onclick="hapusData('{{ route('admin.alternatif.destroy', ['alternatif' => $item]) }}')"
                        >Hapus</button>
                    </div>
                </div>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td
            colspan="10"
            class="text-center"
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
