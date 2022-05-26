@extends('templates/sch')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL 8</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('schedule.create') }}"> Create Schedule</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th width="280px"class="text-center">Full Name</th>
            <th width="280px"class="text-center">Email</th>
            <th width="280px"class="text-center">gender</th>
            <th width="280px"class="text-center">No.WhatsApp</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($sedul as $sedule) <?php $i =1 ?>
        <tr>
            <td class="text-center">{{ $i++ }}</td>
            <td>{{ $sedule->name }}</td>
            <td>{{ $sedule->email }}</td>
            <td>{{ $sedule->gender }}</td>
            <td>{{ $sedule->telp }}</td>
            <td class="text-center">
                <form action="{{ route('schedule.destroy',$sedule->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('schedule.show',$sedule->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('schedule.edit',$sedule->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $sedul->links() !!}

@endsection