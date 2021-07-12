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
            <form action="{{ url('/uploadfood') }}" method="post" enctype="multipart/form-data">
                @csrf


                <div>
                    <label>Title:</label>
                    <input class="text-black" type="text" name="title" placeholder="" required>
                </div>
                <div>
                    <label>Price:</label>
                    <input class="text-black" type="num" name="price" placeholder="price" required>
                </div>
                <div>
                    <label>Image</label>
                    <input type="file" name="image" required>
                </div>
                <div>
                    <label>Description:</label>
                    <input class="text-black" type="text" name="description" placeholder="Description" required>
                </div>
                <div>
                    <input style="background-color:#009FCC;border-radius:5px;width:80px;" type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
