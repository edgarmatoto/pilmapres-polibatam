@forelse ($alternatif as $alt)
    <tr class='center'>
        <th>{{ 'A' . $loop->iteration }}</th>
        @foreach ($kriteria as $kri)
            <td>
                {{ round($alt->evaluasi()->where('evaluasi.kriteria_id', $kri->id)->first()?->nilai,2) }}
            </td>
        @endforeach
    </tr>
@empty
    <tr class='center'>
        <td
            class="text-center"
            colspan="{{ $alternatif->count() + 2 }}"
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
