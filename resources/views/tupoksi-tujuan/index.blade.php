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
                    <h1 class="display-3 text-white animated slideInDown">Tupoksi dan Tujuan</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/tupoksi.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Tupoksi & Tujuan kami</h6>
                    <h1 class="mb-4">Tugas Pokok & Fungsi Dinas Sosial Provinsi Jawa Barat</h1>
                    <p class="mb-4">Dinas Sosial Provinsi Jawa Barat mempunyai tugas pokok menyelenggarakan urusan pemerintahan bidang sosial, meliputi perlindungan dan jaminan sosial, penanganan fakir miskin, rehabilitasi sosial, dan pemberdayaan sosial, yang menjadi kewenangan Daerah Provinsi, melaksanakan tugas dekonsentrasi dan melaksanakan tugas pembantuan sesuai bidang tugasnya berdasarkan ketentuan peraturan perundang-undangan.</p>
                </div>
                <div class="col-lg-12">
                    <p class="mb-4">Dalam menyelenggarakan tugas pokok, Dinas Sosial Provinsi Jawa Barat mempunyai fungsi:</p>
                    <ol class="mb-4">
                        <li>Penyelenggaraan perumusan kebijakan teknis bidang sosial yang menjadi kewenangan Daerah Provinsi</li>
                        <li>Penyelenggaraan pengelolaan bidang sosial, yang menjadi kewenangan Daerah Provinsi</li>
                        <li>Penyelenggaraan administrasi Dinas</li>
                        <li>Penyelenggaraan evaluasi dan pelaporan Dinas, dan</li>
                        <li>Penyelenggaraan tugas lain sesuai dengan tugas pokok dan fungsinya</li>
                    </ol>

                    <p class="mb-4">Penyelenggaraan kesejahteraan sosial bertujuan :</p>
                    <ol class="mb-4">
                        <li>Meningkatkan taraf kesejahteraan, kualitas, dan kelangsungan hidup</li>
                        <li>Memulihkan fungsi sosial dalam rangka mencapai kemandirian</li>
                        <li>Meningkatkan ketahanan sosial masyarakat dalam mencegah dan menangani masalah kesejahteraan sosial</li>
                        <li>Meningkatkan kemampuan, kepedulian dan tanggungjawab sosial dunia usaha dalam penyelenggaraan kesejahteraan sosial secara melembaga dan berkelanjutan</li>
                        <li>Meningkatkan kemampuan dan kepedulian masyarakat dalam penyelenggaraan kesejahteraan sosial secara melembaga dan berkelanjutan, dan</li>
                        <li>Meningkatkan kualitas manajemen penyelenggaraan kesejahteraan sosial.</li>
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