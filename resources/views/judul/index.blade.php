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
                    <table id="data-table" class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Pembimbing 1</th>
                                <th>Pembimbing 2</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Existing table rows -->
                            <tr>
                                <th scope="row">1</th>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                                <td>jane@example.com</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        Penerimaan
                                    </button>
                                </td>
                            </tr>
                            <!-- End of existing table rows -->
                        </tbody>
                    </table>

                    <!-- Modal -->
                    <div class="modal fade SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di kabupaten Banyuwangi berbasis WEB"
                        id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pengajuan Form</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form fields -->
                                    <form action="{{ route('submit.form') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama"
                                                placeholder="Enter Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul 1</label>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect2">Example multiple select</label>
                                                <select multiple class="form-control" id="exampleFormControlSelect2">
                                                    <option>SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di
                                                        kabupaten Banyuwangi berbasis WEB</option>
                                                    <option>SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di
                                                        kabupaten Banyuwangi berbasis WEB</option>
                                                    <option>SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di
                                                        kabupaten Banyuwangi berbasis WEB dengan mengguanakan
                                                        metode
                                                        clasificasi k-means dan google map api</option>
                                                </select>
                                            </div>
                                            {{-- <input type="text" class="form-control" id="judul" name="judul"
                                                value="SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di kabupaten Banyuwangi berbasis WEB"> --}}
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">SIstem Informasi Geografis Pemetaan Kerusakan Jalan Di kabupaten Banyuwangi berbasis WEB</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Enter Judul A">
                                        </div>
                                        <div class="mb-3">
                                            <label for="judul" class="form-label">Judul</label>
                                            <input type="text" class="form-control" id="judul" name="judul"
                                                placeholder="Enter Judul A">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pembimbinga" class="form-label">Pembimbing A</label>
                                            <input type="text" class="form-control" id="pembimbinga"
                                                name="pembimbinga" placeholder="Enter Judul B">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pembimbingb" class="form-label">Pembimbing B</label>
                                            <input type="text" class="form-control" id="pembimbingb"
                                                name="pembimbingb" placeholder="Enter Judul C">
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan" rows="3" placeholder="Enter Keterangan"></textarea>
                                        </div>
                                        <!-- Add more form fields as needed -->
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Model End --}}




                    {{-- <script>
                        // Function to fetch new data and update the table
                        function updateTable() {
                            $.ajax({
                                url: '/get-new-data', // Replace with the actual URL to fetch new data
                                method: 'GET'
                                , success: function(response) {
                                    // Clear the existing table rows
                                    $('#data-table tbody').empty();

                                    // Loop through the new data and append rows to the table
                                    $.each(response, function(index, data) {
                                        var row = '<tr>' +
                                            '<th scope="row">' + (index + 1) + '</th>' +
                                            '<td>' + data.nama + '</td>' +
                                            '<td>' + data.judul + '</td>' +
                                            '<td>' + data.pembimbing1 + '</td>' +
                                            '<td>' + data.pembimbing2 + '</td>' +
                                            '<td>' + data.keterangan + '</td>' +
                                            '</tr>';
                                        $('#data-table tbody').append(row);
                                    });
                                }
                                , error: function(xhr, status, error) {
                                    console.log(error); // Handle the error if any
                                }
                            });
                        }

                        // Call the updateTable function initially
                        updateTable();

                        // Call the updateTable function periodically to fetch new data
                        setInterval(updateTable, 5000); // Replace 5000 with the desired interval in milliseconds

                    </script> --}}

                    {{-- <table>
                        <tr>
                            <th>NAMA</th>
                            <th>Pembimbing 1</th>
                            <th>Judul</th>
                            <th>Judul</th>
                            <th>Judul</th>
                            <th>Keterangan</th>
                        </tr>

                            <tr>
                                <td>{{ $p->siswa->nama }}</td>
                    <td>{{$p->pembimbing->id_pembimbing_a}}</td>
                    <td>{{ $p->pembimbing->nama }}</td>

                    <td>{{ $p->pembimbing2->nama }}</td>

                    <td>{{$p->pembimbing->id_pembimbing_b}}</td>

                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->keterangan }}</td>
                    <td>
                        <a href="/pengajuan/edit/{{ $p->id }}">Edit</a>
                        <a href="/pengajuan/delete/{{ $p->id }}">Delete</a>
                    </td>
                    </tr>
                    @endforeach
                    </table> --}}
                </div>
            </div>
            @include('footer')
        </div>
    </div>
    @include('javascript')
</body>

</html>
