<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Grup</h1>
    <div>
        <div>
            @if(session()->has('sucess'))
                <div>
                    {{ session('sucess') }}
                </div>
            @endif
        </div>

        <div>
            <a href="{{ route('grup.create') }}">Add a new Grup</a>
        </div>

        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama Grup</th>
                <th>Password Grup</th>
                <th>Confirm Password</th>
                <th>Binusian</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($grup as $grup)
                <tr>
                    <td>{{ $grup->id }}</td>
                    <td>{{ $grup->nama}}</td>
                    <td>{{ $grup->password }}</td>
                    <td>{{ $grup->confirm_password }}</td>
                    <td>{{ $grup->binusian }}</td>
                    <td>
                        <a href="{{ route('grup.edit', ['grup' => $grup])}}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{ route('grup.destroy', ['grup' => $grup]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete"/>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
    <h1> Form</h1>
</body>
</html>