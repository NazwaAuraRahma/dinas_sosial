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
        <h1 class="display-6 text-black animated slideInDown">Plh Kadinsos Jabar: Tagana, perhatikan Rekokom</h1>
        <p>Terbit Senin, 3 Juni 2024 <span class="mx-2">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid img-thumbnail rounded w-100 h-100" src="{{asset('gambar/berita2.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>

            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Plh. Kepala Dinas Sosial Provinsi Jawa Barat, Andrie Kustria Wardana, memberi pesan agar Forum Koordinasi Tagana (Taruna Siaga Bencana) memperhatikan tiga hal yaitu Regulasi, Komunikasi, dan Komitmen atau ia singkat menjadi rekokom</p>

                <p class="mb-4">Ia menegaskan pentingnya memahami regulasi, menjaga komunikasi serta memegang teguh komitmen dalam menjalankan tugas sebagai Tagana.</p>
                <p class="mb-4">Hal ini ia sampaikan dalam pembukaan kegiatan Rapat Koordinasi Tagana Jawa Barat pada Selasa 21 Mei 2024 di Haris Hotel Ciumbuleuit Bandung. </p>
                <p class="mb-4">Andrie menyambut baik kegiatan rapat koordinasi Tagana ini. "Ini merupakan forum yang baik dalam rangka menyamakan usulan untuk dibawa ke pusat", ujarnya. </p>
                <p class="mb-4">Rapat Koordinasi ini dilaksanakan dalam rangka mengembalikan pemahaman tagana terkait peran dan fungsinya, melakukan evaluasi kegiatan pengurus forum, dan melaksanakan pemilihan ketua FK Masa Bakti 2024 2027.</p>
                <p class="mb-4">Kegiatan Rapat Koordinasi ini sedianya akan diselenggarakan selama 2 hari dengan menghadirkan 4 narasumber dari Kementerian Sosial RI juga dari BPSDM Provinsi Jawa Barat. Kegiatan ini dihadiri oleh 60 peserta yang merupakan perwakilan FK Tagana Provinsi dan kabupaten/kota.</p>
            </div>
        </div>

    </div>

    @include('Template2.footer2')

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>