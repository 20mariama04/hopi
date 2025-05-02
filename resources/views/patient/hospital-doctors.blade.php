@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Doctors at {{ $hospital->name }}</h1>
    
    <div class="row">
        @foreach($doctors as $doctor)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $doctor->name }}</h5>
                        <p class="card-text"><strong>Department:</strong> {{ $doctor->department }}</p>
                        <p class="card-text"><strong>Age:</strong> {{ $doctor->age }}</p>
                        <p class="card-text"><strong>Availability:</strong> {{ $doctor->availability }}</p>
                        <p class="card-text"><strong>Experience:</strong> {{ $doctor->years_experience }} years</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection