@forelse ($alternatif as $item)
    <tr class='center'>
        <th>A</th>
        <td>C1</td>
        <td>C2</td>
        <td>C3</td>
        <td>C4</td>
        <td>C5</td>
    </tr>
@empty
    <tr class='center'>
        <td
            class="text-center"
            colspan="{{ $alternatif->count() + 2 }}"
        >Tidak ada data ditemukan</td>
    </tr>
@endforelse
