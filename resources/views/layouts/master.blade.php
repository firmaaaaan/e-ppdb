<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title') - SD Sengon 03</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('logo.jpg') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <!-- *************
			************ CSS Files *************
		************* -->
    <!-- Icomoon Font Icons css -->
    <link rel="stylesheet" href="{{ asset('assets') }}/fonts/icomoon/style.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/main.min.css" />

    <!-- *************
			************ Vendor Css Files *************
		************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/overlay-scroll/OverlayScrollbars.min.css" />
  </head>

  <body>

    <!-- Page wrapper start -->
    <div class="page-wrapper">

      <!-- App container starts -->
      <div class="app-container">

        <!-- App header starts -->
        <div class="app-header d-flex align-items-center">

          <!-- Container starts -->
          <div class="container">

            <!-- Row starts -->
            <div class="row">
              <div class="col-md-3 col-2">

                <!-- App brand starts -->
                <div class="app-brand">
                  <a href="index.html" class="d-lg-block d-none">
                    <img src="{{ asset('logo.jpg') }}" class="logo" alt="Bootstrap Gallery" />
                  </a>
                  <a href="index.html" class="d-lg-none d-md-block">
                    <img src="{{ asset('logo.jpg') }}" class="logo" alt="Bootstrap Gallery" />
                  </a>
                </div>
                <!-- App brand ends -->

              </div>

              <div class="col-md-9 col-10">
                <!-- App header actions start -->
                @include('partials.header')
                <!-- App header actions end -->

              </div>
            </div>
            <!-- Row ends -->

          </div>
          <!-- Container ends -->

        </div>
        <!-- App header ends -->

        <!-- App navbar starts -->
        @include('partials.navbar')
        <!-- App Navbar ends -->

        <!-- App body starts -->
        <div class="app-body">

          <!-- Container starts -->
          <div class="container">

            <!-- Row start -->
            <div class="row">
              <div class="col-12 col-xl-6">

                <!-- Breadcrumb start -->
                <ol class="breadcrumb mb-3">
                  <li class="breadcrumb-item">
                    <i class="icon-house_siding lh-1"></i>
                    <a href="index.html" class="text-decoration-none">Home</a>
                  </li>
                  <li class="breadcrumb-item">@yield('slide')</li>
                </ol>
                <!-- Breadcrumb end -->
              </div>
            </div>
            <!-- Row end -->

            @yield('content')

          </div>
          <!-- Container ends -->

        </div>
        <!-- App body ends -->

        <!-- App footer start -->
        @include('partials.footer')
        <!-- App footer end -->

      </div>
      <!-- App container ends -->

    </div>
    <!-- Page wrapper end -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('assets') }}/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('assets') }}/vendor/apex/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/ticketsData.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/avgTimeData.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/liveCallsData.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/agentsLiveData.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/ticketsPriorityData.js"></script>
    <script src="{{ asset('assets') }}/vendor/apex/custom/home/newClosedData.js"></script>

    <!-- Rating -->
    <script src="{{ asset('assets') }}/vendor/rating/raty.js"></script>
    <script src="{{ asset('assets') }}/vendor/rating/raty-custom.js"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('assets') }}/js/custom.js"></script>
  </body>

</html>
