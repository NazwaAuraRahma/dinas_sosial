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
        <h1 class="display-6 text-black animated slideInDown">Penanggulangan Bencana Longsor di Sukabumi</h1>
        <p>Terbit Jumat, 26 Januari 2024 <span class="mx-2">
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid img-thumbnail rounded w-100 h-100" src="{{asset('gambar/berita1.jpeg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <p class="mb-4">Bencana longsor yang terjadi di Kp. Cibatu Hilir Desa Sekarwangi Kec. Cibadak Kab. Sukabumi mengakibatkan total 103 KK/332 jiwa terdampak. Bencana tersebut terjadi pada Rabu (24/01/24) pkl 06.30 WIB.</p>
                <p class="mb-4">Mendapati laporan tersebut, Dinsos Jabar melalui bidang Linjamsos mengirimkan tim ke lokasi untuk penanganan bencana. Tim sebelumnya berkoordinasi untuk pengiriman bantuan logistik, terkhusus dengan Dinsos Kab. Sukabumi, agar logistik APBD Jabar yang telah dikirimkan sebagai bufferstock dapat disalurkan terlebih dahulu kepada korban terdampak.</p>
                <p class="mb-4">Tim berangkat pada Kamis (25/01/24) dengan mengirimkan bantuan logistik yang terdiri dari logistik APBD dan APBN. Logistik APBD yang dikirimkan berupa logistik permakanan dan logistik pengungsian dengan total nilai Rp28.372.850,-. Sementara logistik APBN yang disalurkan terdiri atas permakanan, sandang, dan pengungsian dengan total senilai Rp96.411.000,-. Total bantuan logistik yang disalurkan untuk penanganan bencana kali ini sebesar Rp124.783.850,-.</p>
                <p class="mb-4">Warga terdampak saat ini mengungsi di pengungsian yang dikelola bersama oleh Kementerian Sosial, Dinsos Jabar, Dinsos Kab. Sukabumi, serta BPBD Kab. Sukabumi.
                    Selain bantuan logistik, Dinsos Jabar juga mengirimkan Tim dari Satpel Griya Lansia Sukabumi untuk melakukan treatment psikososial kepada korban. Dinsos Jabar berharap bantuan logistik yang disalurkan dapat meringankan beban warga yang terdampak. [Ljs]</p>
            </div>

        </div>
    </div>

    @include('Template2.footer2')


    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    @include('Template2.script2')

</body>

</html>