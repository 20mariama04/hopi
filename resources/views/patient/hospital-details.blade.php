@extends('layouts.app')

@section('title', 'Détails de l\'hôpital')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Go Back Button -->
    <button onclick="window.history.back()" class="mb-6 flex items-center text-blue-600 hover:text-blue-800 font-medium transition">
        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Retour
    </button>
    <!-- Hospital Image at the Top -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
        <div class="w-full h-48 sm:h-64 relative">
            <img src="{{ asset('images/hospital-cover.jpg') }}" alt="Hôpital" class="w-full h-full object-cover">
        </div>
        <div class="p-6 border-b">
            <h1 class="text-3xl font-bold text-blue-900 mb-2 flex items-center gap-2">
                <svg class="h-8 w-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c1.657 0 3-1.343 3-3s-1.343-3-3 1.343-3 3 1.343 3 3 3zm0 0c-4.418 0-8 2.239-8 5v2a2 2 0 002 2h12a2 2 0 002-2v-2c0-2.761-3.582-5-8-5z"/>
                </svg>
                Hôpital Central
            </h1>
            <div class="flex flex-col gap-2 text-gray-700 text-sm mt-2">
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    123 Avenue du Centre Médical
                    <a href="https://maps.google.com/?q=123+Medical+Center+Ave" target="_blank" class="ml-2 text-blue-600 underline flex items-center">
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        </svg>
                        Voir sur la carte
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    <a href="tel:+221331234567" class="text-blue-600 underline">+221 33 123 4567</a>
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    8 lits disponibles
                </div>
                <div class="flex items-center gap-2">
                    <svg class="h-5 w-5 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3"/>
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    </svg>
                    15 min d'attente
                </div>
                <div class="flex items-center gap-2 flex-wrap">
                    <svg class="h-5 w-5 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="font-semibold">Spécialités :</span>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs ml-1">Soins d'urgence</span>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Cardiologie</span>
                    <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">Pédiatrie</span>
                </div>
            </div>
        </div>
        <!-- Action Buttons -->
        <div class="p-6 bg-gray-50 flex flex-col sm:flex-row gap-4">
            <a href="tel:+221331234567" class="flex-1 bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 flex items-center justify-center gap-2">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Appeler l'hôpital
            </a>
            <a href="https://maps.google.com/?q=123+Medical+Center+Ave" target="_blank" class="flex-1 bg-green-600 text-white py-2 px-4 rounded-lg hover:bg-green-700 flex items-center justify-center gap-2">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                </svg>
                Itinéraire
            </a>
        </div>
    </div>

    <!-- Grouped Specialties and Doctors -->
    <div class="mt-8">
        @php
            // Example data structure; replace with your dynamic data
            $specialties = [
                [
                    'name' => 'Cardiologie',
                    'icon' => 'heart',
                    'doctors' => [
                        [
                            'name' => 'Dr. Aissatou Diop',
                            'available' => true,
                        ],
                        [
                            'name' => 'Dr. Mamadou Ba',
                            'available' => false,
                        ],
                    ],
                ],
                [
                    'name' => 'Pédiatrie',
                    'icon' => 'baby',
                    'doctors' => [
                        [
                            'name' => 'Dr. Fatou Ndiaye',
                            'available' => true,
                        ],
                    ],
                ],
                // Add more specialties as needed
            ];
        @endphp

        @foreach($specialties as $specialty)
        <section class="mb-8">
            <div class="flex items-center gap-2 mb-4">
                @if($specialty['icon'] === 'heart')
                <svg class="h-6 w-6 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 016.364 0L12 7.636l1.318-1.318a4.5 4.5 0 116.364 6.364L12 21.364l-7.682-7.682a4.5 4.5 0 010-6.364z"/>
                </svg>
                @elseif($specialty['icon'] === 'baby')
                <svg class="h-6 w-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                    <circle cx="12" cy="10" r="3" fill="currentColor"/>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 16c1.5 1 4.5 1 6 0"/>
                </svg>
                @else
                <svg class="h-6 w-6 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                </svg>
                @endif
                <h2 class="text-lg font-semibold text-blue-900">{{ $specialty['name'] }}</h2>
            </div>
            <div class="space-y-4">
                @foreach($specialty['doctors'] as $doctor)
                <div class="bg-white shadow rounded-lg p-4 flex flex-col sm:flex-row items-center gap-4 relative">
                    <!-- Doctor Rating at Top-Left -->
                    <div class="absolute left-4 top-4 flex items-center z-10 bg-white bg-opacity-80 px-2 py-1 rounded shadow-sm">
                        @php
                            $rating = $doctor['rating'] ?? 0;
                            $fullStars = floor($rating);
                            $halfStar = ($rating - $fullStars) >= 0.5;
                        @endphp
                        @for($i = 0; $i < $fullStars; $i++)
                            <svg class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endfor
                        @if($halfStar)
                            <svg class="h-4 w-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <defs>
                                    <linearGradient id="half-grad-{{ $loop->parent->index }}-{{ $loop->index }}">
                                        <stop offset="50%" stop-color="currentColor"/>
                                        <stop offset="50%" stop-color="transparent"/>
                                    </linearGradient>
                                </defs>
                                <path fill="url(#half-grad-{{ $loop->parent->index }}-{{ $loop->index }})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        @endif
                        <span class="ml-2 text-xs text-gray-700 font-semibold">
                            {{ number_format($rating, 1) }}/5
                        </span>
                    </div>
                    <!-- Doctor Photo -->
                    @if(!empty($doctor['photo']))
                        <img src="{{ $doctor['photo'] }}"
                             alt="{{ $doctor['name'] }}"
                             class="h-20 w-20 rounded-full object-cover border-2 border-blue-100 shadow-sm mt-6 sm:mt-0">
                    @else
                        <div class="h-20 w-20 rounded-full bg-gray-100 border-2 border-blue-100 shadow-sm mt-6 sm:mt-0 flex items-center justify-center">
                            <!-- Optionnel : Initiales ou icône générique -->
                        </div>
                    @endif
                    <div class="flex-1 w-full">
                        <!-- Name and Specialty -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                            <div>
                                <span class="block font-semibold text-blue-900 text-lg">{{ $doctor['name'] }}</span>
                                <span class="block text-blue-600 text-sm">{{ $specialty['name'] }}</span>
                            </div>
                            <!-- Availability -->
                            @if($doctor['available'])
                                <span class="mt-2 sm:mt-0 inline-flex items-center px-2 py-1 bg-green-100 text-green-700 rounded text-xs font-medium">
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    Disponible maintenant
                                </span>
                            @else
                                <span class="mt-2 sm:mt-0 inline-flex items-center px-2 py-1 bg-red-100 text-red-700 rounded text-xs font-medium">
                                    <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 9l-6 6m0-6l6 6"/>
                                    </svg>
                                    Indisponible
                                </span>
                            @endif
                        </div>
                        <!-- Years of Experience & Education -->
                        <div class="mt-2 flex flex-col sm:flex-row sm:items-center sm:gap-4 text-gray-600 text-sm">
                            <span>
                                <svg class="inline h-4 w-4 text-blue-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3v1c0 1.657 1.343 3 3 3s3-1.343 3-3v-1c0-1.657-1.343-3-3-3z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19v2m0-2a7 7 0 100-14 7 7 0 000 14z"/>
                                </svg>
                                {{ $doctor['experience'] ?? '10+' }} ans en {{ $specialty['name'] }}
                            </span>
                            @if(!empty($doctor['education']))
                            <span class="mt-1 sm:mt-0">
                                <svg class="inline h-4 w-4 text-indigo-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6"/>
                                </svg>
                                {{ $doctor['education'] }}
                            </span>
                            @endif
                            @if(!empty($doctor['affiliation']))
                            <span class="mt-1 sm:mt-0">
                                <svg class="inline h-4 w-4 text-green-400 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                {{ $doctor['affiliation'] }}
                            </span>
                            @endif
                        </div>
                        <!-- Reassuring Note/Quote -->
                        @if(!empty($doctor['note']))
                        <div class="mt-2 italic text-gray-500 text-xs">
                            "{{ $doctor['note'] }}"
                        </div>
                        @endif
                    </div>
                    <!-- Book Appointment Button -->
                    <button class="w-full sm:w-auto bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors text-sm mt-4 sm:mt-0"
                        @if(!$doctor['available']) disabled class="opacity-50 cursor-not-allowed" @endif>
                        Prendre rendez-vous
                    </button>
                </div>
                @endforeach
            </div>
        </section>
        @endforeach
    </div>
</div>
@endsection