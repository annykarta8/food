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
        <form action="{{ url('uploadchef') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Name:</label>
                <input class="text-black" type="text" name="name" required="" placeholder="Entet Name">
            </div>
            <div>
                <label>Speciality:</label>
                <input class="text-black" type="text" name="speciality" required="" placeholder="Entet the speciality">
            </div>
            <div>
                <label>Image:</label>
                <input type="file" name="image" required="">
            </div>
            <div>
                <input style="background-color:#009FCC;border-radius:5px;width:80px;" type="submit" value="Save">
            </div>
        </form>
    </div>
    @include('admin.adminscript')
</body>

</html>
