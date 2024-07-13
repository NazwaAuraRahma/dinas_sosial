<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
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
                            <h1 class="m-0">Tambah Data Pmks</h1>
                        </div>
                    </div>

                    <div class="content">
                        <div class="card card-info card-outline">

                            <div class="card-body">
                                <form action="{{ route('Admin.pmks.create') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nik">Nik</label>
                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK Anda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_kelamin">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap Anda" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select class="form-control" id="jk" name="jk" required>
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jenis_pmks">Jenis PMKS</label>
                                        <select class="form-control" id="jenis_pmks" name="jenis_pmks" required>
                                            <option value="">Pilih Jenis PMKS</option>
                                            <option>Anak Balita Terlantar</option>
                                            <option>Anak Terlantar</option>
                                            <option>Anak Nakal</option>
                                            <option>Anak Jalanan</option>
                                            <option>Wanita Rawan Sosial Ekonomi</option>
                                            <option>Korban Tindak Kekerasan</option>
                                            <option>Lanjut Usia Terlantar</option>
                                            <option>Penyandang Cacat</option>
                                            <option>Tuna Susila</option>
                                            <option>Pengemis</option>
                                            <option>Gelandangan</option>
                                            <option>Bekas Warga Binaan Lembaga Kemasyarakatan</option>
                                            <option>Korban Penyalahgunaan Napza</option>
                                            <option>Keluarga Fakir Miskin</option>
                                            <option>Keluarga Berumah Tak Layak Huni</option>
                                            <option>Keluarga Bermasalah Sosial Psikologis</option>
                                            <option>Komunitas Adat terpencil</option>
                                            <option>Korban Bencana Sosial atau Pengungsi</option>
                                            <option>Pekerja Migran Bermasalah Sosial</option>
                                            <option>Keluarga Rentan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="kota">Kota Asal</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota Asal" required>
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