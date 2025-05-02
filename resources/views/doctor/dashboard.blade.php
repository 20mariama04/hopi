@extends('layouts.app')

@section('title', 'SAMA SANTÉ - DOCTOR DASHBOARD')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-10">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Back Button -->
        <div class="mb-4 flex justify-between">
            <button onclick="goBack()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-full transition shadow-md">
                ⬅️ Retour
            </button>
            <!-- Right Arrow Button -->
            <button onclick="window.location.href='{{ route('emergency-confirmation') }}'" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-full transition shadow-md">
                ➡️
            </button>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-blue-900">
                🩺 SAMA SANTÉ - TABLEAU DE BORD DU MÉDECIN
            </h1>
        </div>

        <!-- Overview Panel -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-4"> PANNEAU DE VUE D'ENSEMBLE</h2>
            <!-- Dropdown for Doctor's Name -->
            <div class="mb-4">
                <label for="doctor-select" class="block text-lg text-blue-900 mb-2" id="doctor-label">Sélectionnez le médecin :</label>
                <select id="doctor-select" class="w-full p-2 border border-blue-300 rounded" onchange="displaySelectedDoctor(this)">
                    <option value="">Sélectionnez le médecin</option>
                    <option>Dr. Salif Mbaye (Urgences cardio-respiratoires)</option>
                    <option>Dr. Ndeye Sy (Neurologie)</option>
                    <option>Dr. Binta Camara (Pédiatrie)</option>
                    <option>Dr. Daouda Gueye (Chirurgie orthopédique)</option>
                    <option>Dr. Rokhaya Ndiaye (Gastroentérologie)</option>
                    <option>Dr. Malick Faye (Chirurgie générale)</option>
                    <option>Dr. Aissatou Fall (Dermatologie)</option>
                    <option>Dr. Lamine Sow (Neurologie)</option>
                    <option>Dr. Sokhna Thiam (Cardiologie)</option>
                    <option>Dr. El Hadji Kane (Allergologie)</option>
                </select>
            </div>
           
            <div class="flex justify-between text-lg">
                <span>👥 Patients Aujourd'hui : 6</span>
                <span class="mx-auto">📅 Rendez-vous à venir : 3</span>
                <span>🚨 Urgences assignées : 1</span>
            </div>
            <!-- Status Section -->
            <div class="flex items-center mt-4">
                <span id="status-text" class="text-lg font-semibold text-green-600"> Disponible</span>
                <button id="update-status" class="ml-4 bg-blue-600 hover:bg-blue-700 text-white py-1 px-3 rounded transition">
                    Mettre à jour
                </button>
            </div>
        </div>

        <!-- Today's Appointments -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">📅 RENDEZ-VOUS D'AUJOURD'HUI (Vue Résumée)</h2>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 px-5 text-blue-900 font-semibold">Heure</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Patient</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Raison</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">09:00</td>
                        <td class="py-3 px-5">A. Ndiaye</td>
                        <td class="py-3 px-5">Suivi post-AVC</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="confirmed" class="text-green-600">Confirmé</option>
                                <option value="pending" class="text-yellow-600">En attente</option>
                                <option value="cancelled" class="text-red-600">Annulé</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">11:00</td>
                        <td class="py-3 px-5">M. Sarr</td>
                        <td class="py-3 px-5">Migraine persistante</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="confirmed" class="text-green-600">Confirmé</option>
                                <option value="pending" class="text-yellow-600">En attente</option>
                                <option value="cancelled" class="text-red-600">Annulé</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">14:30</td>
                        <td class="py-3 px-5">F. Diallo</td>
                        <td class="py-3 px-5">Consultation pré-opératoire</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="pending" class="text-yellow-600">En attente</option>
                                <option value="confirmed" class="text-green-600">Confirmé</option>
                                <option value="cancelled" class="text-red-600">Annulé</option>
                            </select>
                        </td>
                    </tr>
                    <!-- Additional Appointments -->
                    <tr class="border-b hover:bg-blue-100 transition hidden">
                        <td class="py-3 px-5">16:00</td>
                        <td class="py-3 px-5">B. Diop</td>
                        <td class="py-3 px-5">Consultation de routine</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="confirmed" class="text-green-600">Confirmé</option>
                                <option value="pending" class="text-yellow-600">En attente</option>
                                <option value="cancelled" class="text-red-600">Annulé</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition hidden">
                        <td class="py-3 px-5">17:30</td>
                        <td class="py-3 px-5">C. Fall</td>
                        <td class="py-3 px-5">Suivi post-opératoire</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="confirmed" class="text-green-600">Confirmé</option>
                                <option value="pending" class="text-yellow-600">En attente</option>
                                <option value="cancelled" class="text-red-600">Annulé</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button class="mt-4 text-blue-600 hover:text-blue-800" onclick="toggleAppointments()">[🔍 Voir le programme complet]</button>
        </div>

        <!-- Emergency Cases -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">🚨 CAS D'URGENCE</h2>
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 px-5 text-blue-900 font-semibold">Patient</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Localisation</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Symptôme</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Assigné</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">Mariama Kane</td>
                        <td class="py-3 px-5">Lat 14.68, Long -17.45</td>
                        <td class="py-3 px-5">Céphalées intenses et vision floue</td>
                        <td class="py-3 px-5">À l'instant</td>
                        <td class="py-3 px-5">
                            <select class="border border-blue-300 rounded status-select" onchange="displaySelectedStatus(this)">
                                <option value="in-progress" class="text-blue-600">En cours</option>
                                <option value="resolved" class="text-green-600">Résolu</option>
                            </select>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Recent Medical Record Updates -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">📁 MISES À JOUR RÉCENTES DES DOSSIERS MÉDICAUX</h2>
            <ul class="list-disc pl-5">
                <li>Prescription ajoutée pour M. Diop – 10:05 AM</li>
                <li>Résultats de laboratoire examinés pour A. Ba – 09:40 AM</li>
                <li>Diagnostic mis à jour pour I. Ndiaye – 09:00 AM</li>
            </ul>
            <button class="mt-4 text-blue-600 hover:text-blue-800" onclick="window.location.href='{{ route('full-records-page') }}'">[📂 Voir tous les dossiers]</button>
        </div>

    </div>
</div>

<script>
    function displaySelectedStatus(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var statusText = document.createElement('span');
        statusText.textContent = selectedOption.text;
        statusText.className = selectedOption.className;
        selectElement.parentNode.replaceChild(statusText, selectElement);
    }

    function toggleAppointments() {
        var additionalRows = document.querySelectorAll('tbody tr.hidden');
        additionalRows.forEach(function(row) {
            row.classList.toggle('hidden');
        });
    }

    document.getElementById('update-status').addEventListener('click', function() {
        var statusText = document.getElementById('status-text');
        if (statusText.textContent.includes('Pas disponible')) {
            statusText.textContent = ' Disponible';
            statusText.classList.remove('text-red-600');
            statusText.classList.add('text-green-600');
        } else {
            statusText.textContent = ' Pas disponible';
            statusText.classList.remove('text-green-600');
            statusText.classList.add('text-red-600');
        }
    });

    function displaySelectedDoctor(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        if (selectedOption.value) {
            var doctorText = document.createElement('span');
            doctorText.textContent = selectedOption.text;
            doctorText.className = 'text-lg font-semibold text-blue-900';
            selectElement.parentNode.replaceChild(doctorText, selectElement);

            // Remove the label
            var labelElement = document.getElementById('doctor-label');
            labelElement.parentNode.removeChild(labelElement);
        }
    }

    function goBack() {
        window.history.back();
    }
</script>
@endsection
