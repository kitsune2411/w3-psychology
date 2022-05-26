@extends('templates.staff.layout-staff')
@section('title', __('Management Psychologist'))
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="container">
        <a href="{{ route('staff/management/form/blank_psikolog') }}">
            <button class="btn btn-primary mt-4">
            <i class="fas fa-user-md mr-1"></i>
                Add Psychologist
            </button>
        </a>

        <!-- awal card -->
        <div class="card mt-2">
            <div class="card-header bg-primary text-light">
                Psychologist Table
            </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>

                @foreach ($psikolog as $psikologis) 
            @csrf
        <tr>
            <td >{{ $loop->iteration }}</td>
            <td>{{ $psikologis->name }}</td>
            <td>{{ $psikologis->email }}</td>
            <td>{{ $psikologis->phone_number }}</td>
            <td class="text-center">
                <a class="btn btn-primary btn-sm" href="{{ route('edit2',$psikologis->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm"  href="{{ route('destroy2',$psikologis->id) }}"
                    onclick="return confirm('Are you sure to delete this record?')">Delete</a>
            </td>
        </tr>
        @endforeach
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
