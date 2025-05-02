@extends('layouts.app')

@section('title', 'Emergency Requests')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 relative">
    <!-- Removed Button to navigate to emergency-confirmation.blade.php -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Emergency Requests</h1>
                <p class="text-gray-600">Active emergency assistance requests</p>
            </div>
            {{-- Removed department and status dropdowns --}}
        </div>

        <!-- Real-time Requests List -->
        <div class="divide-y">
            @foreach($emergencies as $emergency)
            <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0">
                        <div class="w-4 h-4 rounded-full 
                            {{ $emergency['status'] === 'Pending' ? 'bg-yellow-500 animate-pulse' : 'bg-blue-500' }}">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ $emergency['description'] }} - {{ $emergency['patient'] }}
                            </h2>
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                {{ $emergency['status'] === 'Pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800' }}">
                                {{ $emergency['status'] === 'Pending' ? 'En attente' : 'Pris en charge' }}
                            </span>
                        </div>
                        <div class="mt-2 text-sm">
                            @if(isset($emergency['created_at']))
                            <p class="text-gray-500">Reçu: {{ \Carbon\Carbon::parse($emergency['created_at'])->diffForHumans() }}</p>
                            @else
                            <p class="text-gray-500">Reçu: Date not available</p>
                            @endif
                            <p class="text-gray-500">Location: {{ $emergency['location'] }}</p>
                            @if($emergency['status'] !== 'Pending')
                            <p class="text-gray-700 mt-1">Médecin: Dr. {{ $emergency['doctor']['name'] }}</p>
                            @endif
                        </div>
                        @if($emergency['status'] === 'Pris en charge')
                        <div class="mt-4 flex justify-center">
                            <button onclick="window.location.href='{{ route('patient.emergency-confirmation') }}'" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                                →
                            </button>
                        </div>
                        @endif
                    </div>
                    <div class="flex-shrink-0 space-y-2">
                        @if($emergency['status'] === 'Pending')
                        <button onclick="document.getElementById('assign-form-{{ $emergency['id'] }}').classList.toggle('hidden')"
                            class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                            Accepter l'Urgence
                        </button>
                        @endif
                        <div id="assign-form-{{ $emergency['id'] }}" class="hidden mt-4 bg-gray-50 p-4 rounded-lg">
                            <form action="{{ route('emergencies.assign', $emergency['id']) }}" method="POST">
                                @csrf
                                <div class="flex gap-4">
                                    <select name="doctor_id" class="rounded-md border-gray-300 shadow-sm flex-1">
                                        @forelse($doctors as $doctor)
                                        <option value="{{ $doctor['id'] }}">Dr. {{ $doctor['name'] }} ({{ $doctor['specialty']['name'] }})</option>
                                        @empty
                                        <option value="" disabled>Aucun médecin disponible</option>
                                        @endforelse
                                    </select>
                                    <button type="button" onclick="updateStatus({{ $emergency['id'] }}, 'Assigned')"
                                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                        Mettre à jour le statut
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Arrow button placed here -->
                        <div class="mt-4 flex justify-center">
                            <button onclick="window.location.href='{{ route('doctor.dashboard', ['id' => $emergency['doctor']['id']]) }}'" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                                →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle all emergency assignment forms
            document.querySelectorAll('form[id^="assign-form-"]').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission
                    
                    const submitButton = this.querySelector('button[type="submit"]');
                    submitButton.disabled = true;
                    submitButton.innerHTML = 'Processing...';
                    
                    const formData = new FormData(this);
                    
                    fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if(data.success) {
                            // Update the status on the client side
                            const statusElement = this.closest('.p-6').querySelector('span');
                            statusElement.textContent = 'Pris en charge';
                            statusElement.classList.remove('bg-yellow-100', 'text-yellow-800');
                            statusElement.classList.add('bg-blue-100', 'text-blue-800');
                        } else {
                            alert('Error: ' + (data.message || 'Unknown error occurred'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    })
                    .finally(() => {
                        submitButton.disabled = false;
                        submitButton.innerHTML = 'Assigner';
                    });
                });
            });
    
            function updateStatus(emergencyId) {
                // Directly update the status on the client side
                const statusElement = document.querySelector(`#assign-form-${emergencyId}`).closest('.p-6').querySelector('span');
                statusElement.textContent = 'Pris en charge';
                statusElement.classList.remove('bg-yellow-100', 'text-yellow-800');
                statusElement.classList.add('bg-blue-100', 'text-blue-800');
            }
        });
    </script>
    @endpush
</div>
@endsection