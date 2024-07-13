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


    <div class="container">
        <h1 class="display-6 text-black animated slideInDown">3.909 Desa/Kelurahan di Jabar sudah miliki Puskesos</h1>
        <p>Terbit Kamis, 5 Oktober 2023 <span class="mx-2">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid img-thumbnail rounded w-100 h-100" src="{{asset('gambar/berita4.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Cimahi, Selasa, 26 September 2023 - Sebanyak 3.909 desa/kelurahan atau 65,62% dari total desa/kelurahan di Jawa Barat telah membentuk Pusat Kesejahteraan Sosial (Puskesos). Hal ini disampaikan Kepala Dinas Sosial Provinsi Jawa Barat, Dr. Hj. Ida Wahida Hidayati, SE., SH., M.Si, dalam sambutannya pada kegiatan Rapat Koordinasi Penyelenggaraan Puskesos-SLRT (Sistem Layanan Rujukan Terpadu) di Ruang Rapat Sawala Dinas Sosial Provinsi Jawa Barat.</p>

                <p class="mb-4">Kadinsos Jabar mengatakan, dari 37 Provinsi di Indonesia, Provinsi Jawa Barat merupakan satu-satunya provinsi dengan perkembangan pembentukan Puskesos yang sangat cepat. "Namun demikian, dalam perjalannya, penyelenggaraan Puskesos-SLRT belum optimal terutama karena permasalahan anggaran", paparnya.</p>
                <p class="mb-4">Rapat Koordinasi ini dilaksanakan dalam rangka penguatan Puskesos - SLRT sebagai garda terdepan dalam menyediakan layanan sosial satu pintu dengan berbagai layanan sosial bagi Pemerlu Pelayanan Kesejahteraan Sosial (PPKS) termasuk masyarakat miskin dan rentan miskin.</p>
                <p class="mb-4">Kegiatan ini menghadirkan tiga orang narasumber dari unsur yang berbeda yaitu Drs. Luthfy Latief, M.Si Direktur Fasilitasi Pemanfaatan Dana Desa Kementerian Desa, Pembangunan Daerah Tertinggal Dan Transmigrasi RI, Dr. Didiet Widiowati, M.Si Dosen Politeknik Kesejahteraan Sosial/Poltekesos Bandung, dan Ipah Syarifah Ketua Puskesos Desa Cibiru Wetan Kecamatan Cileunyi Kabupaten Bandung sebagai best practice penyelenggaraan Puskesos Desa.</p>
                <p class="mb-4">Hadir pula Kepala Dinas Sosial Provinsi Jawa Barat didampingi oleh Sekretaris Dinas Sosial Andrie Kustria Wardana, S.STP., M.Si, CRBD, dan Kepala Bidang Pemberdayaan Sosial Dra. Hj. Elis Kartini, M.Si. </p>
                <p class="mb-4">Peserta Rapat berjumlah 54 orang yang terdiri atas unsur Kepala Dinas Sosial Kabupaten/Kota dan manager SLRT.</p>
                <p class="mb-4">Diharapkan melalui Rapat koordinasi ini, Dinas Sosial kabupaten/kota dan manager SLRT se-Jawa Barat semakin memahami penggunaan dana desa, dan memanfaatkan kolaborasi dalam menyelesaikan permasalahan-permasalahan dalam penyelenggaraan Puskesos-SLRT.</p>
            </div>

        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>