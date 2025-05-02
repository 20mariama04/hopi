@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Emergency Requests</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Status</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($emergencies as $emergency)
            <tr>
                <td>{{ $emergency->id }}</td>
                <td>{{ $emergency->description }}</td>
                <td>{{ $emergency->status }}</td>
                <td>{{ $emergency->created_at->format('Y-m-d H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection