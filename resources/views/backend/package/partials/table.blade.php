<tr>
    <td>{{++$key}}</td>
    <td><img src="{{asset($package->image_path)}}" class="img-circle width-1" alt="{{$package->title}}" width="50" height="50"></td>
    <td>{{ Str::limit($package->title, 47) }}</td>
    <td>{{ Str::limit($package->category->title, 47) }}</td>
    <td>Rs. {{ Str::limit($package->price, 47) }}</td>
    <td>{{ Str::limit($package->departure, 47) }}</td>


    <td class="text-center">
        @if($package->is_featured =='1')
            <span class="badge" style="background-color: #419645">{{$package->is_featured ? 'Yes' : 'No'}}</span>
        @elseif($package->is_featured =='0')
            <span class="badge" style="background-color: #f44336">{{$package->is_featured ? 'Yes' : 'No'}}</span>
        @endif
    </td>
    <td class="text-right">
        <a href="{{ route('package.edit', $package->slug)}}" class="btn btn-flat btn-primary btn-xs" title="edit">
            <i class="glyphicon glyphicon-edit"></i>
        </a>
        <a href="{{ route('package.destroy', $package->id) }}">
            <button type="button"
                class="btn btn-flat btn-danger btn-xs item-delete" title="delete">
                <i class="glyphicon glyphicon-trash"></i>
            </button>
    </td>
</tr>

