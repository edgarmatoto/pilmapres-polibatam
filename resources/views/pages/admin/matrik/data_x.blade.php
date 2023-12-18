@forelse ($alternatif as $alt)
    <tr class='center'>
        <th>A<sub>{{ $loop->iteration }}</sub> {{ ucwords($alt->mahasiswa->nama) }}</th>
        @foreach ($kriteria as $kri)
            <td>{{ round($alt->evaluasi()->where('evaluasi.kriteria_id', $kri->id)->first()?->nilai,2) }}</td>
        @endforeach
        <td>
            <a
                href='#'
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
