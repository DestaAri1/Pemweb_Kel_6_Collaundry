<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Home')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown">Selamat datang di <span>Collaundry</span></h2>
          <p class="animate__animated animate__fadeInUp">Merupakan website penyedia jasa laundry untuk area Surabaya yang mengedepankan untuk Mahasiswa di sekitar kota Surabaya, namun juga melayani non-Mahasiswa</p>
          <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate_animated animate_fadeInDown">Selamat datang di <span>Collaundry</span></h2>
          <p class="animate_animated animate_fadeInUp">Kami disini menerima untuk pengambilan cucian ke rumah pemesan, ataupun pemesan secara langsung datang ke tempat kami</p>
          <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read More</a>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate_animated animate_fadeInDown">Selamat datang di <span>Collaundry</span></h2>
          <p class="animate_animated animate_fadeInUp">Moto kami yaitu "Kenyamanan dan Kepuasan kalian adalah penyemangat kami"</p>
          <a href="#about" class="btn-get-started animate_animated animate_fadeInUp scrollto">Read More</a>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Icon Boxes Section ======= -->
    <section id="icon-boxes" class="icon-boxes">
      <div class="container">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-phone-call'></i></i></div>
              <h4 class="title"><a href="">Panggilan Cepat</a></h4>
              <p class="description">Dengan Panggilan dan respon yang cepat dalam melayani pelanggan demi membuat senang para pelanggan</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-wallet'></i></i></div>
              <h4 class="title"><a href="">Hemat Uang</a></h4>
              <p class="description">Dengan harga yang ramah untuk anak Kos ditambah seringnya promo</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-t-shirt'></i></div>
              <h4 class="title"><a href="">Hasil Terbaik</a></h4>
              <p class="description">Hasil yang memuaskan dengan kualitas atas membuat pakaian tetap terlihat seperti baru</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-time'></i></div>
              <h4 class="title"><a href="">Tepat Waktu</a></h4>
              <p class="description">Singkatnya pengerjaan membuat Konsumen akan lebih senang dan tenang tanpa menunggu waktu yang tidak pasti</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Icon Boxes Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>TENTANG KAMI</h2>
          <p>Collaundry merupakan pelayanan Laundry yang menawarkan jasa laundry dan mengedepankan untuk para Mahasiswa sekitar area kota Surabaya</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Hal yang membuat Kami menjadi jasa Laundry yang tepercaya
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i>Pelayanan yang cepat</li>
              <li><i class="ri-check-double-line"></i>Hasil yang memuaskan</li>
              <li><i class="ri-check-double-line"></i>Harga yang sangat ramah dikantong</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Untuk mengetahui tentang kami lebih lanjut dapat mengklik tombol dibawah ini
            </p>
            <a href="#" class="btn-learn-more">Pelajari Lebih lanjut</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Contact Us</h2>
          </div>

          <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">

            <div class="col-lg-5">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Surabaya</p>
                </div>
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@Collaundry.com</p>
                </div>
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>0822 7777 6666</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                @if ($message = Session::get('error'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
              <form action="{{ route('add_pesan') }}" method="POST">
                  @csrf
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="pesan" id="pesan" rows="5" placeholder="Pesan" required></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Kirim</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section><!-- End Contact Section -->
    </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h4>Our Newsletter</h4>
            <p>Jika ingin mendapatkan Informasi terupdate seputar Collaundry</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
