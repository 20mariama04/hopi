@extends('layouts.app')

@section('title', 'Administration - Tableau de Bord')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Retour Button -->
        <button onclick="window.history.back()" class="mb-4 px-4 py-2 bg-blue-100 text-blue-800 rounded-lg shadow hover:bg-blue-200 transition flex items-center gap-2">
            <span class="text-lg">←</span> Retour
        </button>
        <!-- Admin Dashboard Title -->
        <h1 class="text-3xl font-extrabold text-blue-900 mb-8 flex items-center justify-center gap-3">
            <span class="text-4xl">🏥</span> Tableau de bord administrateur
        </h1>
        <!-- Quick Actions Grid -->
        <div class="grid grid-cols-2 gap-6 mb-10">
            <a href="{{ route('hospital.availability') }}" class="bg-white border border-blue-100 rounded-xl p-6 flex flex-col items-center shadow hover:shadow-lg transition group">
                <span class="text-3xl mb-2">🛏</span>
                <span class="text-lg font-semibold text-blue-800 mb-1">Gérer la disponibilité</span>
                <span class="text-sm text-gray-500">Gestion des lits & équipes</span>
            </a>
            <a href="{{ route('hospital.emergency-requests') }}" class="bg-white border border-red-100 rounded-xl p-6 flex flex-col items-center shadow hover:shadow-lg transition group">
                <span class="text-3xl mb-2">🚨</span>
                <span class="text-lg font-semibold text-red-700 mb-1">Urgences</span>
                <span class="text-sm text-gray-500">Voir les cas actifs</span>
            </a>
            <a href="{{ route('hospital.appointments') }}" class="bg-white border border-green-100 rounded-xl p-6 flex flex-col items-center shadow hover:shadow-lg transition group">
                <span class="text-3xl mb-2">📅</span>
                <span class="text-lg font-semibold text-green-700 mb-1">Rendez-vous</span>
                <span class="text-sm text-gray-500">Gérer les rendez-vous</span>
            </a>
            <a href="{{ route('hospital.notifications') }}" class="bg-white border border-gray-200 rounded-xl p-6 flex flex-col items-center shadow hover:shadow-lg transition group">
                <span class="text-3xl mb-2">📢</span>
                <span class="text-lg font-semibold text-gray-700 mb-1">Notifications</span>
                <span class="text-sm text-gray-500">Envoyer des alertes</span>
            </a>
        </div>
        <!-- Key Stats Mini-Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-10">
            <div class="bg-white rounded-lg shadow flex items-center justify-center gap-2 p-4 border border-blue-100">
                <span class="text-2xl">🛏</span>
                <span class="text-lg font-bold text-blue-900">12 lits</span>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center justify-center gap-2 p-4 border border-red-100">
                <span class="text-2xl">🚨</span>
                <span class="text-lg font-bold text-red-700">3 urgences</span>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center justify-center gap-2 p-4 border border-green-100">
                <span class="text-2xl">👨‍⚕️</span>
                <span class="text-lg font-bold text-green-700">8 médecins</span>
            </div>
        </div>

        <!-- Emergency Requests Section -->
        <div class="bg-white rounded-xl shadow border border-red-100 p-6 mb-10">
            <h2 class="text-xl font-bold text-red-700 mb-4 flex items-center gap-2">
                <span class="text-2xl">🚨</span> Demandes d'Urgence
            </h2>
            
            <!-- Removed dynamic data fetching -->
            <!-- Example static content -->
            <div class="border-b border-gray-100 pb-4 mb-4 last:border-0">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-medium text-gray-900">Static Emergency Description</h3>
                        <p class="text-sm text-gray-500 mt-1">Reçu: il y a 10 minutes</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        En attente
                    </span>
                </div>
            </div>
        </div>

        <!-- Recent Activity Timeline -->
        <div class="bg-white rounded-xl shadow border border-blue-100 p-6">
            <h2 class="text-xl font-bold text-blue-900 mb-4 flex items-center gap-2">
                <span class="text-2xl">🕒</span> Activité récente
            </h2>
            <ul class="space-y-3">
                <li class="flex items-start gap-2">
                    <span class="text-blue-500 mt-1">•</span>
                    <span class="text-gray-800">Nouvelle admission <span class="text-gray-400 text-xs">- il y a 10 min</span></span>
                </li>
                <li class="flex items-start gap-2">
                    <span class="text-green-500 mt-1">•</span>
                    <span class="text-gray-800">Nombre de lits mis à jour <span class="text-gray-400 text-xs">- il y a 30 min</span></span>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection