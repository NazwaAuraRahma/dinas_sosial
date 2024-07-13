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
                    <h1 class="display-3 text-white animated slideInDown">Profil Dinas Sosial</h1>

                </div>
            </div>
        </div>
    </div>




    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/profil.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tentang kami</h6>
                    <h1 class="mb-4">Dinas Sosial Jawa Barat</h1>
                    <p class="mb-4">Dinas Sosial Provinsi Jawa Barat merupakan Dinas Teknis Daerah yang berada dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah Provinsi Jawa Barat yang mempunyai tugas pokok merumuskan kebijakan operasional di bidang Kesejahteraan Sosial dan melaksanakan sebagian kewenangan dekonsentrasi yang dilimpahkan kepada Gubernur serta Tugas Pembantuan.
                        Pembangunan bidang Kesejahteraan Sosial di lingkungan Pemerintah Propinsi Jawa Barat secara instansional dilaksanakan oleh Dinas Sosial Propinsi Jawa Barat yang keberadaan kelembagaannya dikukuhkan dengan Peraturan Daerah nomor Nomor 5 tahun 2002 yo.Nomor 15 tahun 2000 tentang Dinas Daerah Propinsi Jawa Barat. ( Lembaran Daerah tahun 2000 Nomor 20 Seri D ) dan Keputusan Gubernur Jawa Barat nomor 68 tahun 2009, tentang Pembentukan Balai dan Sub Unit Pelaksana Teknis Dinas pada Dinas Sosial Provinsi Jawa Barat.</p>
                </div>
                <div class="col-lg-12">
                    <p class="mb-4">Dalam penyelenggaraan tugas pokok tersebut Dinas Sosial Provinsi Jawa Barat mempunyai fungsi :</p>
                    <ol class="mb-4">
                        <li>Perumusan kebijakan operasional bidang kesejahteraan sosial.</li>
                        <li>Penyelenggaraan pelayanan umum bidang kesejahteraan sosial.</li>
                        <li>Pembinaan dan fasilitas pelaksanaan tugas tugas bidang kesejahteraan sosial meliputi program, pemberdayaan partisipasi sosial masyarakat, pengembangan sosial, pemulihan sosial, bantuan dan perlindungan sosial serta UPTD.</li>
                        <li>Penyelenggaraan ketatausahaan Dinas Sosial.</li>
                    </ol>
                </div>
                <div class="col-lg-12">
                    <p class="mb-4">Pertumbuhan dan perkembangan situasi dan kondisi secara global serta tuntutan era reformasi dan tantangan yang mengarah kepada krisis multi dimensional dan perubahan paradigma dalam aspek sosial budaya yang berdampak terhadap pertumbuhan dan perkembangan kualitas dan kuantitas Penyandang Masalah Kesejahteraan Sosial(PMKS) yang semakin komplek maka Dinas Sosial Propinsi Jawa Barat sesuai dengan Peraturan Pemerintah Nomor 25 Tahun 2000 tentang Kewenangan Pemerintah danKewenangan Propinsi sebagai Daerah Otonom mempunyai kewenangan dalam bidang Kesejahteraan Sosial yaitu :</p>
                    <ol class="mb-4">
                        <li>Mendukung upaya pengembangan sosial.</li>
                        <li>Mendukung pelestarian nilai-nilai kepahlawanan, keperintisan dan kejuangan serta nilai-nilai kesetiakawanan sosial.</li>
                        <li>Pengawasan pelaksanaan penempatan pekerja sosial profesional dan fungsional di Panti Sosial.</li>
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