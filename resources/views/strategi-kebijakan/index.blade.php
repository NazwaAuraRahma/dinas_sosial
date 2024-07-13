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
                    <h1 class="display-3 text-white animated slideInDown">Strategi & Kebijakan</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/kebijakan.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Strategi dan Kebijakan kami</h6>
                    <h1 class="mb-4">Strategi & Kebijakan Dinas Sosial Provinsi Jawa Barat</h1>
                    <h3>Kebijakan</h3>
                    <ol class="mb-4">
                        <li>Melaksanakan fasilitasi Pelayanan dan Rehabilitasi Sosial baik di dalam Balai maupun di luar Balai sebagai proses perbaikan maupun pemulihan terhadap PMKS agar mampu melaksanakan fungsi sosialnya secara wajar dalam kehidupan masyarakat.</li>
                        <li>Melaksanakan fasilitasi dan upaya Pemberdayaan sosial baik di dalam Balai maupun di luar Balai sebagai proses peningkatan kualitas kehidupan PMKS sehingga dapat memenuhi kebutuhan dasarnya.</li>
                        <li>Melakukan fasilitasi dan upaya Bantuan dan Perlindungan Sosial kepada PMKS sebagai upaya meringankan beban dan mencegah serta mengurangi risiko dari guncangan dan kerentanan sosial.</li>
                        <li>Menjalin Kemitraan dengan berbagai stakeholder seperti Dinas / Instansi terkait, Perguruan Tinggi, PSKS termasuk dunia usaha dalam upaya meningkatkan mutu dan jangkauan pelayanan kesejahteraan sosial.</li>
                        <li>Mengembangkan Partisipasi sosial masyarakat untuk melakukan upaya pencegahan maupun penanganan PMKS secara swadaya / berbasis masyarakat.</li>
                        <li>Memberikan Advokasi sosial sebagai upaya untuk mendukung, membela, dan melindungi para PMKS, keluarga serta masyarakat di sekitarnya dalam memperoleh hak dan mendapatkan perlakuan yang sesuai dengan aturan yang berlaku.</li>

                    </ol>
                </div>
                <div class="col-lg-12">
                    <h3>Strategi</h3>
                    <ol class="mb-4">
                        <li>Mengoptimalkan kemitraan dengan PSKS dan memanfaatkan sarana / prasarana pelayanan kesejahteraan sosial untuk meningkatkan pelayanan kesejahteraan sosial.</li>
                        <li>Mengoptimalkan kemampuan SDM Dinas Sosial untuk memanfaatkan kearifan lokal dalam memberikan pelayanan kesejahteraan sosial.</li>
                        <li>Meningkatkan kerjasama dengan Perguruan Tinggi, dalam rangka meningkatkan profesionalisme SDM khususnya di bidang Pekerjaan Sosial.</li>
                        <li>Mengoptimalkan implementasi Undang-Undang, perda dan peraturan lainnya serta tupoksi untuk meningkatkan peran serta masyarakat dalam pelayanan kesejahteraan sosial.</li>
                        <li>Mengoptimalkan kerjasama dengan perguruan tinggi dalam mengembangkan metoda pelayanan kesejahteraan sosial di balai/sub unit.</li>
                        <li>Mengoptimalkan koordinasi dengan Kabupaten / Kota menekan mobilitas PMKS dari luar Jawa Barat yang masuk ke wilayah Jawa Barat.</li>
                        <li>Mengoptimalkan kerjasama dan sinergitas dengan Kab/Kota dalam implementasi anggaran APBD maupun APBN.</li>
                        <li>Meningkatkan profesionalisme SDM / pegawai melalui kerjasama dengan Perguruan Tinggi, khususnya di bidang Pekerjaan Sosial.</li>
                        <li>Memanfaatkan kerjasama / kemitraan dengan berbagai lembaga untuk melakukan pendataan PMKS secara akurat.</li>
                        <li>Meningkatkan jangkauan pelayanan melalui peran serta masyarakat dalam pembangunan bidang kesejahteraan sosial.</li>
                        <li>Mengoptimalkan network / jaringan komunikasi dan informasi melalui IT dengan LSM/Orsos baik lokal, nsional maupun internasional.</li>
                    </ol>


                </div>
            </div>
        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>