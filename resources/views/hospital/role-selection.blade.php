@extends('layouts.app')

@section('title', 'Choisissez votre rôle')

@section('content')
<div class="max-w-2xl mx-auto py-16 px-4">
    <h1 class="text-2xl font-bold text-center mb-10">Vous êtes&nbsp;?</h1>
    <div class="flex flex-row justify-center items-center gap-8">
        <a href="{{ route('doctor.profile') }}" class="flex flex-row items-center bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-lg p-8 shadow transition w-72">
            <svg class="w-12 h-12 text-blue-600 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                <circle cx="12" cy="7" r="4" />
            </svg>
            <div>
                <span class="text-xl font-semibold text-blue-800 mb-2 block">Je suis un Médecin</span>
                <span class="text-sm text-blue-700 text-center block">Accès à la gestion de disponibilité et des rendez-vous</span>
            </div>
        </a>
        <a href="{{ route('hospital.profile') }}" class="flex flex-row items-center bg-green-50 hover:bg-green-100 border border-green-200 rounded-lg p-8 shadow transition w-72">
            <svg class="w-12 h-12 text-green-600 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7" />
                <path d="M16 3v4M8 3v4M4 11h16" />
            </svg>
            <div>
                <span class="text-xl font-semibold text-green-800 mb-2 block">Je suis dans l’Administration</span>
                <span class="text-sm text-green-700 text-center block">Gérer les lits, urgences et données hospitalières</span>
            </div>
        </a>
    </div>
</div>
@endsection