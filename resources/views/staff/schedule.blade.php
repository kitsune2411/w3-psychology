@extends('templates.staff.layout-staff')
@section('title', __('Schedule'))
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 font-weight-bold text-primary text-uppercase">Schedule</h1>
    <p class="mb-4">Schedule counseling with a counselor who is an expert in your problem area via telephone or video call so you can start a better future journey</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Patiens Name</th>
                <th>No.WhatsApp</th>
                <th>Psychologist Name</th>
                <th>Date</th>
                <th>Expired</th>
                <th>Service</th>
                <th>Hours</th>
                <th>Receipt</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($data as $da) 
              @csrf
            <tr>
                <td >{{  $loop->iteration }}</td>
                <td>{{ $da->name }}</td>
                <td><a href="{{ 'https://wa.me/'. $da->telp}}">{{$da->telp}}</a></td>
                <td>{{ $da->psychologist }}</td>
                <td>{{ date('d M Y',strtotime($da->date)) }}</td>
                <td>{{ date('d M Y',strtotime($da->finish)) }}</td>
                <td>{{ $da->service }}</td>
                <td>{{ $da->hour }}</td>
                <td><img src="{{ url('/storage/receipt/'.$da->receipt) }}" alt="" width="200px"></td>
                <td>
                    <a class="btn btn-danger btn-sm" href="{{ route('schedule.delete',$da->id) }}"
                        onclick="return confirm('Are you sure to delete this record?')">Delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>

          </table>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection
