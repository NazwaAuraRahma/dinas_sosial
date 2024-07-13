<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('Pengguna.beranda2.index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-primary">
            <div class="text-center mb-2">
                <img src="{{asset('gambar/logo1.png')}}" alt="" width="60">
                </i>Dinas Sosial Jawa Barat
            </div>

        </h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('Pengguna.beranda2.index') }}" class="nav-item nav-link active">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profil</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('Pengguna.profil-dinas.index') }}" class="dropdown-item">Profil Dinas</a>
                    <a href="{{ route('Pengguna.visi-misi.index') }}" class="dropdown-item">Visi Misi</a>
                    <a href="{{ route('Pengguna.tupoksi-tujuan.index') }}" class="dropdown-item">Tupoksi & Tujuan</a>
                    <a href="{{ route('Pengguna.strategi-kebijakan.index') }}" class="dropdown-item">Strategi & Kebijakan</a>
                </div>
            </div>

            <a href="{{ route('Pengguna.berita.index') }}" class="nav-item nav-link">Berita</a>
            <a href="{{ route('Pengguna.layanan-pengaduan.index') }}" class="nav-item nav-link">Layanan Pengaduan</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle nav-icon far fa-user" data-bs-toggle="dropdown"></a>
                <div class="dropdown-menu fade-down m-0" style="right: 0; left: auto;">
                    <a href="{{ route('logout') }}" class="dropdown-item">Logout</a>
                </div>
            </div>
        </div>

    </div>
    </div>
</nav>