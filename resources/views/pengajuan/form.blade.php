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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />


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
                    <h1 style="color: #0D9276">Welcome to Pengajuan Judul</h1>


                </div>

                {{-- navbar End --}}
                <div class="container-fluid pt-4 px-4" style="color: #0D9276">
                    <div class="bg-light text-justify rounded p-4">


                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('pengajuan.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nama">Nama</label>
                                <select class="form-control" id="search" style="width:500px;"
                                    name="nama"></select>
                            </div>
                            <div class="mb-3">
                                <label for="InputJudul1" class="form-label">Judul 1</label>
                                <input type="text" class="form-control" name="judula" aria-describedby="nama">
                            </div>
                            <div class="mb-3">
                                <label for="InputJudul2" class="form-label">Judul 2</label>
                                <input type="text" class="form-control" name="judulb" aria-describedby="nama">
                            </div>
                            <div class="mb-3">
                                <label for="InputJudul3" class="form-label">Judul 3</label>
                                <input type="text" class="form-control" name="judulc" aria-describedby="nama">
                            </div>
                            <div class="mb-3">
                                <label for="InputJudul3" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="ket" aria-describedby="nama">
                            </div>
                            <div class="mb-3">
                                <label for="PilihPembimbing1">Pembimbing 1</label>
                                <select class="form-select" aria-label="Pembimbing" name="pembimbing">
                                    <option selected>Silahkan Dipilih</option>
                                    @foreach ($p1 as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="PilihPembimbing2">Pembimbing 2</label>
                                <select class="form-select" aria-label="Pembimbing" name="pembimbing2">
                                    <option selected>Silahkan Dipilih</option>
                                    @foreach ($p2 as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>

                    </div>
                </div>
                @include('footer')
            </div>
        </div>
        <script type="text/javascript">
            var path = "{{ route('autocomplete') }}";

            $("#search").select2({
                placeholder: 'Select an user',
                ajax: {
                    url: path,
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                    text: item.namea,
                                    id: item.id,
                                    kelas: item.kelas
                                }
                            })
                        };
                    },
                    cache: true
                }
            });
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
        @include('javascript')
    </body>

    </html>
