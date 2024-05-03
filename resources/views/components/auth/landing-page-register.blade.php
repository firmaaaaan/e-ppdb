<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PPDB Online SD Sengon 03</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo2.png" rel="icon">
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
        <h1 class="text-light"><a href=""><img src="logo.jpg" alt=""><span> PPDB Online</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="{{ route('login')  }}">Login <i class="bi bi-box-arrow-in-right"></i></a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Selamat Datang Di Website PPDB Online</h1>
            <h2>SD Sengon 03 Tanjung-Brebes @if($periodes)
                <p>{{ $periodes->nama_periode }}</p>
            @else
                <p> - </p>
            @endif</h2>
            <div class="mb-2">
                Tanggal Pendaftaran : @if ($periodes) {{ \Carbon\Carbon::parse($periodes->tgl_mulai)->format('d F Y') }} - {{ \Carbon\Carbon::parse($periodes->tgl_berakhir)->format('d F Y') }}

                @endif
            </div>
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
                        @if ($periodeAktif)
                        <form action="{{ route('landing.registerPost') }}" method="POST" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Periode Pendaftaran</label>
                                <input type="hidden" name="periode_id" value="{{ $periodes->id }}" class="form-control" id="exampleInputName1" >
                            </div>
                            <div class="form-group">
                                <div class="row mt-2">
                                    <div class="col-md-6 mt-2">
                                        <label class="labels">Username</label>
                                        <input type="text" name="username" class="form-control @error('username') is-invalid
                                        @enderror" placeholder="Username" value="{{ old('username') }}">
                                        @error('username')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <label class="labels">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control @error('name') is-invalid
                                        @enderror" value="{{ old('name') }}" placeholder="Nama lengkap">
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No Handphone*</label>
                                <input name="no_hp" type="number" class="form-control @error('no_hp') is-invalid
                                @enderror" id="" placeholder="No HP Whatsapp" value="{{ old('no_hp') }}">
                                @error('no_hp')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_hp">Email*</label>
                                <input name="email" type="email" class="form-control" id="" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir*</label>
                                <input name="tempat_lahir" type="text" class="form-control @error('tempat_lahir') is-invalid
                                @enderror" id="" value="{{ old('tempat_lahir') }}" placeholder="Tempat Lahir">
                                @error('tempat_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir*</label>
                                <input name="tanggal_lahir" type="date" class="form-control @error('tanggal_lahir') is-invalid
                                @enderror" id="" value="{{ old('tanggal_lahir') }}" placeholder="Tanggal Lahir">
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <select name="jenisKelamin" class="form-control"></div>
                                    <option value="">--Jenis Kelamin--</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword4">Password* (Mohon Diingat)</label>
                                <input name="password" type="password" class="form-control @error('password')
                                @enderror" id="exampleInputPassword4" value="{{ old('password') }}" placeholder="Password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success mr-2">Simpan Data</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        @else
                        <h5>Mohon Maaf Pendaftaran ditutup</h5>
                        @endif
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
                            <h5 class="card-title mb-0">Pendaftar</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h1 class="d-flex align-items-center mb-0">
                                    {{ $jumlahSiswaBaru }}
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="card l-bg-blue-dark">
                    <div class="card-statistic-3 p-4">
                        <div class="card-icon card-icon-large"></div>
                        <div class="mb-4">
                            <h5 class="card-title mb-0">Sisa Kuota Pendaftar</h5>
                        </div>
                        <div class="row align-items-center mb-2 d-flex">
                            <div class="col-8">
                                <h1 class="d-flex align-items-center mb-0">
                                    {{ $sisaKuota }}
                                </h1>
                            </div>
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
               Alamat : Sengon Wetan, Sengon, Kec. Tj., Kabupaten Brebes, Jawa Tengah 52254 <br>
                <strong>HP :</strong> 0852-0456-3827<br>
                <strong>Email :</strong> ----- <br>
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1014035.5885955846!2d107.86293492136284!3d-6.8814368456060535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fa71424b0c075%3A0xec3bdd6ab24fc836!2sSDN%20Sengon%2003!5e0!3m2!1sen!2sid!4v1712218357990!5m2!1sen!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
