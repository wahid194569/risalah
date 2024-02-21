<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIRI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    {{-- take from css.blade.php --}}
    @include('css')

</head>

<body>
    {{-- <h1>WELCOME TO SIRI - Pengajuan Section</h1> --}}
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        {{-- sidebar Start --}}
        @include('sidebar')
        {{-- sidebar End --}}
        <div class="content">
            {{-- navbar Start --}}
            @include('navbar')

            <div class="container-fluid pt-4 px-4">
                <h1 style="color: #0D9276">WELCOME TO SIRI - Pengajuan Section</h1>


            </div>

            {{-- navbar End --}}
            <div class="container-fluid pt-4 px-4">

                <div class="bg-light text-center rounded p-4">
                    {{-- <div class="d-flex align-items-center justify-content-between mb-4">
                        <a href="">Show All</a>
                    </div> --}}
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Judul</th>
                                <th>Judul</th>
                                <th>Pembimbing 1</th>
                                <th>Pembimbing 2</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>jhon@email.com</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>mark@email.com</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>jacob@email.com</td>
                            </tr>
                        </tbody>
                    </table>

                    <table>
                        <tr>
                            <th>NAMA</th>
                            <th>Pembimbing 1</th>
                            <th>Judul</th>
                            <th>Judul</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                        </tr>
                        @foreach ($pengajuan as $p)
                            {{-- @dd($p->siswa->nama) --}}
                            <tr>
                                {{-- <td>{{ $p->siswa->nama }}</td> --}}
                                {{-- <td>{{$p->pembimbing->id_pembimbing_a}}</td> --}}
                                {{-- <td>{{ $p->pembimbing->nama }}</td> --}}

                                {{-- <td>{{ $p->pembimbing2->nama }}</td> --}}

                                {{-- <td>{{$p->pembimbing->id_pembimbing_b}}</td> --}}

                                {{-- <td>{{ $p->judul }}</td>
                            <td>{{ $p->keterangan }}</td> --}}
                                {{-- <td>
                                <a href="/pengajuan/edit/{{ $p->id }}">Edit</a>
                            <a href="/pengajuan/delete/{{ $p->id }}">Delete</a>
                            </td> --}}
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            @include('footer')
        </div>
    </div>
    @include('javascript')
</body>

</html>
