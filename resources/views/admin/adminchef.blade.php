<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">

        @include('admin.navbar')
        <button><a href="{{ url('/createchef') }}">Create</a></td></button>
        <table style="background-color:black">
            <tr>
                <th class="p-3">Chef Name</th>
                <th class="p-3">Speciality</th>
                <th class="p-3">Image</th>
                <th class="p-3">Action</th>
            </tr>
            @foreach($data as $data)
            <tr align="center">
                <td>{{ $data->name }}</td>
                <td>{{ $data->speciality }}</td>
                <td><img height="100" width="100" src="/chefimage/{{ $data->image }}"></td>
                <td><a href="{{ url('/updatechef',$data->id) }}">Update</a></td>
                <td><a href="{{ url('/deletechef',$data->id) }}">Delete</a></td>
            </tr>
            @endforeach
        </table>
    </div>
    @include('admin.adminscript')
</body>

</html>
