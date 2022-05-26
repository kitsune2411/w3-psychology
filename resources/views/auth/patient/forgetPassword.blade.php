@extends('templates.patient.layout-patient')

@section('content')
<main id="main" style="margin-top: 50px;">


    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title" >
          <h2>Booking</h2>
          <p>Choose your schedule for booking Consultation, Mentoring or Theraphy with Our Psychologist</p>
        </div>
</div>
</section> -->
</main>
<div id="booking" style="margin-top: 100px;" class="section"  style="background-color: rgb(227, 227, 255);">
    <div class="section-title" >
      <h2>Reset Password</h2>
    </div>
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="booking-cta">
              <img style="margin-left: 80px; margin-top: -50px; width: 300px;" src="{{ url('/ui-user/assets/img/Anxiety-cuate.png') }}" class="img-fluid" alt="" >


            </div>
          </div>
          <div  class="col-md-8 col-md-offset-1">
            <div  class="booking-form">
                @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
              <form action="{{ route('forget.password.post') }}" method="POST">
                @csrf
                  <div class="mb-3">
                    <label for="email_address" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email_address" aria-describedby="emailHelp" name="email" required>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
