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
        <div class="relative mt-5 -right-16">
            <table class="bg-gray-800">
                <tr align="justify">
                    <th class="p-4 ">Name</th>
                    <th class="p-4 ">Email</th>
                    <th class="p-4 ">Phone</th>
                    <th class="p-4 ">Date</th>
                    <th class="p-4 ">Time</th>
                    <th class="p-4 ">Message</th>
                </tr>
                @foreach ($data as $data )


                <tr align="justify">
                    <td class="p-6">{{ $data->name }}</td>
                    <td class="p-6">{{ $data->email }}</td>
                    <td class="p-6">{{ $data->phone }}</td>
                    <td class="p-6">{{ $data->date }}</td>
                    <td class="p-6">{{ $data->time }}</td>
                    <td class="p-6">{{ $data->message }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
    @include('admin.adminscript')
</body>

</html>
