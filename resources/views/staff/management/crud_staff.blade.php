@extends('templates.staff.layout-staff')
@section('title', __('Management Staff'))
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

    <div class="container">
    <a href="{{ route('staff/management/form/blank_staff') }}">
        <button class="btn btn-primary mt-4">
        <i class="fas fa-user-cog mr-1"></i>
            Add Staff
        </button>
    </a>

    <!-- awal card -->
    <div class="card mt-2">
        <div class="card-header bg-primary text-light">
            Staff Table
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

            @foreach ($staf as $staff)
            @csrf
        <tr>
            <td >{{ $loop->iteration }}</td>
            <td>{{ $staff->name }}</td>
            <td>{{ $staff->email }}</td>
            <td>{{ $staff->phone_number }}</td>
            <td class="text-center">
                    <a class="btn btn-primary btn-sm" href="{{route('edit1', ['id' => $staff->id])}}">
                        <i class="fas fw-fa-solid fa-pencil"></i>Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{route('destroy1', ['id' => $staff->id])}}"
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
