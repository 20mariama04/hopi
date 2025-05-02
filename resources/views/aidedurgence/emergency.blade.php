@extends('layouts.app')

@section('title', "Aide d'Urgence")

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8 flex items-center justify-center">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center">
        <!-- Countdown Section -->
        <div id="countdown-section" class="w-full max-w-md flex flex-col items-center justify-center py-12" style="display: none;">
            <div class="text-xl font-bold text-red-700 mb-4 flex items-center justify-center">
                🚨 Demande d'Urgence en cours
            </div>
            <div class="relative flex items-center justify-center mb-4" style="height: 120px; width: 120px;">
                <!-- Circular Progress SVG -->
                <svg id="countdown-circle" width="120" height="120" class="absolute top-0 left-0">
                    <circle cx="60" cy="60" r="54" stroke="#fee2e2" stroke-width="12" fill="none"/>
                    <circle id="progress-bar" cx="60" cy="60" r="54" stroke="#ef4444" stroke-width="12" fill="none"
                        stroke-linecap="round" stroke-dasharray="339.292" stroke-dashoffset="0"
                        style="transition: stroke-dashoffset 1s linear;"/>
                </svg>
                <!-- Animated Countdown Number -->
                <span id="countdown-number"
                      class="text-6xl font-extrabold text-red-600 animate-pulse"
                      style="transition: transform 0.5s cubic-bezier(.4,2,.6,1);">
                    3
                </span>
            </div>
            <div class="text-base text-blue-700 mb-8 font-medium animate-fade-in-down" id="prep-message">
                Préparation de votre demande...
            </div>
            <button id="cancel-countdown" class="bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-8 rounded-xl text-lg shadow transition w-full max-w-xs">
                🛑 Annuler l'Urgence
            </button>
        </div>

        <!-- Emergency Description Section -->
        <form id="desc-section" action="{{ route('emergency.describe') }}" method="POST" class="w-full max-w-2xl bg-white rounded-2xl shadow p-12 flex flex-col items-center justify-center" style="display: flex;">
            @csrf
            <h2 class="text-3xl font-bold text-blue-700 mb-6">Décrivez votre urgence</h2>
            
            <!-- Patient Dropdown -->
            <select id="patient-dropdown" class="w-full border border-gray-300 rounded p-2 mb-4">
                <option value="">Sélectionnez un patient...</option>
                <option value="Fatou Ndiaye">Fatou Ndiaye</option>
                <option value="Mamadou Diop">Mamadou Diop</option>
                <option value="Aminata Sow">Aminata Sow</option>
                <option value="Ibrahima Fall">Ibrahima Fall</option>
                <option value="Khadija Ba">Khadija Ba</option>
                <option value="Cheikh Sarr">Cheikh Sarr</option>
                <option value="Adama Diallo">Adama Diallo</option>
                <option value="Mariama Kane">Mariama Kane</option>
                <option value="Ousmane Cissé">Ousmane Cissé</option>
                <option value="Awa Gaye">Awa Gaye</option>
            </select>

            <!-- Location Dropdown -->
            <select id="location-dropdown" class="w-full border border-gray-300 rounded p-2 mb-4">
                <option value="">Sélectionnez un lieu...</option>
                <option value="Plateau">Plateau</option>
                <option value="Médina">Médina</option>
                <option value="Liberté 6">Liberté 6</option>
                <option value="Fann-Point E-Amitié">Fann-Point E-Amitié</option>
                <option value="Ouakam">Ouakam</option>
                <option value="Yoff">Yoff</option>
                <option value="Parcelles Assainies">Parcelles Assainies</option>
                <option value="Grand Yoff">Grand Yoff</option>
                <option value="Hann Maristes">Hann Maristes</option>
                <option value="Guédiawaye">Guédiawaye</option>
            </select>
            <textarea id="emergency-desc" name="description" class="w-full border border-gray-300 rounded p-2 mb-4" rows="4" placeholder="Décrivez votre urgence ici..."></textarea>
            <button type="button" id="submit-emergency-desc" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition text-lg font-semibold">Envoyer</button>
        </form>

        <!-- Evaluation Section -->
        <div id="evaluation-section" class="w-full max-w-md bg-white rounded-2xl shadow p-6 flex flex-col items-center justify-center relative" style="display: none;">
            <div class="w-full flex flex-col items-center mb-4">
                <svg class="w-16 h-16 text-blue-500 mb-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                </svg>
                
                <h2 class="text-xl font-semibold text-blue-700 mb-2">Évaluation de votre urgence en cours</h2>
                <p class="text-gray-600 text-center">Notre équipe médicale analyse votre demande pour vous assigner le meilleur spécialiste.</p>
            </div>
            <!-- Arrow Button -->
            <a href="{{ route('hospital.emergency-requests') }}" class="absolute top-4 right-4 bg-blue-600 hover:bg-blue-700 text-white p-2 rounded-full shadow-lg">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
        <!-- Emergency Requests Section -->
        <div class="bg-white rounded-xl shadow border border-red-100 p-6 mb-10" style="display: none;">
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
        <div class="bg-white rounded-xl shadow border border-blue-100 p-6" style="display: none;">
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
@push('scripts')
<script>
    // Elements
    const countdownSection = document.getElementById('countdown-section');
    const countdownNumber = document.getElementById('countdown-number');
    const cancelCountdownBtn = document.getElementById('cancel-countdown');
    const descSection = document.getElementById('desc-section');
    const submitDescBtn = document.getElementById('submit-emergency-desc');
    const descInput = document.getElementById('emergency-desc');
    const evaluationSection = document.getElementById('evaluation-section');
    const progressBar = document.getElementById('progress-bar');
    const circleLength = 2 * Math.PI * 54; // r=54

    let countdown = 3;
    let timer = null;

    function animateCountdown(num) {
        countdownNumber.style.transform = 'scale(1.2)';
        setTimeout(() => {
            countdownNumber.style.transform = 'scale(1)';
        }, 200);
    }

    function updateCircleProgress(value) {
        const percent = value / 3;
        progressBar.style.strokeDashoffset = circleLength * (1 - percent);
    }

    function startCountdown() {
        countdown = 3;
        countdownNumber.textContent = countdown;
        updateCircleProgress(countdown);
        countdownSection.style.display = 'flex';
        descSection.style.display = 'none';
        animateCountdown(countdown);

        timer = setInterval(() => {
            countdown--;
            if (countdown >= 0) {
                countdownNumber.textContent = countdown;
                animateCountdown(countdown);
                updateCircleProgress(countdown);
            }
            if (countdown <= 0) {
                clearInterval(timer);
                countdownSection.style.display = 'none';
                descSection.style.display = 'flex';
            }
        }, 1000);
    }

    cancelCountdownBtn.addEventListener('click', function() {
        clearInterval(timer);
        window.history.back(); // Redirect to the previous page
    });

    submitDescBtn.addEventListener('click', function() {
        const desc = descInput.value.trim();
        if (!desc) {
            alert('Veuillez décrire votre urgence');
            return;
        }
        submitDescBtn.disabled = true;
        submitDescBtn.textContent = 'Envoi en cours...';

        // Show evaluation message
        descSection.style.display = 'none';
        evaluationSection.style.display = 'flex';

        // Removed logic to switch back to the description section
    });

    // Start countdown on page load
    document.addEventListener('DOMContentLoaded', function() {
        startCountdown();
    });
</script>
@endpush
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Elements
        const patientDropdown = document.getElementById('patient-dropdown');
        const descInput = document.getElementById('emergency-desc');
        const locationDropdown = document.getElementById('location-dropdown');
    
        // Patient data
        const patientData = {
            "Fatou Ndiaye": { description: "Douleur thoracique soudaine et difficulté à respirer.", location: "Plateau" },
            "Mamadou Diop": { description: "Perte de connaissance après une chute brutale.", location: "Médina" },
            "Aminata Sow": { description: "Fièvre très élevée accompagnée de convulsions.", location: "Liberté 6" },
            "Ibrahima Fall": { description: "Blessure profonde à la jambe après un accident de moto.", location: "Fann-Point E-Amitié" },
            "Khadija Ba": { description: "Vomissements persistants et douleurs abdominales aiguës.", location: "Ouakam" },
            "Cheikh Sarr": { description: "Coupure sévère au bras avec perte de sang importante.", location: "Yoff" },
            "Adama Diallo": { description: "Brûlure au second degré causée par de l’huile chaude.", location: "Parcelles Assainies" },
            "Mariama Kane": { description: "Céphalées intenses et vision floue soudaines.", location: "Grand Yoff" },
            "Ousmane Cissé": { description: "Douleur thoracique suite à un effort physique intense.", location: "Hann Maristes" },
            "Awa Gaye": { description: "Réaction allergique sévère avec gonflement du visage.", location: "Guédiawaye" }
        };
    
        // Update description and location based on selected patient
        patientDropdown.addEventListener('change', function() {
            const selectedPatient = patientDropdown.value;
            const patientInfo = patientData[selectedPatient] || {};
            descInput.value = patientInfo.description || '';
            locationDropdown.value = patientInfo.location || '';
        });
    });
</script>
@endpush