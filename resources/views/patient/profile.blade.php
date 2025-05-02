@extends('layouts.app')

@section('title', 'Mon Profil')

@section('content')
<div class="min-h-screen bg-blue-50 flex flex-col items-center py-10 px-2">
    <!-- Profile Card -->
    <div class="w-full max-w-md bg-white rounded-2xl shadow-lg px-6 py-8 flex flex-col items-center">
        <h2 class="text-xl font-bold text-blue-900 mb-4 flex items-center gap-2">
            <span class="text-2xl">👤</span> Mon Profil
        </h2>
        <!-- Profile Photo -->
        <div class="mb-4">
            <span class="inline-block w-24 h-24 rounded-full bg-blue-100 flex items-center justify-center text-5xl text-blue-400 border border-blue-200 shadow">
                📸
            </span>
        </div>
        <!-- Personal Details -->
        <div class="w-full space-y-2 mb-6">
            <div class="flex items-center gap-2 text-gray-700">
                <span class="text-lg">👩‍🦱</span>
                <span class="font-semibold">Nom:</span>
                <span>Fatou Ndiaye</span>
            </div>
            <div class="flex items-center gap-2 text-gray-700">
                <span class="text-lg">♀️</span>
                <span class="font-semibold">Sexe:</span>
                <span>Féminin</span>
            </div>
            <div class="flex items-center gap-2 text-gray-700">
                <span class="text-lg">🎂</span>
                <span class="font-semibold">Âge:</span>
                <span>35 ans</span>
            </div>
            <div class="flex items-center gap-2 text-gray-700">
                <span class="text-lg">📞</span>
                <span class="font-semibold">Téléphone:</span>
                <span>+221 77 000 0000</span>
            </div>
            <div class="flex items-center gap-2 text-gray-700">
                <span class="text-lg">📧</span>
                <span class="font-semibold">Email:</span>
                <span>fatou@example.com</span>
            </div>
        </div>
        <!-- Medical Info -->
        <div class="w-full space-y-2 mb-6">
            <div class="flex items-center gap-2 text-blue-800">
                <span class="text-lg">🩺</span>
                <span class="font-semibold">Groupe Sanguin:</span>
                <span>O+</span>
            </div>
            <div class="flex items-center gap-2 text-blue-800">
                <span class="text-lg">📋</span>
                <span class="font-semibold">Allergies:</span>
                <span>Aucune</span>
            </div>
            <div class="flex items-center gap-2 text-blue-800">
                <span class="text-lg">💊</span>
                <span class="font-semibold">Traitements en cours:</span>
                <span>Non</span>
            </div>
            <div class="flex items-center gap-2 text-blue-800">
                <span class="text-lg">🩺</span>
                <span class="font-semibold">Conditions médicales:</span>
                <span>Asthme</span>
            </div>
        </div>
        <!-- Account Settings -->
        <div class="w-full space-y-2 mb-6">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-gray-700">
                    <span class="text-lg">🔒</span>
                    <span class="font-semibold">Mot de passe</span>
                </div>
                <a href="#" class="bg-blue-100 text-blue-800 px-3 py-1 rounded hover:bg-blue-200 text-sm font-semibold flex items-center gap-1">Modifier</a>
            </div>
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2 text-gray-700">
                    <span class="text-lg">🔔</span>
                    <span class="font-semibold">Notifications activées</span>
                </div>
                <a href="#" class="bg-blue-100 text-blue-800 px-3 py-1 rounded hover:bg-blue-200 text-sm font-semibold flex items-center gap-1">Changer</a>
            </div>
        </div>
        <!-- Edit Profile Button -->
        <a href="#" class="w-full text-center bg-blue-600 text-white font-semibold py-2 rounded-lg hover:bg-blue-700 transition mb-2 flex items-center justify-center gap-2">
            ✏️ Modifier les informations
        </a>
        <!-- Manage Account Button -->
        <a href="#" class="w-full text-center bg-gray-100 text-blue-900 font-semibold py-2 rounded-lg hover:bg-gray-200 transition flex items-center justify-center gap-2">
            ⚙️ Gérer le compte
        </a>
    </div>
</div>
@endsection