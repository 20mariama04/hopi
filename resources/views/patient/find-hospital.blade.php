@extends('layouts.app')

@section('title', 'Trouver un hôpital')

@section('content')
<!-- Filter Section -->
<div class="bg-white shadow rounded-lg p-6 mb-8">
    <h1 class="text-2xl font-bold mb-6">Trouver les hôpitaux à proximité</h1>
    <form method="GET" action="#" class="space-y-4 md:space-y-0">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <!-- Location Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Localisation</label>
                <input type="text" name="location" placeholder="Entrez la localisation ou utilisez la position actuelle"
                    class="w-full rounded-md border-gray-300 shadow-sm" id="location-input">
            </div>
            <!-- Specialty Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Spécialité</label>
                <select name="specialty" class="w-full rounded-md border-gray-300 shadow-sm" id="specialty-dropdown" onchange="updateDoctorDropdown()">
                    <option value="">Toutes les spécialités</option>
                    <option value="cardio">Cardiologie</option>
                    <option value="pedia">Pédiatrie</option>
                    <option value="neuro">Neurologie</option>
                </select>
            </div>
            <!-- Availability Filter -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Disponibilité</label>
                <div class="flex flex-col space-y-1">
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="beds" class="accent-blue-500">
                        <span class="ml-2 text-gray-700">Lits disponibles</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="checkbox" name="doctors" class="accent-blue-500">
                        <span class="ml-2 text-gray-700">Médecins de garde</span>
                    </label>
                </div>
            </div>
            <!-- Search Button -->
            <div class="flex items-end">
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition-colors">
                    Rechercher
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Simulated Hospital Cards -->
<div class="flex flex-row flex-wrap gap-6">
    <!-- Hospital Card 1 -->
    <div class="bg-white shadow rounded-lg overflow-hidden hover:shadow-md transition-shadow w-full md:w-1/2 lg:w-1/3">
        <div class="p-6 border-b">
            <div class="flex items-center space-x-4 mb-4">
                <span class="text-4xl">🏥</span>
                <div>
                    <h3 class="text-xl font-semibold text-blue-800">Hôpital Général de Dakar</h3>
                    <div class="flex items-center text-sm text-gray-500">
                        <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>3 km</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center">
                    <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span class="ml-1 text-gray-600">4.7/5</span>
                </div>
                <div class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                    10 min d'attente
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="mb-4">
                <h4 class="text-sm font-medium text-gray-700 mb-2">Spécialités</h4>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 rounded-full text-xs bg-blue-100 text-blue-800">Urgences cardio-respiratoires</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-green-100 text-green-800">Neurologie</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-red-100 text-red-800">Chirurgie générale</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-yellow-100 text-yellow-800">Gastroentérologie</span>
                    <span class="px-3 py-1 rounded-full text-xs bg-purple-100 text-purple-800">Cardiologie</span>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="bg-blue-50 p-3 rounded-lg">
                    <div class="text-sm text-gray-500">Lits disponibles</div>
                    <div class="text-2xl font-bold text-blue-800">12</div>
                </div>
                <div class="bg-green-50 p-3 rounded-lg">
                    <div class="text-sm text-gray-500">Médecins de garde</div>
                    <div class="text-2xl font-bold text-green-800">10</div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 px-4 py-4 flex justify-between border-t">
            <button class="flex items-center text-blue-600 hover:text-blue-800">
                <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                </svg>
                Appeler
            </button>
            <button onclick="fetchItinerary()" class="flex items-center text-green-600 hover:text-green-800">
                <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                </svg>
                Itinéraire
            </button>
            <button onclick="toggleDoctors('1')" class="flex items-center text-purple-600 hover:text-purple-800">
                <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Voir les médecins
            </button>
            <a href="{{ route('patient.hospital-details', ['id' => 1]) }}"
               class="flex items-center text-indigo-600 hover:text-indigo-800 font-semibold">
                <svg class="h-5 w-5 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Voir les détails
            </a>
        </div>
        <!-- Doctors Section -->
        <div id="doctors-1" class="hidden p-6 border-t">
            <h4 class="text-lg font-medium mb-4">Médecins disponibles</h4>
            <div class="space-y-4">
                <div class="flex items-center p-4 bg-blue-50 rounded-lg">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Dr. Salif Mbaye"
                         class="h-12 w-12 rounded-full object-cover mr-4">
                    <div class="flex-1">
                        <h5 class="font-medium text-blue-800">Dr. Salif Mbaye</h5>
                        <p class="text-sm text-gray-500">Urgences cardio-respiratoires</p>
                        <p class="text-sm text-green-600">Disponible maintenant</p>
                    </div>
                    <button class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                        Prendre rendez-vous
                    </button>
                </div>
                <!-- Add other doctors similarly -->
            </div>
        </div>
    </div>
    <!-- Itinerary Card -->
    <div id="itinerary-card" class="hidden bg-white shadow rounded-lg p-6 mt-6">
        <h4 class="text-lg font-medium mb-4">Itinéraire</h4>
        <p class="text-sm text-gray-500">L'itinéraire sera affiché ici après l'intégration de l'API.</p>
    </div>
    <!-- Dynamic Doctor Dropdown -->
    <div id="doctor-form" class="hidden bg-white shadow rounded-lg p-6 mt-6">
        <h4 class="text-lg font-medium mb-4">Choisir un médecin</h4>
        <select id="doctor-dropdown" class="w-full rounded-md border-gray-300 shadow-sm">
            <option value="">Sélectionnez un médecin</option>
            <!-- Options will be populated based on specialty -->
        </select>
    </div>
    <!-- Apply the same translation and button addition to other cards and dynamic section below -->

    <!-- Hospital Card 2 (Sample) -->
    {{-- Removed Hospital Card 2 --}}

    <!-- Sample Hospital Card 3 (Static Example) -->
    {{-- Removed Hospital Card 3 --}}
</div>
@endsection

@section('scripts')
<script>
    const doctorsBySpecialty = {
        cardio: ["Dr. Salif Mbaye", "Dr. Mamadou Diouf"],
        pedia: ["Dr. Fatou Ndiaye", "Dr. Binta Camara"],
        neuro: ["Dr. Ndeye Sy", "Dr. Lamine Sow"]
    };

    function updateDoctorDropdown() {
        const specialty = document.getElementById('specialty-dropdown').value;
        const doctorDropdown = document.getElementById('doctor-dropdown');
        const doctorForm = document.getElementById('doctor-form');

        doctorDropdown.innerHTML = '<option value="">Sélectionnez un médecin</option>';

        if (specialty && doctorsBySpecialty[specialty]) {
            doctorsBySpecialty[specialty].forEach(doctor => {
                const option = document.createElement('option');
                option.value = doctor;
                option.textContent = doctor;
                doctorDropdown.appendChild(option);
            });
            doctorForm.classList.remove('hidden');
        } else {
            doctorForm.classList.add('hidden');
        }
    }

    function showItineraryCard() {
        const card = document.getElementById('itinerary-card');
        card.classList.toggle('hidden');
    }

    function fetchItinerary() {
        const card = document.getElementById('itinerary-card');
        card.classList.toggle('hidden');

        // Example API call (replace with actual API endpoint and logic)
        fetch('https://api.example.com/itinerary')
            .then(response => response.json())
            .then(data => {
                // Process and display the data
                card.innerHTML = `<h4 class="text-lg font-medium mb-4">Itinéraire</h4>
                                  <p class="text-sm text-gray-500">${data.itinerary}</p>`;
            })
            .catch(error => {
                console.error('Error fetching itinerary:', error);
                card.innerHTML = `<p class="text-sm text-red-500">Erreur lors de la récupération de l'itinéraire.</p>`;
            });
    }
</script>
@endsection

<!-- Hospital List -->
  
