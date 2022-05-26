<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Psychologist - Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('/sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('/sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary mt-4">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  @if (Session::has('error'))
                  <div class="alert alert-danger mb-n1" role="alert">
                    {{ Session::get('error') }}
                  </div>
                  @endif
                  <form class="user" action="{{ route('psychologist.login') }}" method="post" enctype="multipart/form-data">
                      @csrf
                    {{-- <div class="form-group">
                      <input type="name" class="form-control form-control-user" id="exampleInputName" aria-describedby="NameHelp" placeholder="Name">
                    </div> --}}
                    <br>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>

                      </div>
                    </div>
                    <br>
                    <button class="btn btn-primary btn-user btn-block" type="submit">
                      Login
                    </button>
                    <hr>

                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> --}}
                  </form>
                  <span class="d-block mt-2 text-left text-muted"><a href="{{ url('/login')}}" class="forgot-pass">Login as patient</a></span>
                  <span class="d-block text-right mt-n4 text-muted"><a href="{{ url('/staff/login')}}" class="forgot-pass">Login as staff</a></span>
                  {{-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('/sb-admin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('/sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('/sb-admin/js/sb-admin-2.min.js') }}"></script>

</body>

</html>