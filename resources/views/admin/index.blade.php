<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIRI</title>
</head>
<body>

    <h1>WELCOME TO SIRI - Admin Section</h1>

    <a href="/admin/form">Tambah Admin</a>

    <table>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
        </tr>
        @foreach ($admin as $a)
        <tr>
            <td>{{$a->id}}</td>
            <td>{{$a->nama}}</td>
            <td>{{$a->username}}</td>
            <td>{{$a->password}}</td>
            <td>
                <a href="/admin/edit/{{$a->id}}">Edit</a>
                <a href="/admin/delete/{{$a->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
