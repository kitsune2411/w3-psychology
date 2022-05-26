<!-- ======= Footer ======= -->
<footer id="footer" >

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Psychology</h3>
            <p>
              This website provides services and education about psychological and mental health problems.
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '#hero' }}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#about' }}">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#features' }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#team' }}">Team</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#pricing' }}">Pricing</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#consultation' }}">Consultation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#theraphy' }}">Theraphy</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ '/#mentoring' }}">Mentoring</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Make An Appoinment</h4>
            <p>Sett your own consultation schedule</p>
            <!-- <button href="booking.html" class="btn-get-started scrollto">Booking Now</button> -->

            <!-- <button type="button" class="btn btn-primary">Book Now</button> -->
            <a type="button" class="btn btn-outline-primary"href="{{ route('make_appointment') }}">Book Now</a>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Psychology</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bikin-free-simple-landing-page-template/ -->

        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('/ui-user/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('/ui-user/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('/ui-user/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('/ui-user/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('/ui-user/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('/ui-user/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('/ui-user/assets/js/main.js') }}"></script>
