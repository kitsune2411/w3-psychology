@extends('templates.patient.layout-patient')

@section('content')

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="d-flex align-items-center">

    <div class="container d-flex flex-column align-items-center justify-content-center" data-aos="fade-up">
        @auth('web')
            <h1>Hello, {{ Auth::guard('web')->user()->name }}</h1>
        @else
            <h1>What's Wrong With Me?</h1>
        @endauth

      <h2>Know Your Psychological Condition Through Counseling </h2><h2> With A Trained
        Psychologist And Mentor And Know Your Problems
        </h2>
        @auth('web')
            <a href="{{ route('make_appointment') }}" class="btn-get-started scrollto">Make Appointment</a>
        @else
            <a href="{{ '/#about' }}" class="btn-get-started scrollto">Get Started</a>
        @endauth

      <img src="{{ url('ui-user/assets/img/hero-img.png') }}" class="img-fluid hero-img" alt="" data-aos="zoom-in" data-aos-delay="150">
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>Why do we use it?</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
              </p>
              <a href="#features" class="about-btn" >About us <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>

          <div class="col-xl-7 align-items-stretch" data-aos="fade-left">
            <div class="float-end me-5" >
              <img src="{{ url('ui-user/assets/img/about.png') }}" alt="..." height="400px">
            </div>
          </div>

           <!-- <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex justify-content-end">
              <div class="row">
                <div class="col-md-5 justify-content-end icon-box" data-aos="fade-up" data-aos-delay="100">


                  <img src="ui-user/assets/img/about.png" class="img-fluid float-end d-block" alt="" > -->
                  <!--
                    <i class="bx bx-receipt"></i>
                  <h4>Corporis voluptates sit</h4>
                  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Ullamco laboris nisi</h4>
                  <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                  <i class="bx bx-images"></i>
                  <h4>Labore consequatur</h4>
                  <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                  <i class="bx bx-shield"></i>
                  <h4>Beatae veritatis</h4>
                  <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
                </div>
              </div> -->
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features" data-aos="fade-up">
      <div class="container">

        <div class="section-title">
          <h2>Our Services</h2>
          <p>What We Can Help.</p>
        </div>

        <section id="consultation">
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ url('ui-user/assets/img/features-1.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4" data-aos="fade-left" data-aos-delay="100">
            <h3>Consultation</h3>
            <p class="fst-italic">
              Many problems? Don't be confused!  Tell & find out the
solution with a trained psychologist or mentor.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Handle by Profesional trained psychologist or mentor.</li>
              <li><i class="bi bi-check"></i> Flexible Time that you can choose.</li>
              <li><i class="bi bi-check"></i> With Many Platform that you can use for Consultation</li>
            </ul>
          </div>
        </div>
        </section>

        <section id="theraphy">
        <div class="row content">
          <div class="col-md-5 order-1 order-md-2" data-aos="fade-left">
            <img src="{{ url('ui-user/assets/img/features-2.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1" data-aos="fade-right">
            <h3>Theraphy</h3>
            <p class="fst-italic">
              Have a trauma with the past & have a hard time
dealing with it? Do not be afraid! get to know & face
it with our mentors and psychologists.
            </p>

            <ul>
              <li><i class="bi bi-check"></i> Consultation</li>
              <li><i class="bi bi-check"></i> Diagnosis</li>
              <li><i class="bi bi-check"></i> Theraphy</li>
            </ul>
          </div>
        </div>

        <section id="mentoring">
        <div class="row content">
          <div class="col-md-5" data-aos="fade-right">
            <img src="{{ url('ui-user/assets/img/features-3.png') }}" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5" data-aos="fade-left">
            <h3>Mentoring</h3>
            <p>Have an Overthinking problem? Worry? Managing Emotions
              & Not Knowing Your Self? Just consult! You will be mentored
              by experienced mentors.</p>
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum
              </p>
          </div>
        </div>
        </section>


      </div>
    </section><!-- End Features Section -->

    <!-- ======= Steps Section =======
    <section id="steps" class="steps">
      <div class="container">

        <div class="row no-gutters" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section>
  -->
    <!-- End Steps Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Know Your Problem</h2>
          <p>Feel the symptoms like the illustration below? Immediately consult with our mentors and psychologists. For more information, you can do an initial consultation for FREE now!</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/blog/schizophrenia.jpg') }}" class="img-fluid"></img></div>

              <h4 class="title"><a href="">Schizoprenia</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/blog/personality_disorder.jpg') }}" class="img-fluid"></img></div>
              <h4 class="title"><a href="">Personality Disorder</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/blog/stress.jpg') }}" class="img-fluid"></img></div>
              <h4 class="title"><a href="">Stress</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/blog/anxiety.jpg') }}" class="img-fluid"></img></div>
              <h4 class="title"><a href="">Anxiety</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Testimonial from Our Patient and Comunity</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('ui-user/assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('ui-user/assets/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('ui-user/assets/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('ui-user/assets/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ url('ui-user/assets/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2> Our Team</h2>
          <p>Meet Our Profesional Psychologist and Mentor.</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ url('ui-user/assets/img/team/team-1.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Agung Kristiawan</h4>
                  <span>Psychologist & Mentor.</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <img src="{{ url('ui-user/assets/img/team/team-1.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mahayasa Wibawa</h4>
                  <span>Psychologist & Mentor.</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <img src="{{ url('ui-user/assets/img/team/team-2.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sri Wijayanti</h4>
                  <span>Psychologist & Mentor.</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <img src="{{ url('ui-user/assets/img/team/team-2.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Intan Septia</h4>
                  <span>Psychologist & Mentor.</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <img src="{{ url('ui-user/assets/img/team/team-1.png') }}" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Airlangga Nayotama</h4>
                  <span>Psychologist & Mentor.</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


<!-- Pricing 2 -->
    <section id="pricing" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Get a Package According to Your Problem, Before Choosing a Package, <br>You Can Do An Initial Consultation For FREE!</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/Consulting-rafiki (1).png') }}" class="img-fluid"></img></div>

              <h4 class="title" ><a href="" style="color: #07d5c0;">Mental Health Counseling</a></h4>
              <h5><sup>IDR</sup>500K<span> / session</span></h5>
              <p class="description">
                Counseling with a duration of 30 minutes (adjustable)
                <br>Given a diagnosis
                <br>Treated by psychologist
                <br>Provided assessment

            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/Messages-cuate.png') }}" class="img-fluid"></img></div>
              <h4 class="title" ><a href="" style="color: #0dcaf0;">Relationship Counseling</a></h4>
              <h5><sup>IDR</sup>550K<span> / session</span></h5>
              <p class="description">Counseling with a duration of 30 minutes (adjustable)
                <br>Given a diagnosis
                <br>Treated by psychologist
                <br>Provided assessment
              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/online-mentoring.png') }}" class="img-fluid"></img></div>
              <h4 class="title" ><a href="" style="color: #ff901c;">Online <br> Mentoring</a></h4>
              <h5><sup>IDR</sup>700K<span> / session</span></h5>
              <p class="description">
                Mentoring with a duration of 60 minutes (adjustable)
                <br>Given a worksheet
                <br>Handled by mentor
                <br>Provided technical direction

              </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><img src="{{ url('ui-user/assets/img/Webinarr.png') }}" class="img-fluid"></img></div>
              <h4 class="title" ><a href="" style="color: #6f42c1;">Online <br> Theraphy</a></h4>
              <h5><sup>IDR</sup>100K<span> / session</span></h5>
              <p class="description">
                Consultation with psychologist
                    <br>Given a diagnosis
                    <br>Provided assessment
                    <br>Medicine if needed
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Pricing Section =======



        <div class="section-title">
          <h2>Pricing</h2>
          <p>Get a Package According to Your Problem, Before Choosing a Package, <br>You Can Do An Initial Consultation For FREE!</p>
        </div>

        <section id="pricing" class="pricing">

          <div class="container" data-aos="fade-up">


            <div class="row gy-4" data-aos="fade-left">

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                <div class="box">
                  <h3 style="color: #07d5c0;">Mental Health Counseling</h3>
                  <h3><sup>IDR</sup>550K<span> / month</span></h3>
                  <img src="ui-user/assets/img/Consulting-rafiki (1).png" class="img-fluid" alt="">
                  <ul>
                    <li>Counseling with a duration of 30 minutes (adjustable)</li>
                    <li>Given a diagnosis</li>
                    <li>Treated by psychologist</li>
                    <li>Provided assessment or therapy if needed</li>
                  </ul>

                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="box">

                  <h3 style="color: #0dcaf0;">Relationship Counseling</h3>
                  <h3><sup>IDR</sup>500K<span> / month</span></h3>
                  <img src="ui-user/assets/img/Messages-cuate.png" class="img-fluid" alt="">
                  <ul>
                    <li>Counseling with a duration of 30 minutes (adjustable)</li>
                    <li>Given a diagnosis</li>
                    <li>Treated by psychologist</li>
                    <li>Provided assessment or therapy if needed</li>
                  </ul>

                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="box">
                  <h3 style="color: #ff901c;">Online <br> Mentoring</h3>
                  <h3><sup>IDR</sup>700K<span> / month</span></h3>
                  <img src="ui-user/assets/img/online-mentoring.png" class="img-fluid" alt="">
                  <ul>
                    <li>Mentoring with a duration of 60 minutes (adjustable)</li>
                    <li>Given a worksheet</li>
                    <li>Handled by mentor</li>
                    <li>Provided technical direction</li>

                  </ul>

                </div>
              </div>

              <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="box">
                  <h3 style="color: #6f42c1;">Online <br> Webinar</h3>
                  <h3><sup>IDR</sup>100K<span> / month</span></h3>
                  <img src="ui-user/assets/img/Webinarr.png" class="img-fluid" alt="">
                  <ul>
                    <li>Consultation with psychologist</li>
                    <li>Given a diagnosis</li>
                    <li>Provided assessment and therapy</li>
                    <li>Medicine if needed</li>

                  </ul>

                </div>
              </div>

            </div>

          </div>

        </section> -->

           <!-- End Pricing Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>For cooperation and other correspondence, please contact us by email. We do not have a physical office. For correspondence addresses, please contact us via email first.</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-cube-alt"></i>
                  <h3>Keep in Touch With Us</h3>
                  <p>Pyschology</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>Pyschology@gmail.com<br>pyscholog@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+62 123 456 78<br>+62 987 654 32</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0 pt-5" style="background-color: white">
            <form action="{{route('feedback')}}" method="post" role="form" class="">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <br>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Send Message</button>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
