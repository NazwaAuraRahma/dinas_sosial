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
        <h1 class="display-6 text-black animated slideInDown">Dinsos Jabar Salurkan Bantuan Rp. 186.632.750 ke lokasi bencana KBB</h1>
        <p>Terbit Minggu, 3 Maret 2024 <span class="mx-2">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid img-thumbnail rounded w-100 h-100" src="{{asset('gambar/berita3.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Dinas Sosial Provinsi Jawa Barat menyalurkan bantuan senilai total Rp. 186.632.750 pada warga terdampak bencana pergerakan tanah di Kecamatan Rongga, Kabupaten Bandung Barat, pada Sabtu, 2 Maret 2024. </p>
                <p class="mb-4">Bantuan ini disalurkan langsung oleh Plt. Kepala Dinas Sosial Provinsi Jawa Barat, Andrie Kustria Wardhana, didampingi Kepala Bidang Perlindungan dan Jaminan Sosial, Enok Komariah.
                    Pada kesempatan tersebut, tim dari Dinsos Jabar juga memantau kegiatan dapur umum dan pengungsian guna memastikan pengungsi terfasilitasi pemenuhan kebutuhan dasarnya. </p>
                <p class="mb-4">"Bantuan ini ada yang bersumber dari APBD yaitu senilai Ro. 42.644.000 dan ada juga yang bersumber dari APBN yaitu senilai Rp.101.735.000", Enok menjelaskan. </p>
                <p class="mb-4">Enok melanjutkan, bantuan logistik dari APBD yang disalurkan berupa permakanan, seperti mie instan, air mineral, sarden, kornet, liwet, abon, dan lainnya, sementara itu bantuan dari APBN yang disalurkan berupa permakanan, sandang, kasur, kidsware, family kit, alat dapur, tenda gulung, serta 500 kg beras (senilai Rp.5.271.500,-).</p>
                <p class="mb-4">Terhitung sebanyak 47 KK (160 jiwa) mengungsi ke Islamic Center Kec. Rongga pasca terjadinya pergerakan tanah di Kecamatan Rongga, Kabupaten Bandung Barat, Kamis 29 Februari 2024 setelah sebelumnya juga terjadi di Desa Cibedug, Kecamatan Rongga, Kabupaten Bandung Barat pada Minggu, 18 Februari 2024</p>
                <p class="mb-4">Pergerakan tanah ini menyebabkan tanah amblas 5 meter dan beberapa bangunan rusak. Tercatat ada 3 rumah rusak berat, 8 rumah rusak ringan, 36 rumah terancam, dan 1 sekolah dasar rusak berat.</p>
                <p class="mb-4">Atas bantuan yang diberikan, Kepala Bidang Perlindungan dan Jaminan Sosial, Dinas Sosial Kabupaten Bandung Barat, Rizal Carda Wir mengapresiasi bantuan yang yang diberikan. "Semoga bantuan yang diberikan dapat menjadi manfaat bagi masyarakat yang terdampak bencana", pungkasnya.</p>
            </div>

        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>