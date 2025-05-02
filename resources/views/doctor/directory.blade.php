@extends('layouts.app')

@section('title', 'Doctor Directory')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h1 class="mb-4">Doctor Directory</h1>
            
            <div class="card mb-4">
                <div class="card-body">
                    <form method="GET" action="{{ route('doctor.directory') }}">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="search" class="form-control" 
                                       placeholder="Search doctors..." value="{{ request('search') }}">
                            </div>
                            <div class="col-md-4">
                                <select name="specialty" class="form-control">
                                    <option value="">All Specialties</option>
                                    @foreach($specialties as $specialty)
                                        <option value="{{ $specialty->id }}" {{ request('specialty') == $specialty->id ? 'selected' : '' }}>
                                            {{ $specialty->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-primary w-100">Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                @foreach($doctors as $doctor)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Dr. {{ $doctor->name }}</h5>
                            <p class="card-text">
                                <strong>Specialty:</strong> {{ $doctor->specialty->name ?? 'N/A' }}<br>
                                <strong>Hospital:</strong> {{ $doctor->hospital->name ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center">
                {{ $doctors->links() }}
            </div>
        </div>
    </div>
</div>
@endsection