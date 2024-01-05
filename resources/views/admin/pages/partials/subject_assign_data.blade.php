@foreach ($data as $row)
    <tr>
        <td>{{ $row['teacher'] }}</td>
        <td>{{ $row['subject'] }}</td>
    </tr>
@endforeach