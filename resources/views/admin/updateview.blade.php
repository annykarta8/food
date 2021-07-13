<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')

        <div style="position:relative;top:60px;right:-150px">
            <div>
                <form action="{{ url('/update',$data->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label>Title:</label>
                        <input class="text-black " type="text" name="title" value="{{$data->title }}" required>
                    </div>
                    <div>
                        <label>Price:</label>
                        <input class="text-black my-4" type="num" name="price" value="{{$data->price}}" required>
                    </div>
                    <div>
                        <label>Description:</label>
                        <input class="text-black my-4 " type="text" name="description" value="{{$data->description}}"
                            required>
                    </div>
                    <div>
                        <label>Image:</label>
                        <img height="90" width="90" src="/foodimage/{{$data->image }}" alt="" class="mb-3">
                        <input class="mb-3" type="file" name="image" required>
                    </div>

                    <div>
                        <input style="background-color:#009FCC;border-radius:5px;width:80px;" type="submit"
                            value="Save">
                    </div>

                </form>

            </div>
        </div>

    </div>
    @include('admin.adminscript')
</body>

</html>
