<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('gambar/logo1.png')}}" height="60" width="60">
        </div>


        @include('Template.navbar')

        @include('Template.sidebar')

        <div class="content-wrapper">

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard Admin</h1>
                        </div>
                    </div>
                </div>
            </div>

            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $jumlahPegawai }}</h3>

                                    <p>Data Pegawai</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-user-tie"></i>
                                </div>
                                <a href="{{ route('Admin.pegawai.index') }}" class="small-box-footer">info selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{ $jumlahPmks }}</h3>

                                    <p>Data PMKS</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-portrait"></i>
                                </div>
                                <a href="{{ route('Admin.pmks.index') }}" class="small-box-footer">info selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-3 col-6">

                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{ $jumlahPengaduan }}</h3>

                                    <p>Info Pengaduan</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-file-invoice"></i>
                                </div>
                                <a href="{{ route('Admin.infopengaduan.index') }}" class="small-box-footer">info selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

        </div>

        <footer class="main-footer">
            @include('Template.footer')
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    @include('Template.script')
</body>

</html>