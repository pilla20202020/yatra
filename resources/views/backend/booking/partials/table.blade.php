<tr>
    <td>{{++$key}}</td>
    <td>{{ Str::limit($booking->fullname, 47) }}</td>
    <td>{{ Str::limit($booking->email, 47) }}</td>
    <td>{{$booking->phone}}</td>
    <td>{{$booking->date}}</td>
    <td>{{$booking->group_size}}</td>
    <td>{{$booking->message}}</td>
    <td class="text-right">
        <a href="{{ route('booking.destroy', $booking->id) }}">
            <button type="button"
                class="btn btn-flat btn-danger btn-xs item-delename="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
        </a>
    </td>
</tr>

