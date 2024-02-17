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

    <h1>WELCOME TO FORM Pengajuan Judul</h1>

    <form action="/pengajuan/form" method="post">
        @csrf
        {{-- <input type="text" name="id_siswa" placeholder="Nama"> --}}
        {{-- <input type="text" name="id_pembimbing_a" placeholder="Pembimbing"> --}}
        {{-- <input type="text" name="id_pembimbing_b" placeholder="Pembimbing"> --}}
        {{-- <select name="id_pembimbing_a" required>
            <option disabled selected>Pembimbing 1</option>
            @foreach ($pembimbing as $p)
            <option value="{{$p->id}}">{{$p->nama}}</option>
        @endforeach
        </select>
        <select name="id_pembimbing_b" required>
            <option disabled selected>Pembimbing 2</option>
            @foreach ($pembimbing as $p)
            <option value="{{$p->id}}">{{$p->nama}}</option>
            @endforeach
        </select> --}}
        {{-- @dd($siswa) --}}
        {{-- <input type="text" name="id_siswa" placeholder="Nama"> --}}
        <select name="id_siswa">
            @foreach ($siswa as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        <input type="text" name="judul[]" placeholder="Judul">
        <input type="text" name="judul[]" placeholder="Judul">
        <input type="text" name="judul[]" placeholder="Judul">
        <select name="id_pembimbing">
            @foreach ($siswa as $item)
            <option value="{{ $item->id }}">{{ $item->nama }}</option>
            @endforeach
        </select>
        {{-- <input type="text" name="judul_b" placeholder="Judul">
        <input type="text" name="judul_c" placeholder="Judul"> --}}
        {{-- <input type="text" name="keterangan" placeholder="Keterangan"> --}}
        <button type="submit">Submit</button>
    </form>

</body>

</html>
