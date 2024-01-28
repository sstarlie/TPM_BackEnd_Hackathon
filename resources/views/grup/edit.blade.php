<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Grup</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <form method="post" action="{{ route('grup.update',['grup' => $grup]) }}" enctype="multipart/form-data" > 
        @csrf
        @method('PUT')
        <div>
            <label>Nama Grup</label>
            <input type="text" name="nama" placeholder="Nama Grup" value="{{ $grup->nama }}"/>
        </div>

        <div>
            <label>Password</label>
            <input type="text" name="password" placeholder="Password Grup" value="{{ $grup->password }}"/>
        </div>

        <div>
            <label>Confirm Password</label>
            <input type="text" name="confirm_password" placeholder="Confirm Password" value="{{ $grup->confirm_password }}"/>
        </div>

        <div>
            <label>Binusian or Non Binusian</label>
            <select name="binusian" class="form-select" aria-label="Default select example">
                <option selected>Choose</option>
                <option value="1">Yes</option>
                <option value="2">No</option>
            </select>
        </div>


        <div>
            <input type="submit" value="Save a Data Grup"/>
        </div>

    </form>
</body>
</html>