<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    </title>
</head>
<body>

    <h1>WELCOME TO EDIT SISWA</h1>

    <form action="/student/edit/{{$edit->id}}" method="post">
        @csrf
        <input type="text" name="nama" placeholder="Nama" value="{{$edit->nama}}">
        <input type="text" name="kelas" placeholder="Kelas" value="{{$edit->kelas}}">

        <button type="submit">Submit</button>
    </form>

</body>
</html>
