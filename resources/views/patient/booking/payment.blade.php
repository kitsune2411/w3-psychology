@extends('templates.patient.layout-patient')

@section('content')


<main id="main" style="margin-top: 50px;">


    <!-- ======= Contact Section ======= -->
    <section id="payment" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Payment</h2>
          <p>After Booking and Set Consultation Schedule, Please Fill The Payment Form and Submit The Proof of Payment.</p>
        </div>

        <div class="row">

          <div class="col-lg-6" >

            <div class="row">
              <div class="col-md-12" >
                <div class="info-box">
                    <img src="{{ url('ui-user/assets/img/Wallet-pana2.png') }}" class="img-fluid" alt="" style="width: 425px;">
                  <!-- <h3>Keep in Touch With Us</h3>
                  <p>Pyschology</p> -->
                </div>
              </div>


            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0 pt-2" style="background-color: white">
            @if(count($errors) > 0)
                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form action="{{ route('proccess_payment') }}" method="post" role="form" class="" enctype="multipart/form-data">
                @csrf

              <div class="row">
                  <h3 style="color: #4154f1; text-align: center;">Payment Form</h1>
                    <br>
                <div class="form-group mt-3">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required
                  value="{{ Auth::guard('web')->user()->name }}">
                </div>


                <div class="form-group mt-3">
                    <label for="email">Email<span style="color: #dc3545">*</span></label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required
                  value="{{ $item['email'] }}" readonly>
                </div>
              </div>

              <div class="form-group mt-3">
                <label for="subject">Phone number<span style="color: #dc3545">*</span></label>
                <input type="text" class="form-control" name="phone_number" id="subject" placeholder="Phone Number" required
                value="{{ $item['telp'] }}" readonly>
              </div>

              <div class="form-group mt-3">
              <div class="custom-file mt-3">
                <label for="customFile">Payment Receipt<span style="color: #dc3545">*</span></label>
                <input type="file" class="form-control" id="customFile" name="receipt">
                <small class="custom-file-label color-grey " for="customFile">*supported format file: jpg, jpeg, png</small>
                {{-- <div class="d-flex align-items-center">
                    <strong>Loading...</strong>
                    <div class="spinner-border ms-auto" role="status" for="customFile" aria-hidden="true"></div>
                  </div>
              </div> --}}
            </div>

              <!-- <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div> -->
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <br>
              <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
              <br>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @endsection
