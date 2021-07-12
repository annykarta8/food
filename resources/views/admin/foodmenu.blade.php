<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    @include('admin.admincss')

</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <div style="position:relative;top:60px;right:-150px">
            <div>
                <button><a href="{{ url('/createview') }}">Create</a></td></button>
                <table style="background-color: #444444;margin-top:30px">
                    <tr>
                        <th class="p-3">Food Name</th>
                        <th class="p-3">Price</th>
                        <th class="p-3">Description</th>
                        <th class="p-3">Image</th>
                        <th class="p-3">Action</th>
                    </tr>


                    @foreach ($data as $data)


                    <tr align="center">
                        <td>{{$data->title }}</td>
                        <td>{{ $data->price }}</td>
                        <td>{{ $data->description }}</td>
                        <td><img height="80" width="80" src="/foodimage/{{ $data->image }}" </td> <td><a
                                href="{{ url('/deletemenu',$data->id) }}">Delete</a>
                            <a href="{{ url('/updateview',$data->id) }}">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div> @include('admin.adminscript')
</body>

</html>
