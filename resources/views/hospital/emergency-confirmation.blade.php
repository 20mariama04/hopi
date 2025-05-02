@extends('layouts.app')

@section('title', 'Confirmation de la Demande d\'Urgence')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8 flex items-center justify-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Emergency Request Confirmation Message -->
        <div class="bg-green-100 border border-green-200 rounded-lg p-6 mb-10">
            <h2 class="text-xl font-bold text-green-700 mb-4 flex items-center gap-2">
                <span class="text-2xl">🚑</span> Demande d'urgence envoyée avec succès !
            </h2>
            <p class="text-sm text-gray-700">Hôpital: [Hospital Name]</p>
            <p class="text-sm text-gray-700">Médecin: Dr. [Doctor Name] - [Specialty]</p>
            <p class="text-sm text-gray-700">Localisation: [Your Location]</p>
            <p class="text-sm text-gray-700">Estimation du temps d'arrivée: [Estimated Time]</p>
            <p class="text-sm text-gray-700 mt-2">⏳ Merci de rester calme et de garder votre téléphone à portée de main.</p>
        </div>
    </div>
</div>
@endsection