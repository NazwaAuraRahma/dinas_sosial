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
                            <h1 class="m-0">Tambah Data Pegawai</h1>
                        </div>
                    </div>

                    <div class="content">
                        <div class="card card-info card-outline">

                            <div class="card-body">
                                <form action="{{ route('Admin.pegawai.create') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nik">Nik</label>
                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK Pegawai" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Pegawai" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jenis Kelamin</label>
                                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Jabatan</label>
                                        <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Jabatan Pegawai" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Simpan Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="main-footer">
            @include('Template.footer')
        </footer>


        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    @include('Template.script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





</body>

</html>