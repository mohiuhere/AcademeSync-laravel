@foreach ($data as $row)
    <tr>
        <td>{{ $row['description'] }}</td>
        <td>{{ $row['allot_mark'] }}</td>
    </tr>
@endforeach