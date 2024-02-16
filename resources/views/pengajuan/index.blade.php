<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIRI</title>
</head>

<body>

    <h1>WELCOME TO SIRI - Pengajuan Section</h1>

    <a href="/pengajuan/form">Tambah Pengajuan</a>

    <table>
        <tr>
            {{-- id	id_siswa	id_pembimbing_a	id_pembimbing_b	judul	keterangan

 --}}
            <th>NAMA</th>
            <th>Pembimbing 1</th>
            <th>pembimbing 2</th>
            <th>Judul</th>
            <th>Judul</th>
            <th>Judul</th>
            <th>Keterangan</th>
        </tr>
        @foreach ($pengajuan as $p)
            {{-- @dd($p->siswa->nama) --}}
            <tr>
                <td>{{ $p->siswa->nama }}</td>
                {{-- <td>{{$p->pembimbing->id_pembimbing_a}}</td> --}}
                <td>{{ $p->pembimbing->nama }}</td>

                <td>{{ $p->pembimbing2->nama }}</td>

                {{-- <td>{{$p->pembimbing->id_pembimbing_b}}</td> --}}

                <td>{{ $p->judul }}</td>
                <td>{{ $p->keterangan }}</td>
                <td>
                    <a href="/pengajuan/edit/{{ $p->id }}">Edit</a>
                    <a href="/pengajuan/delete/{{ $p->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
