<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Collaundry</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('style/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('style/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/css/price.css') }}" rel="stylesheet">
    <link href="{{ asset('style/assets/css/order.css') }}" rel="stylesheet">
<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="fixed-top d-flex align-items-center ">
      <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope-fill"></i><a>Info@Collaundry.com</a>
          <i class="bi bi-phone-fill phone-icon"></i><a>0822 7777 6666</a>
        </div>
      </div>
    </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center justify-content-between">

      <a class="logo">
          <a href="{{ route('main')}}">Collaundry</a>
      </a>

      <!-- .navbar -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ route('main')}}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('main')}}#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="{{ route('servis') }}">Promo</a></li>
          <li><a class="nav-link scrollto" href="{{ route('harga') }}">Harga</a></li>
          <li><a class="nav-link scrollto" href="{{ route('main')}}#contact">Contact</a></li>
          <li><a class="nav-link svrollto" href="{{ route('pemesanan') }}">Pemesanan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->


    @yield('konten')


    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
          <div class="container">
          <div class="row">
              <div class="col-lg-4 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{route('main')}}">Home</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{route('main')}}#about">Tentang</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="{{route('servis')}}">Service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                  <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
              </ul>
              </div>
  
              <div class="col-lg-4 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                  Surabaya<br><br>
                  <strong>Phone:</strong> 0822 7777 6666<br>
                  <strong>Email:</strong> info@Collaundry.com<br>
              </p>
              </div>
              <div class="col-lg-4 col-md-6 footer-info">
              <h4>COLLAUNDRY</h4>
              <p>Jasa Laundry yang diutamakan untuk Mahasiswa daerah Surabaya dan sekitarnya dengan pelayanan yang cepat</p>
              <div class="social-links mt-3">
                  <a href="#" class="Twitter"><i class="bx bxl-twitter"></i></a>
                  <a href="#" class="Facebook"><i class="bx bxl-facebook"></i></a>
                  <a href="#" class="Instagram"><i class="bx bxl-instagram"></i></a>
                  <a href="#" class="Whatsapp"><i class="bx bxl-whatsapp"></i></a>
                  <a href="#" class="Telegram"><i class="bx bxl-telegram"></i></a>
                  <a href="#" class="Email"><i class="bx bxl-gmail"></i></a>
              </div>
              </div>
          </div>
          </div>
      </div>
  
      <div class="container">
          <div class="copyright">
          &copy; Copyright <strong><span>Collaundry</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
          Designed by <a href="#">Kelompok 6</a>
          </div>
      </div>
      </footer><!-- End Footer -->
      <div id="preloader"></div>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>
  
  </body>
  </html>
  
</body>
</html>
