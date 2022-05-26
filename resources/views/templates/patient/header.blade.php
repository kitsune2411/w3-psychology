<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ route('user.home') }}">Psychology</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="./ui-user/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        @auth('web')
        <ul>
            <li><a class="nav-link scrollto active" href="{{ '/#hero' }}">Home</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#about' }}">About Us</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#features' }}">Services</a></li>
            <li><a class="nav-link scrollto" href="{{ '/appointment' }}">Schedule</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#team' }}">Team</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#pricing' }}">Pricing</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#contact' }}">Contact</a></li>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- {{ Auth::guard('web')->user()->name }} -->
                    <img style="width: 30px;" class="img-profile rounded-circle"
                        src="{{ url('/ui-user/assets/img/undraw_profile.svg') }}">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    {{-- <a class="dropdown-item" href="#">
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        {{-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --}}
                        Logout
                    </a>
                </div>
            </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>

        @else
        <ul>
          <li><a class="nav-link scrollto active" href="{{ '/#hero' }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ '/#about' }}">About Us</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#features' }}">Services</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#team' }}">Team</a></li>
            <li><a class="nav-link scrollto" href="{{ '/#pricing' }}">Pricing</a></li>
            <!-- <li class="dropdown"><a href="#services"><span>Blog</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
              <li><a href="#">Mental Health</a></li>
              <li class="dropdown"><a href="#"><span>Mental Illnes</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                    <li><a href="#">Schizoprenia</a></li>
                    <li><a href="#">Anxiety</a></li>
                    <li><a href="#">Personality Disorder</a></li>
                    <li><a href="#">Stress</a></li>
                    <li><a href="#">Bipolar</a></li>
                </ul>
            </li>
            <li><a href="#">Trauma</a></li>
            <li><a href="#">Pasca Trauma</a></li>
            <li><a href="#">Self Growth</a></li>
        </ul>
    </li> -->
            <li><a class="nav-link scrollto" href="{{ '/#contact' }}">Contact</a></li>
             <li><a class="getstarted scrollto" href="{{ route('login') }}">Sign In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
        @endauth
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
