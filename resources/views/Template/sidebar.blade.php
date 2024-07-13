<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">

        <div class="user-panel mt-3 pb-3 mb-3 d-flex bold">
            <div class="image">
                <img src="{{asset('gambar/logo1.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Dinas Sosial Jawa Barat</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('Admin.beranda.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            List Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('Admin.pegawai.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pegawai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Admin.pmks.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pendataan PMKS</p>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-header">Info</li>

                <li class="nav-item">
                    <a href="{{ route('Admin.infopengaduan.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                            Info Pengaduan
                            <span class="badge badge-info right"></span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>