@extends('templates.psy.layout-psy')
@section('title', __('Feedback'))
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="container">
        {{-- <a href="#">
            <button class="btn btn-primary mt-4">
            <i class="far fa-comments mr-1"></i>
                Add Feedback
            </button>
        </a> --}}

        <!-- awal card -->
        <div class="card mt-2">
            <div class="card-header bg-primary text-light">
                Feedback Table
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>
              @foreach ($feedback as $feed) 
              @csrf  
            <tr>
                <td >{{  $loop->iteration }}</td>
                <td>{{ $feed->name }}</td>
                <td>{{ $feed->email }}</td>
                <td>{{ $feed->subject }}</td>
                <td>{{ $feed->message }}</td>
            </tr>
            @endforeach
                <tr>
                </tr>
            </table>
        </div>
        </div>
        <!-- akhir card -->

    </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      @endsection
