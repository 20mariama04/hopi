@extends('layouts.app')

@section('title', 'Tableau de bord patient')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold mb-8">Tableau de bord patient</h1>

    <!-- Actions rapides -->
    <div class="flex flex-row flex-wrap gap-8 justify-center items-center mb-8">
        <a href="{{ route('patient.find-hospital') }}" class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition border border-blue-100 flex flex-col items-center w-72">
            <svg class="w-12 h-12 text-blue-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
            <h3 class="text-xl font-semibold text-blue-800">Trouver un hôpital</h3>
            <p class="mt-2 text-sm text-gray-500 text-center">Localisez les établissements médicaux à proximité</p>
        </a>

        <a href="{{ route('patient.appointments') }}" class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition border border-green-100 flex flex-col items-center w-72">
            <svg class="w-12 h-12 text-green-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <h3 class="text-xl font-semibold text-green-800">Mes rendez-vous</h3>
            <p class="mt-2 text-sm text-gray-500 text-center">Voir et gérer mes rendez-vous</p>
        </a>

        <a href="{{ route('patient.medical-records') }}" class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition border border-purple-100 flex flex-col items-center w-72">
            <svg class="w-12 h-12 text-purple-500 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
            </svg>
            <h3 class="text-xl font-semibold text-purple-800">Dossier médical</h3>
            <p class="mt-2 text-sm text-gray-500 text-center">Accédez à votre historique de santé</p>
        </a>

    </div>

    <!-- Activité récente -->
    <div class="bg-white shadow rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-4">Activité récente</h2>
        <!-- Contenu de l'activité ici -->
    </div>
</div>
@endsection