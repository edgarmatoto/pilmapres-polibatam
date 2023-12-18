@forelse ($alternatif as $alt)
    <tr class='center'>
        <th>{{ 'A' . $loop->iteration }}</th>
        @foreach ($kriteria as $kri)
            <td>
                @php
                    $bobot = $kri
                        ->evaluasi()
                        ->orderByRaw('CAST(evaluasi.nilai AS INT) ' . ($kri->atribut == 'benefit' ? 'DESC' : 'ASC'))
                        ->value('evaluasi.nilai');

                    $matrikX = $alt
                        ->evaluasi()
                        ->where('evaluasi.kriteria_id', $kri->id)
                        ->first()?->nilai;
                @endphp
                {{ round($bobot && $matrikX ? ($kri->atribut == 'benefit' ? $matrikX / $bobot : $bobot / $matrikX) : 0, 2) }}
            </td>
        @endforeach
    </tr>
@empty
    <tr class='center'>
        <td
            class="text-center"
            colspan="{{ $alternatif->count() + 3 }}"
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
