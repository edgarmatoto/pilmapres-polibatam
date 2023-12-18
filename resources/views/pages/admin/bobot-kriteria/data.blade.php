@forelse ($kriteria as $item)
    <tr>
        <td class='right'>{{ $loop->iteration }}</td>
        <td class='center'>{{ $item->simbol }}</td>
        <td class='center'>{{ $item->nama }}</td>
        <td class='center'>{{ $item->bobot }}</td>
        <td class='center'>{{ $item->atribut }}</td>
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
                            href='{{ route('admin.bobot-kriteria.edit', ['kriteria' => $item]) }}'
                        >Edit</a>
                        <button
                            class='dropdown-item'
                            type="button"
                            onclick="hapusData('{{ route('admin.bobot-kriteria.destroy', ['kriteria' => $item]) }}')"
                        >Hapus</button>
                    </div>
                </div>
            </div>
        </td>
    </tr>
@empty
    <tr>
        <td
            colspan="6"
            class='text-center'
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
