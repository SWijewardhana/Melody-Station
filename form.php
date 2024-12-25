<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rent - PhotoFolio Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Cardo:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: PhotoFolio
  * Template URL: https://bootstrapmade.com/photofolio-bootstrap-photography-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="contact-page">

  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="assets/img/OIP1.jpg" alt="Music Logo" class="logo-image" />
    <h1 class="sitename">Melody Station</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php">Home<br></a></li>
          <li><a href="about.php">About</a></li>
          <li class="dropdown"><a href="gallery.php"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="gallery.php" class="active">Guitar</a></li>
              <li><a href="gallery.php" class="active">Violin</a></li>
              <li><a href="gallery.php" class="active">Keyboard</a></li>
              <li><a href="gallery.php" class="active">Drum Kit</a></li>
              <li><a href="gallery.php" class="active">Flute</a></li>
              <li><a href="gallery.php" class="active">Saxophone</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.php">Services</a></li>
          <li><a href="contact.php" class="active">Rent</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="login.php" class="signin"><i class="bi bi-person-circle"></i></a>
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 style="color: #aa8def;">Rent from Melody Station</h1>
              

              
              <p class="mb-0"  style="font-family: 'Arial, sans-serif'; font-size: 20px;" >Discover the convenience and affordability of renting from Melody Station. Whether you're a beginner or a seasoned musician, we offer a wide selection of high quality instruments</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>

            <li class="current">Rent</li>
            <li class="current">Guitar</li>

          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="info-wrap" data-aos="fade-up" data-aos-delay="200">
          <div class="row gy-5">

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
               
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
                
                
              </div>
            </div><!-- End Info Item -->

            <div class="col-lg-4">
              <div class="info-item d-flex align-items-center">
               
                
              </div>
            </div><!-- End Info Item -->

          </div>
        </div>

        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="300">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
            </div>

            <div class="col-md-6 ">
              <input type="text" class="form-control" name="phoneNo" placeholder="Your Phone Number" required="">
            </div>

            <div class="col-md-6 ">
              <input type="text" class="form-control" name="NIC" placeholder="Your NIC Number" required="">
            </div>



            

            <div class="col-md-6">
              <input type="text" class="form-control" name="DateOfPickup" placeholder=" Select Date of Pickup : " readonly>
          </div>
          

            <div class="col-md-6 ">
              <input type="date" class="form-control" name="DateOfPickup" id="DateOfPickup" required="">
            </div>



            <div class="col-md-6 ">
              <input type="text" class="form-control" name="DateOfReturn"  placeholder=" Select Date of Return :" readonly>
            </div>

            <div class="col-md-6 ">
              <input type="date" class="form-control" name="DateOfReturn"  id="DateOfReturn" required="">
            </div>


            <div class="col-md-12">
              <input type="text" class="form-control" name="price" id="price" placeholder="Rental Price" readonly>
            </div>

            <script>
              const pickupDateInput = document.getElementById('DateOfPickup');
              const returnDateInput = document.getElementById('DateOfReturn');
              const priceInput = document.getElementById('price');
          
              // Function to calculate price
              function calculatePrice() {
                  const pickupDate = new Date(pickupDateInput.value);
                  const returnDate = new Date(returnDateInput.value);
          
                  if (pickupDate && returnDate && returnDate >= pickupDate) {
                      const dayDifference = Math.ceil((returnDate - pickupDate) / (1000 * 60 * 60 * 24)) + 1; // Including the pickup day
                      const price = dayDifference * 600; // Rs. 600 per day
                      priceInput.value = `Rs. ${price}`;
                  } else {
                      priceInput.value = "Invalid dates selected";
                  }
              }
          
              // Add event listeners to the date inputs
              pickupDateInput.addEventListener('change', calculatePrice);
              returnDateInput.addEventListener('change', calculatePrice);
          </script>
           




           

          <div class="col-md-12">
            <input type="file" class="form-control" name="slip" id="slip" placeholder="Upload Your Slip Here" accept="image/*">
        </div>
        





            <div class="col-md-12">
              <textarea class="form-control" name="note" rows="4" placeholder="Note: The price of renting a guitar for 24 hours is Rs. 600. You can either hand over the amount when you pick up your guitar or upload your payment slip" readonly></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit" style="background: linear-gradient(to right, rgb(144, 166, 245), rgb(219, 138, 247), rgb(148, 161, 241)); color: white; border: none; padding: 10px 20px; border-radius: 5px;">
                Submit
            </button>
            
             
            </div>

          </div>


        </form><!-- End Contact Form -->

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">MelodyStation</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="social-links d-flex justify-content-center">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=>MelodyStation</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="line"></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>