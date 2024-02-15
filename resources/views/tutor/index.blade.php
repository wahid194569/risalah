<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIRI</title>
</head>
<body>

    <h1>WELCOME TO SIRI - Pembimbing Section</h1>

    <a href="/tutor/form">Tambah Pembimbing</a>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>SPESIALISASI</th>
            <th>AKSI</th>
        </tr>
        {{-- Undefined variable $tutor --}}

        @foreach ($tutor as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->nama}}</td>
            <td>{{$t->spesialisasi}}</td>
            <td>
                <a href="/tutor/edit/{{$t->id}}">Edit</a>
                <a href="/tutor/delete/{{$t->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
