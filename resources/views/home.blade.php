<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SIRI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    @include('css')

</head>

<body>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Mohon Bersabar...</span>
            </div>
        </div>
        <!-- Spinner End -->

        @include('sidebar')

        <!-- Content Start -->
        <div class="content">

            @include('navbar')

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">BERANDA</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <p>

                            Halo, User
                            Selamat datang di website Sistem Pengajuan Judul Risalah MA Salafiyah Syafi’iyah Sukorejo.
                            Sistem ini dirancang untuk mempermudah dalam melakukan proses pengajuan judul risalah.
                            Semoga pengajuan anda dapat diterima

                        </p>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

            @include('footer')

        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @include('javascript')

</body>

</html>
