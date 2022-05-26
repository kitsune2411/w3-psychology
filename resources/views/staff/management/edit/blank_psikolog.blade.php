@extends('templates.staff.layout-staff')
@section('title', __(' Psychologist'))
@section('content')

        <div class="container">
        <!-- awal card -->
        <div class="card mt-4">
            <div class="card-header bg-primary text-light">
                Form Psychologist
            </div>

            <div class="card-body my-2 mx-3">
                <form action="{{route('update2',['id' => $psikolog->id])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="{{$psikolog->name}}" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="{{$psikolog->email}}" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone_number" value="{{$psikolog->phone_number}}" class="form-control mt-2" required>
                    </div>

                    <div class="form-group">
                        <label for="password">password</label>
                        <input type="password" name="password" class="form-control mt-2" >
                        <small class="text-muted">leave blank if you don't want to change it</small>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" name="save">Submit</button>
                    <a href="{{ URL::previous() }}" class="btn btn-secondary mt-4" >cancel</a>
                </form>
            </div>
        </div>
        <!-- akhir card -->

    </div>

     @endsection
