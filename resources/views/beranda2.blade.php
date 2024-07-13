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


    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('gambar/kantor3.jpg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Dinas Sosial Jawa Barat</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Memberikan Pelayanan Prima Dalam Kesejahteraan Sosial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{asset('gambar/kantor2.jpeg')}}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown">Dinas Sosial Jawa Barat</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Memberikan Pelayanan Prima Dalam Kesejahteraan Sosial</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/orang1.jpg')}}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="mb-4">Dinas Sosial Jawab Barat</h1>
                        <p class="mb-4">Dinas Sosial Provinsi Jawa Barat merupakan Dinas Teknis Daerah yang berada dan bertanggung jawab kepada Gubernur melalui Sekretaris Daerah Provinsi Jawa Barat yang mempunyai tugas pokok merumuskan kebijakan operasional di bidang Kesejahteraan Sosial dan melaksanakan sebagian kewenangan dekonsentrasi yang dilimpahkan kepada Gubernur serta Tugas Pembantuan.</p>

                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('Pengguna.profil-dinas.index') }}">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 category">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Portal Berita</h6>
                    <h1 class="mb-5">Berita</h1>
                </div>
                <div class="row g-3">
                    <div class="col-lg-7 col-md-6">
                        <div class="row g-3">
                            <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                                <a class="position-relative d-block overflow-hidden" href="{{ route('Pengguna.berita.berita1') }}">
                                    <img class="img-fluid" src="{{asset('gambar/berita1.jpeg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">Penanggulangan Bencana Longsor di Sukabumi</h5>

                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                                <a class="position-relative d-block overflow-hidden" href="{{ route('Pengguna.berita.berita2') }}">
                                    <img class="img-fluid" src="{{asset('gambar/berita2.jpg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">Plh Kadinsos Jabar: Tagana, perhatikan Rekokom</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                                <a class="position-relative d-block overflow-hidden" href="{{ route('Pengguna.berita.berita5') }}">
                                    <img class="img-fluid" src="{{asset('gambar/berita5.jpeg')}}" alt="">
                                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                        <h5 class="m-0">Pengadopsian Anak: Kapan Waktu Terbaik untuk Open Status?</h5>
                                    </div>
                                </a>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                        <a class="position-relative d-block h-100 overflow-hidden" href="{{ route('Pengguna.berita.berita3') }}">
                            <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/berita3.jpeg')}}" alt="" style="object-fit: cover;">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                                <h5 class="m-0">Dinsos Jabar Salurkan Bantuan Rp. 186.632.750 ke lokasi bencana KBB</h5>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('Pengguna.berita.index') }}">Lihat Semua Berita</a>
                    </div>
                </div>
            </div>
        </div>


        @include('Template2.footer2')

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        @include('Template2.script2')
</body>

</html>