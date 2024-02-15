<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIRI</title>
</head>
<body>

    <h1>WELCOME TO SIRI - Student Section</h1>

    <a href="/student/form">Tambah Siswa</a>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>AKSI</th>
        </tr>
        @foreach ($siswa as $s)
        <tr>
            <td>{{$s->id}}</td>
            <td>{{$s->nama}}</td>
            <td>{{$s->kelas}}</td>
            <td>
                <a href="/student/edit/{{$s->id}}">Edit</a>
                <a href="/student/delete/{{$s->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
