@extends('templates.staff.layout-staff')
@section('title', __('Management Staff'))
@section('content')

        <div class="container">
        <!-- awal card -->
        <div class="card mt-4">
            <div class="card-header bg-primary text-light">
                Form Staff
            </div>

            <div class="card-body my-2 mx-3">
                <form action="{{route('store1')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="number" name="phone_number" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control mt-2" required>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" name="save">Submit</button>
                    <button type="reset" class="btn btn-danger mt-4" name="reset">Reset</button>
                </form>
            </div>
        </div>
        <!-- akhir card -->

    </div>

     @endsection
