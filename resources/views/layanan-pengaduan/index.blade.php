<!DOCTYPE html>
<html lang="en">

<head>
    @include('Template2.head2')

</head>

<body>

    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    @include('Template2.navbar2')


    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Pelayanan Pengaduan</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Pelayanan Pengaduan Masyarakat</h1>
                <p class="mb-4">Harap diisi dengan lengkap dan benar. Pengaduan anda akan ditangani semestinya.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Keterangan :</h5>
                    <ol class="mb-4">
                        <li>Pemohon mengajukan pengaduan langsung atau melalui media yang disediakan.</li>
                        <li>Pemohon melengkapi persyaratan : identitas diri dan bukti-bukti terkait hal yang diadukan.</li>
                    </ol>




                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{ route('Pengguna.layanan-pengaduan.store') }}" method="POST">
                        @csrf
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Anda">
                                        <label for="nama">Nama Anda</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nik" id="nik" placeholder="NIK">
                                        <label for="nik">NIK</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="judul_laporan" id="judul_laporan" placeholder="Judul Laporan">
                                        <label for="judul_laporan">Judul Laporan</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" name="laporan" id="laporan" style="height: 150px"></textarea>
                                        <label for="laporan">Masukan Laporan Anda Disini</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



    @include('Template2.script2')

</body>

</html>