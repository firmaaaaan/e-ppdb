<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB Online SMP DATA</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.jpg" rel="icon">
  <link href="lp/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

  <!-- Vendor CSS Files -->
  <link href="lp/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lp/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="lp/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="lp/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="lp/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lp/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Template Main CSS File -->
  <link href="lp/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Scaffold - v2.0.0
  * Template URL: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href=""><img src="logo.jpg" alt=""><span>PPDB Online</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="">Daftar</a></li>
          <li><a href="{{ route('login')  }}">Login <i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/groups/1499446273665034/?ref=bookmarks" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Selamat Datang Di Website PPDB Online</h1>
            <h2>SD Sengon 03 Tanjung-Brebes Tahun Pelajaran 2020/2021</h2>
            <a class="btn-get-started scrollto">Daftar Sekarang</a>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/daftar.png" class="img-fluid" alt="">
        </div>
    </div>
    </div>

    </section><!-- End Hero -->

    <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    <div class="container">

        <div class="row">
            <div class="col-lg-6" data-aos="zoom-in">
                <h1 class="card-title mb-2" style="text-align: center">Formulir Pendaftaran</h1>
                <div class="grid-margin stretch-card">
                    <div class="card">
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block mb-2">
                            <p><i class="bi bi-lightbulb-fill"></i><strong> Pemberitahuan! </strong>{{ $message }}</p>
                        </div>
                        @endif
                        <form action="{{ route('landing.registerPost') }}" method="POST" class="forms-sample">
                            @csrf
                        {{-- <div class="form-group">
                            <label for="exampleInputName1">Periode Pendaftaran</label>
                            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div> --}}
                        <div class="form-group">
                            <div class="row mt-2">
                                <div class="col-md-6 mt-2">
                                    <label class="labels">Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Username" value="">
                                </div>
                                <div class="col-md-6 mt-2">
                                    <label class="labels">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" value="" placeholder="Nama lengkap">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No Handphone*</label>
                            <input name="no_hp" type="number" class="form-control" id="" placeholder="No HP Whatsapp">
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Email*</label>
                            <input name="email" type="email" class="form-control" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir*</label>
                            <input name="tempat_lahir" type="text" class="form-control" id="" placeholder="Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir*</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="" placeholder="Tanggal Lahir">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword4">Password* (Mohon Diingat)</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-success mr-2">Simpan Data</button>
                        <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
            <h3>Pendaftaran Online</h3>
            <p class="font-italic">
                Untuk memudahkan calon peserta didik baru dalam melakukan pendaftaran, maka kami meyediakan pelayanan pendaftaran peserta didik baru mode online atau daring dengan alur pendaftaran sebagai berikut :
            </p>
            <ul>
                <li><i class="icofont-check-circled"></i> Mengisi formulir pendaftaran online</li>
                <li><i class="icofont-check-circled"></i> Setelah melakukan pengisian formulir online dan kirim data, Screenshot halaman konfirmasi sebagai bukti pendaftaran</li>
                <li><i class="icofont-check-circled"></i> Menerima pengumuman</li>
                <li><i class="icofont-check-circled"></i> Melakukan daftar ulang</li>
                <li><i class="icofont-check-circled"></i> Masuk kegiatan belajar mengajar</li>
            </ul>
            <p>
                Selain pendaftaran mode online atau daring, kami juga masih melayani pendaftaran offline/luring dengan datang langsung ke sekretariat pendaftaran (Kantor SD Sengon 03 Tanjung-Brebes).
            </p>
            </div>
        </div>
        </div>
    </div>

</section><!-- End About Section -->
    <div class="container mt-5">
        <h2 style="text-align: center"> <b> Informasi Pendaftaran </b></h2>
        <div class="row ">
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-cherry">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">New Orders</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    3,243
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>12.5% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Customers</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    15.07k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>9.23% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-green-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Ticket Resolved</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    578
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>10% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-orange-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Revenue Today</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h2 class="d-flex align-items-center mb-0">
                                    $11.61k
                                </h2>
                            </div>
                            <div class="col-4 text-right">
                                <span>2.5% <i class="fa fa-arrow-up"></i></span>
                            </div>
                        </div>
                        <div class="progress mt-1 " data-height="8" style="height: 8px;">
                            <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-6">
            <div class="footer-info">
              <h3>SD Sengon 03 Tanjung-Brebes</h3>
              <p>
               Alamat : Jl. KH. Ashary Pabeyan Tambakboyo Tuban <br>
                <strong>HP :</strong> 0852-0456-3827<br>
                <strong>Email :</strong> s.daruttauhid@yahoo.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6662.81052201679!2d111.83356195314701!3d-6.8025630204564544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x209ccb1c8695a44e!2sSMP%20Darut%20Tauhid%20Tambakboyo!5e0!3m2!1sid!2sid!4v1585570723554!5m2!1sid!2sid" width="370" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 250px;" allowfullscreen></iframe> -->
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2024</span></strong>. SD Sengon 03 Tanjung-Brebes
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/scaffold-bootstrap-metro-style-template/ -->
        Developed by <a href="https://bootstrapmade.com/">?</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="lp/vendor/jquery/jquery.min.js"></script>
  <script src="lp/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lp/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="lp/vendor/php-email-form/validate.js"></script>
  <script src="lp/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="lp/vendor/venobox/venobox.min.js"></script>
  <script src="lp/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="lp/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="lp/js/main.js"></script>

</body>

</html>
