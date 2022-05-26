<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('/login-signup/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ url('/login-signup/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('/login-signup/css/bootstrap.min.css') }}">

    <!-- Style -->
    <link rel="stylesheet" href="{{ url('/login-signup/css/style.css') }}">

    <title>Login</title>
  </head>
  <body>

    @if(Session::has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ Session::get('error') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    @endif

    @if (Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="{{ url('/login-signup/images/Computer login-rafiki.png') }}" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Login with your  data that you entered  during
                your registration.</p>
            </div>
            <form action="{{ url('/login')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="form-group first">
                <label for="username">E-mail</label>
                <input type="text" class="form-control" id="username" name="email" required>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>

              </div>

              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" name="remember" />
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="forget-password" class="forgot-pass">Forgot Password</a></span>
              </div>

              <button type="submit"class="btn btn-block btn-primary">Log In</button>

              <span class="d-block my-4 text-center text-muted"><a href="{{ url('/register')}}" class="forgot-pass">Don't have an account? Sign Up</a></span>
              <hr/>
              <span class="d-block mt-2 text-left text-muted"><a href="{{ url('/psychologist/login')}}" class="forgot-pass">Login as psychologist</a></span>
              <span class="d-block text-right mt-n4 text-muted"><a href="{{ url('/staff/login')}}" class="forgot-pass">Login as staff</a></span>


            </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <script src="{{ url('/login-signup/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ url('/login-signup/js/popper.min.js') }}"></script>
  <script src="{{ url('/login-signup/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('/login-signup/js/main.js') }}"></script>
  </body>
</html>
