@extends('templates.staff.layout-staff')
@section('title', __('Management Patient'))
@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        <div class="container">
        <a href="{{ route('staff/management/form/blank_pasien') }}">
            <button class="btn btn-primary mt-4">
            <i class="fas fa-user-injured mr-1"></i>
                Add Patients
            </button>
        </a>

        <!-- awal card -->
        <div class="card mt-2">
            <div class="card-header bg-primary text-light">
                Patients Table
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

                @foreach ($us as $use) 
            @csrf
        <tr>
            <td >{{ $loop->iteration}}</td>
            <td>{{ $use->name }}</td>
            <td>{{ $use->email }}</td>
            <td>{{ $use->phone_number }}</td>
            <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="{{ route('edit3',$use->id) }}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('destroy3',$use->id) }}"
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
