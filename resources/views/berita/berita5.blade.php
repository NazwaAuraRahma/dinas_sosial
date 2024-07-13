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
        <h1 class="display-6 text-black animated slideInDown">Pengadopsian Anak: Kapan Waktu Terbaik untuk Open Status?</h1>
        <p>Terbit Kamis, 21 Desember 2023 <span class="mx-2">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid img-thumbnail rounded w-100 h-100" src="{{asset('gambar/berita5.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Pengadopsian Anak merupakan alternatif gerakan yang dapat dilakukan sebagai salah satu upaya penanganan anak terlantar. Akan tetapi, banyak di antara orang tua angkat yang merasa bingung dan berat saat mereka harus berterus terang kepada anak angkatnya tentang status anak tersebut.</p>
                <p class="mb-4">Meiti Subardhini, M.Si, Ph.D, dosen Politeknik Kesejahteraan Sosial Bandung menjelaskan bahwa kesiapan orang tua untuk open status berkaitan dengan aktivitas parenting yang diterapkan.</p>
                <p class="mb-4">"Jika anak sejak kecil diasuh sesuai kebutuhan, diberikan proses pembiasaan, kemudian attachment diberikan, maka dia dapat memiliki konsep diri yang positif", papar Meiti.</p>
                <p class="mb-4">Konsep diri yang positif inilah yang dapat menjadi modal utama bagi anak menerima statusnya sebagai anak angkat. "Bilapun dia mengetahui dirinya anak angkat, dia akan merasa 'saya tidak berbeda dengan anak kandung, saya merasa pendapat orang lain pun tetap baik, saya mendapatkan kebutuhan sesuai yang saya harapkan'. Ini dapat terjadi bila konsep dirinya berkembang secara positif", lanjut Meiti.</p>
                <p class="mb-4">Jadi, menurut Meiti, tidak ada waktu yang pasti kapan orang tua angkat membuka statusnya pada anak angkat. Semuanya bergantung kondisi psikologis anak dan orang tua. Akan tetapi bila dibiasakan sedini mungkin, dengan pola parenting yang baik, maka open status akan menjadi lebih mudah.</p>
                <p class="mb-4">Penjelasan ini ia sampaikan saat menjadi narasumber pada webinar Kampanye Pengasuhan Anak yang diselenggarakan Dinas Sosial Provinsi Jawa Barat di Kantor Satuan Pelayanan Griya Ramah Anak Balita (GRAB) beberapa waktu lalu.</p>
                <p class="mb-4">Di Jawa Barat menurut data per tahun 2020 ada sebanyak 348.198 anak terlantar. Tahun 2021, data anak yatim, piatu dan yatim piatu yang disebabkan Covid-19 berjumlah 4622 anak. Dari jumlah tersebut, tahun 2022, sebanyak 9.852 anak berada dalam asuhan Lembaga Kesejahteraan Sosial Anak (LKSA).</p>
                <p class="mb-4">Kampanye ini diselenggarakan sebagai upaya mengajak masyarakat untuk turut aktif dalam gerakan pengasuhan anak melalui perwalian, pengasuhan atau pengadopsian anak.(rachmi)</p>
            </div>

        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>