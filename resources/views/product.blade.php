<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Advertsing Compaign</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
      </div>

      <div class="cta d-none d-md-flex align-items-center">
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
      </div>

      <nav id="navbar" class="navbar">
        <ul>


    </div>
  </header><!-- End Header -->


  <!-- ======= Pricing Section ======= -->
  <section id="pricing" class="pricing">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-up">Pricing</h2>
        <h1><strong><b>No hidden charges !Choose<br>

              your best plan.</h1></strong></b>
        <p data-aos="fade-up">samsaa was a travelling sales man and above it there hunge a picture <br> that he 

          had recently cut out of an illustrated magazine valuealb</p>
      </div>

      <div class="row">

        <div class="col-lg-4 col-md-6" data-aos="fade-up">
          <div class="box">

            <h3>Startup Plan</h3>

            <img src="assets/img/diamond.png"></a>
            <h4><sup>$</sup>139</h4>
            <p class="per-month">PER MONTH</p>
            <ul>
              <li> Finance Business & Analysing </li>
              <li>Management & Marketing</li>
              <li>1 Top 10 Ranking Guarantee</li>
              <li>24/7 Customer Support</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-grey">Select the plan</a>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
          <div class="box">
            <span class="advanced">Most Popular</span>

            <h3>Proffessional Plan</h3>
            <img src="assets/img/alarm.png"></a>

            <h4><sup>$</sup>239</h4>
            <p class="per-month">PER MONTH</p>

            <ul>
              <li> Finance Business & Analysing </li>
              <li>Management & Marketing</li>
              <li>1 Top 10 Ranking Guarantee</li>
              <li class="na">24/7 Customer Support</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-buy">Select the plan</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
          <div class="box">
            <h3>Premium Plan</h3>
            <img src="assets/img/coffee.png"></a>

            <h4><sup>$</sup>339</h4>
            <p class="per-month">PER MONTH</p>

            <ul>
              <li> Finance Business & Analysing </li>
              <li>Management & Marketing</li>
              <li>1 Top 10 Ranking Guarantee</li>
              <li class="na">24/7 Customer Support</li>
            </ul>
            <div class="btn-wrap">
              <a href="#" class="btn-grey">Select the plan</a>
            </div>
          </div>
        </div>

      </div>

      <div class="blue-circle"></div>

    </div>
  </section><!-- End Pricing Section -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

      <div class="clients-slider swiper">
        <div class="align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>

        </div>

      </div>

    </div>
  </section><!-- End Clients Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container">

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative"
          data-aos="fade-right">
          <img src="assets/img/people.png" class="img-fluid" alt="">

        </div>

        <div
          class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h4 data-aos="fade-up">Testimonials</h4>
          <h3 data-aos="fade-up">Check what's our client say about us!</h3>
          <p data-aos="fade-up">"Magazine and housed in a nice ,gilded frame.it showed a <br>
            lady fitted out with a fur hat and fur boa who sat upright,<br>
            raising a heavy fur muff that covered the whole of her lower<br>
            arm towards the viewer.Gregor then turned to look out the <br>window at the dull weather."</p>

          <h4 class="title"><b>Michel Hone</b></h4>
          <h5>Happy client,Jordan United State</h5>
          <div class="orange-container">
            <span class="long-orange"></span>
            <span class="small-orange"></span>
            <span class="small-orange"></span>
          </div>
        </div>

        <div>

        </div>




      </div>
    </div>

    </div>
  </section><!-- End About Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="white-circle"></div>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Seoul</h3>
            <p>
              5443 Nagaline Lane,South Dasing <br>
              city,CA,United Stated<br>
            <div class="social">
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-twitter"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
              <a href=""><i class="bi bi-phone"></i></a>
              <a href=""><i class="bi bi-envelope"></i></a>

            </div><br><br>

            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Company</h4>
            <ul class="inline-block">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Services</a></li>
              <li><a href="#">Contact Us</a></li>
              <li><a href="#">Meet team</a></li>
            </ul>

            <ul class="inline-block left-margin">
              <li><a href="#">Provaci Policy</a></li>
              <li><a href="#">Testimonials</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">FAQ</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Services</h4>
            <ul>
              <li><a href="#">SEO Optimization</a></li>
              <li><a href="#">Social Media Marketing</a></li>
              <li><a href="#">Link Building</a></li>
              <li><a href="#">Reports &Analytics</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>You will be notified when something<br>new will be appear</p>
            <form action="" method="post">
              <a href=""><i class="bi bi-envelope"></i></a>

              <input type="email" name="email" placeholder="Email Address *">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="last-footer">
      <div class="container d-lg-flex py-4 inline-block left-footer">

        <div class="me-lg-auto text-center text-lg-start">
          <div class="copyright">
            Copyright &copy; 2020 Seoul.<strong><span></span></strong>. All Rights Reserved
          </div>
        </div>
      </div>
      <div class="container d-lg-flex py-4 inline-block right-footer">

        <div class="me-lg-auto text-center text-lg-start">
          <div class="copyright">
            Privacy & Policy -Terms-About Us -FAQ<strong><span></span></strong>

          </div>
        </div>
      </div>
    </div>


  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!--  Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>