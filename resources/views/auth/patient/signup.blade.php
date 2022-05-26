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

    <title>Sign Up</title>
  </head>
  <body>

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
            @foreach($errors->all() as $item)
                <li>
                    {{ $item }}
                </li>
            @endforeach
            {{-- <li>{{ Session::get('error')  }}</li> --}}
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="./login-signup/images/Mobile login-pana.png" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign Up</h3>
              <p class="mb-4">Get's Started.</p>
            </div>
            <form action="/register" method="post" enctype="multipart/form-data">
                 @csrf
              <div class="form-group first">
                <label for="username">Name</label>
                <input type="text" class="form-control" id="username" name="name" required>

              </div>
              <div class="form-group first">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" required>

              </div>
              <div class="form-group first">
                <label for="no_telp">Number Telephone</label>
                <input type="text" class="form-control" id="no_telp" name="phone_number" required>

              </div>
              <div class="form-group first ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>

              </div>
              <div class="form-group last mb-4">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>

              </div>

              {{-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>
              </div> --}}

              <input type="submit" value="Sign Up" class="btn btn-block btn-primary">

              <span class="d-block my-4 text-center text-muted"><a href="/login" class="forgot-pass">Already have an account? Sign In</a></span>


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
