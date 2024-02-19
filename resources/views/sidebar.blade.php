<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-dark">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <h3 style="color: #0D9276"><i class="fa fa-envelope me-2" style="color: #0D9276"></i>SIRI</h3>


        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Jhon Doe</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="{{ route('pengajuan.form') }}" class="nav-item nav-link "><i class="fa fa fa-keyboard me-2 me-2"></i>Pengajuan Judul</a>
            <a href="{{ route('pengajuan') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>List Judul</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
