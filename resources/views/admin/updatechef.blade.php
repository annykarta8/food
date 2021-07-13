<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.admincss')
</head>

<body>
    <div class="container-scroller">
        @include('admin.navbar')
        <form action="{{ url('/updatefoodchef',$data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Chef Name:</label>
                <input class="text-black" type="text" name="name" value="{{ $data->name }}">
            </div>
            <div>
                <label>Speciality:</label>
                <input class="text-black" type="text" name="speciality" value="{{ $data->speciality }}">
            </div>
            <div>
                <label>Image:</label>
                <img height="200" width="200" src="/chefimage/{{ $data->image }}" alt="">
                <input type="file" name="image">
            </div>
            <div>
                <input style="background-color:#009FCC;border-radius:5px;width:80px;" type="submit" value="Update"
                    required="">
            </div>
        </form>
    </div>
    @include('admin.adminscript')
</body>

</html>
