@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Modifier Urgence</h1>
    
    <div class="bg-white shadow rounded-lg p-6">
        <form action="{{ route('admin.emergencies.update', $emergency) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Description</label>
                <p class="bg-gray-100 p-3 rounded">{{ $emergency->description }}</p>
            </div>
            
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Localisation</label>
                <p class="bg-gray-100 p-3 rounded">{{ $emergency->location->name }}</p>
            </div>
            
            <div class="mb-4">
                <label for="doctor_id" class="block text-gray-700 mb-2">Assigner un médecin</label>
                <select name="doctor_id" id="doctor_id" class="w-full border rounded p-2">
                    <option value="">Non assigné</option>
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}" {{ $emergency->doctor_id == $doctor->id ? 'selected' : '' }}>
                            {{ $doctor->name }} ({{ $doctor->speciality->name }})
                        </option>
                    @endforeach
                </select>
            </div>
            
            <div class="mb-4">
                <label for="status" class="block text-gray-700 mb-2">Statut</label>
                <select name="status" id="status" class="w-full border rounded p-2">
                    @foreach($statuses as $status)
                        <option value="{{ $status }}" {{ $emergency->status == $status ? 'selected' : '' }}>
                            {{ $status }}
                        </option>
                    @endforeach
                </select>
            </div>
            
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Enregistrer les modifications
            </button>
        </form>
    </div>
</div>
@endsection