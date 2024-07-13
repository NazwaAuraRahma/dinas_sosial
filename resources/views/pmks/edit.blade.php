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
                            <h1 class="m-0">Edit Data PMKS</h1>
                        </div>
                    </div>

                    <div class="content">
                        <div class="card card-info card-outline">

                            <div class="card-body">
                                <form action="{{ route('Admin.pmks.update', $pmks->id) }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nik">Nik</label>
                                        <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK Anda" value="{{ $pmks->nik }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" value="{{ $pmks->nama }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="jenis_pmks">Jenis PMKS</label>
                                        <select class="form-control" id="jenis_pmks" name="jenis_pmks">
                                            <option value="">Pilih Jenis PMKS</option>
                                            <option value="Anak Balita Terlantar" {{ $pmks->jenis_pmks == 'Anak Balita Terlantar' ? 'selected' : '' }}>Anak Balita Terlantar</option>
                                            <option value="Anak Terlantar" {{ $pmks->jenis_pmks == 'Anak Terlantar' ? 'selected' : '' }}>Anak Terlantar</option>
                                            <option value="Anak Nakal" {{ $pmks->jenis_pmks == 'Anak Nakal' ? 'selected' : '' }}>Anak Nakal</option>
                                            <option value="Anak Jalanan" {{ $pmks->jenis_pmks == 'Anak Jalanan' ? 'selected' : '' }}>Anak Jalanan</option>
                                            <option value="Wanita Rawan Sosial Ekonomi" {{ $pmks->jenis_pmks == 'Wanita Rawan Sosial Ekonomi' ? 'selected' : '' }}>Wanita Rawan Sosial Ekonomi</option>
                                            <option value="Korban Tindak Kekerasan" {{ $pmks->jenis_pmks == 'Korban Tindak Kekerasan' ? 'selected' : '' }}>Korban Tindak Kekerasan</option>
                                            <option value="Lanjut Usia Terlantar" {{ $pmks->jenis_pmks == 'Lanjut Usia Terlantar' ? 'selected' : '' }}>Lanjut Usia Terlantar</option>
                                            <option value="Penyandang Cacat" {{ $pmks->jenis_pmks == 'Penyandang Cacat' ? 'selected' : '' }}>Penyandang Cacat</option>
                                            <option value="Tuna Susila" {{ $pmks->jenis_pmks == 'Tuna Susila' ? 'selected' : '' }}>Tuna Susila</option>
                                            <option value="Pengemis" {{ $pmks->jenis_pmks == 'Pengemis' ? 'selected' : '' }}>Pengemis</option>
                                            <option value="Gelandangan" {{ $pmks->jenis_pmks == 'Gelandangan' ? 'selected' : '' }}>Gelandangan</option>
                                            <option value="Bekas Warga Binaan Lembaga Kemasyarakatan" {{ $pmks->jenis_pmks == 'Bekas Warga Binaan Lembaga Kemasyarakatan' ? 'selected' : '' }}>Bekas Warga Binaan Lembaga Kemasyarakatan</option>
                                            <option value="Korban Penyalahgunaan Napza" {{ $pmks->jenis_pmks == 'Korban Penyalahgunaan Napza' ? 'selected' : '' }}>Korban Penyalahgunaan Napza</option>
                                            <option value="Keluarga Fakir Miskin" {{ $pmks->jenis_pmks == 'Keluarga Fakir Miskin' ? 'selected' : '' }}>Keluarga Fakir Miskin</option>
                                            <option value="Keluarga Berumah Tak Layak Huni" {{ $pmks->jenis_pmks == 'Keluarga Berumah Tak Layak Huni' ? 'selected' : '' }}>Keluarga Berumah Tak Layak Huni</option>
                                            <option value="Keluarga Bermasalah Sosial Psikologis" {{ $pmks->jenis_pmks == 'Keluarga Bermasalah Sosial Psikologis' ? 'selected' : '' }}>Keluarga Bermasalah Sosial Psikologis</option>
                                            <option value="Komunitas Adat terpencil" {{ $pmks->jenis_pmks == 'Komunitas Adat terpencil' ? 'selected' : '' }}>Komunitas Adat terpencil</option>
                                            <option value="Korban Bencana Sosial atau Pengungsi" {{ $pmks->jenis_pmks == 'Korban Bencana Sosial atau Pengungsi' ? 'selected' : '' }}>Korban Bencana Sosial atau Pengungsi</option>
                                            <option value="Pekerja Migran Bermasalah Sosial" {{ $pmks->jenis_pmks == 'Pekerja Migran Bermasalah Sosial' ? 'selected' : '' }}>Pekerja Migran Bermasalah Sosial</option>
                                            <option value="Keluarga Rentan" {{ $pmks->jenis_pmks == 'Keluarga Rentan' ? 'selected' : '' }}>Keluarga Rentan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="jk">Jenis Kelamin</label>
                                        <select class="form-control" id="jk" name="jk">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki" {{ $pmks->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ $pmks->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="kota">Kota Asal</label>
                                        <input type="text" name="kota" id="kota" class="form-control" placeholder="Kota Asal" value="{{ $pmks->kota }}">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Ubah Data</button>
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

    @if (session('success'))
    <script>
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 1500
        });
    </script>
    @endif


</body>

</html>