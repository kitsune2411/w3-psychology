@extends('templates/sch')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Schedule</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('schedule.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Full Name:</strong>
                {{ $sedul->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NO.WhatsApp:</strong>
                {{ $sedul->telp }}
            </div>
        </div>
    </div>
@endsection