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
          <div class="col-md-5">
            <div class="booking-cta">
              <img style="margin-top: 50px;" src="{{ url('/ui-user/assets/img/Stress-cuate.png') }}" class="img-fluid" alt="" >


            </div>
          </div>
          <div  class="col-md-7 col-md-offset-1">
            <div style="margin-top: 80px;" class="booking-form">
              <form action="{{ route('reset.password.post') }}" method="POST">
                @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>

                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required autofocus>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" required autofocus>
                      @if ($errors->has('password_confirmation'))
                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                    </div>

                  <button type="submit" class="btn btn-primary">Reset Password</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection
