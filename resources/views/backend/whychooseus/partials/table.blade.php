<tr>
    <td>{{++$key}}</td>
    <td><img src="{{asset($whychooseus->thumbnail_path)}}" class="img-circle width-1" alt="{{$whychooseus->title}}" width="50" height="50"></td>
    <td>{{ Str::limit($whychooseus->title, 47) }}</td>
    <td>{{ Str::limit($whychooseus->content, 47) }}</td>
    <td class="text-center">
        @if($whychooseus->is_featured =='1')
            <span class="badge" style="background-color: #419645">{{$whychooseus->is_featured ? 'Yes' : 'No'}}</span>
        @elseif($whychooseus->is_featured =='0')
            <span class="badge" style="background-color: #f44336">{{$whychooseus->is_featured ? 'Yes' : 'No'}}</span>
        @endif
    </td>

    <td class="text-right">
        <a href="{{route('whychooseus.edit', $whychooseus->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('whychooseus.destroy', $whychooseus->id) }}">
        <button type="button"
            class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
            <i class="glyphicon glyphicon-trash"></i>
        </button>
    </td>
</tr>
