@extends('templates.patient.layout-patient')
@push('css')
<link href="{{ url('/ui-user/assets/css/style copy.css') }}" rel="stylesheet">
@endpush

@section('content')


  <main id="main" style="margin-top: -50px;">


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



<div id="booking" style="margin-top: 150px;" class="section"  style="background-color: rgb(227, 227, 255);">
    <div class="section-title" >
      <h2>Booking</h2>
      <p>Choose your schedule for booking Consultation, Mentoring or Theraphy with Our Psychologist</p>
    </div>
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="booking-cta">
              <img style="margin-top: 650px;" src="{{ url('/ui-user/assets/img/Calendar-pana.png') }}" class="img-fluid" alt="" >

              <!-- <h1>Check Your Schedule</h1>
              <p>Choose your schedule for booking Consultation, Mentoring or Theraphy with Our Psychologist</p> -->
            </div>
          </div>
          <div  class="col-md-7 col-md-offset-1">
            <div style="margin-top: 660px;" class="booking-form">
                @if(count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
              <form action="{{route('create_appointment')}}" class="user" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <div class="form-checkbox">
                    <label for="roundtrip">
                      <input type="radio" id="roundtrip" name="flight-type" required="required">
                      <span>Counseling</span>&nbsp;&nbsp;
                    </label>
                    <label for="one-way">
                      <input type="radio" id="one-way" name="flight-type" >
                      <span>Mentoring</span>&nbsp;&nbsp;
                    </label>
                    <label for="multi-city">
                      <input type="radio" id="multi-city" name="flight-type">
                      <span>Theraphy</span>&nbsp;&nbsp;
                    </label>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Email<span style="color: #dc3545">*</span></span>
                      <input class="form-control" name="email" type="email" placeholder="Your E-mail Address"
                      value="{{ Auth::guard('web')->user()->email }}">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Phone Number<span style="color: #dc3545">*</span></span>
                      <input class="form-control" type="text" name="telp" placeholder="+62 XXX XXXX XXXX"
                      value="{{ Auth::guard('web')->user()->phone_number }}">
                      <small>format: +62 XXX XXXX XXXX, Without Spaces</small>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <span style="color: grey;" class="form-label">Date<span style="color: #dc3545">*</span></span>
                      <input class="form-control" name="date" type="date" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <span class="form-label">Expired<span style="color: #dc3545">*</span></span>
                      <input class="form-control" name="finish" type="date" required>
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <span class="form-label">Service<span style="color: #dc3545">*</span></span>
                      <select class="form-control" name="service" required>
                        <option style="color: grey;" value="" disabled selected hidden>Choose your option</option>
                        <option>Mental Health</option>
                        <option>Relationship</option>
                        <option>Mentoring</option>
                        <option>Theraphy</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <span  class="form-label">Duration<span style="color: #dc3545">*</span></span>
                      <select class="form-control" name="hour" required>
                        <option style="color: grey;" value="" disabled selected hidden>select</option>
                        <option>1 hour</option>
                        <option>2 hours</option>
                        <option>3 hours</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <span class="form-label">Choose Psychologist<span style="color: #dc3545">*</span></span>
                      <select class="form-control" name="psychologist" required>
                        <option style="color: grey;" value="" disabled selected hidden>Choose Psychologist </option>
                        @foreach ($nama as $item)

                        <option>{{ $item->name }}</option>
                        @endforeach

                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                  <br>
                </div><div class="row">
                  <div class="col-md-12" >
                    <div class="form-group">
                      <br>
                      <span class="form-label">Message</span>
                      <textarea class="form-control"  placeholder="Type your message here" name="message"></textarea>
                    </div>
                    <br>
                    <br>
                    <div class="d-grid gap-2">
                      <button class="btn btn-primary" type="submit">Book Now</button>

                    </div>


              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<div style="margin-top: 100px;">

</div>


@endsection
