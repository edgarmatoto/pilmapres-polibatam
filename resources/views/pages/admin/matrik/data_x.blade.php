@forelse ($alternatif as $item)
    <tr class='center'>
        <th>A<sub>{{ $loop->iteration }}</sub> {{ ucwords($item->mahasiswa->nama) }}</th>
        <td>C1</td>
        <td>C2</td>
        <td>C3</td>
        <td>C4</td>
        <td>C5</td>
        <td>
            <a
                href='keputusan-hapus.php?id={$row->id_alternative}'
                class='btn btn-danger btn-sm'
            >Hapus</a>
        </td>
    </tr>
@empty
    <tr class='center'>
        <td
            class="text-center"
            colspan="{{ $alternatif->count() + 2 }}"
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
