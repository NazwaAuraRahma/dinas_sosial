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
                    <h1 class="display-3 text-white animated slideInDown">Visi & Misi</h1>

                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('gambar/visi.jpg')}}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Visi dan Misi kami</h6>
                    <h1 class="mb-4">Visi & Misi Dinas Sosial Jawa Barat</h1>
                    <h3>Visi :</h3>
                    <p class="mb-4">Terwujudnya Jawa Barat Juara Lahir Batin Dengan Inovasi dan Kolaborasi</p>
                    <h3>Misi :</h3>
                    <ol class="mb-4">
                        <li>Membentuk manusia pancasila yang bertaqwa</li>
                        <li>Melahirkan manusia yang berbudaya, berkualitas, bahagia dan produktif melalui peningkatan pelayanan publik yang inovatif</li>
                        <li>Mempercepat pertumbuhan dan pemerataan pembangunan berbasis lingkungan dan tata ruang yang bekelanjutan melalui peningkatan konektivitas wilayah dan penataan daerah</li>
                        <li>Meningkatkan produktivitas dan daya saing ekonomi umat yang sejahtera dan adil melalui pemanfaatan teknologi digital dan kolaborasi dengan pusat-pusat inovasi serta pelaku pembangunan</li>
                        <li>Mewujudkan tata kelola pemerintahan yang inovatif dan kepemimpinan yang kolaboratif antara pemerintahan pusat, provinsi, dan kabupaten/kota</li>
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