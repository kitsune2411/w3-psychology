@extends('templates.patient.layout-patient')
@push('css')
{{-- <link href="{{ url('/ui-user/assets/css/style copy.css') }}" rel="stylesheet"> --}}
@endpush

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
@if ($appointment->count() > 0)


        <div id="booking" style="margin-top: 150px;" class="section"  style="background-color: rgb(227, 227, 255);">
        <div class="section-title" >
            <h2>Schedule</h2>
            <p>Your Consultation Schedule</p>
        </div>
        <!-- <div class="section-center">
            <div class="container">
            <div class="row">
                <div class="col-md-5">
                <div class="booking-cta">
                    <img style="margin-top: 490px;" src="assets/img/Calendar-pana.png" class="img-fluid" alt="" >


                </div>
                </div> -->
                <div  class=" col-md-offset-1">
                <div style="
                position: relative;
                max-width: 942px;
                width: 100%;
                margin: auto;
                padding: 45px 25px 25px;
                border-radius: 4px;
                -webkit-box-shadow: 0px 0px 10px -5px rgba(0, 0, 0, 0.4);
                box-shadow: 0px 0px 10px -5px rgba(0, 0, 0, 0.4);"
                class="booking-form">
                    <table class="table">
                        <a style="border-radius: 5px; margin-top:-10px" type="button" class="btn btn-primary" href="{{ route('make_appointment') }}">Make an appoinment</a>
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Expired</th>
                        <th scope="col">Psychologist</th>
                        <th scope="col">Service</th>
                        <th scope="col">Hours</th>
                        {{-- <th scope="col">Session</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach  ($appointment as $data)
                        <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ date('d M Y',strtotime($data->date)) }}</td>
                        <td>{{ date('d M Y',strtotime($data->finish)) }}</td>
                        <td>{{ $data->psychologist }}</td>
                        <td>{{ $data->service }}</td>
                        <td>{{ $data->hour }}</td>
                        {{-- <td>
                        <button type="button" class="btn btn-primary"  data-whatever="@getbootstrap">start session<i class = "fas fa-fw fa-pencil-alt"></i></button>
                            </td> --}}
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
@else
    <div id="booking" style="margin-top: 150px;" class="section"  style="background-color: rgb(227, 227, 255);">
        <div class="section-title" >
        <h2>Schedule</h2>
        <!-- <p>Your Consultation Schedule</p> -->
        </div>


            <!-- <div  class="col-md-7 col-md-offset-1"> -->
                {{-- <div style="
                position: relative;
                max-width: 445px;

                width: 100%;
                margin: auto;
                padding: 45px 25px 25px;
                border-radius: 4px;
                -webkit-box-shadow: 0px 0px 10px -5px rgba(0, 0, 0, 0.4);
                box-shadow: 0px 0px 10px -5px rgba(0, 0, 0, 0.4);"
                class="booking-form">
                <img src="{{ url('/ui-user/assets/img/Stress-cuate.png') }}" class="img-fluid" alt="" >

                    <h2 style=
                    " text-align: center;
                    font-size: 32px;
                    font-weight: bold;
                    margin-bottom: 10px;
                    padding-bottom: 10px;
                    position: relative;
                    color: #2d405f;">
                    Oops!</h2>
                    <p style="text-align: center;">
                    You don't have any schedule at this time</P>
                    <div class="text-center">
                    <a style="border-radius: 20px;" type="button" class="btn btn-primary" href="{{ route('make_appointment') }}">Make an appoinment</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div> --}}

        <div class="card mb-3" style="max-width: 1100px; margin:auto; max-height: 425px">
            <div class="row no-gutters">
              <div class="col-md-5" style="max-width: 445px; width:100%">
                <img src="{{ url('/ui-user/assets/img/Stress-cuate.png') }}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="row text-center d-flex align-items-center" style="overflow:hidden; width:50vw; height:50vh; ">
                            <div class="container">

                                <h1 class="card-title" style=
                                " text-align: center;
                                font-size: 50px;
                                font-weight: bold;
                                color: #2d405f;
                                ">Opps!</h1>
                                <p class="card-text">You don't have any appointment</p>
                                <a style="border-radius: 20px;" type="button" class="btn btn-primary" href="{{ route('make_appointment') }}">Make an appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
    </div>
@endif
<div style="margin-top: 100px;">

</div>
@endsection
