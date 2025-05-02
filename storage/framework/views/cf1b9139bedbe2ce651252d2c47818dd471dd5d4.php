

<?php $__env->startSection('title', 'DOSSIER MÉDICAL DE: A. NDIAYE'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-10">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Back Button -->
        <div class="mb-8">
            <button onclick="goBack()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-full transition shadow-md">
                ⬅️ Retour
            </button>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-blue-900 border-b-4 border-blue-300 pb-2">
                📁 DOSSIER MÉDICAL 
            </h1>
        </div>

        <!-- Patient Selection Dropdown -->
        <div class="mb-8 text-center">
            <select id="patient-select" class="w-full p-2 border border-blue-300 rounded" onchange="displaySelectedPatient(this)">
                <option value="">Sélectionnez le patient</option>
                <option>A. Ndiaye</option>
                <option>M. Diop</option>
                <option>F. Diallo</option>
                <option>A. Ba</option>
                <option>M. Sarr</option>
            </select>
        </div>

        <!-- Patient Details -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">👤 Détails du Patient</h2>
            <p class="text-lg">Nom Complet: <span class="font-semibold">Aissatou Ndiaye</span></p>
            <p class="text-lg">Âge: <span class="font-semibold">52 ans</span></p>
            <p class="text-lg">Numéro de patient: <span class="font-semibold">#P1028</span></p>
            <p class="text-lg">Dernière visite: <span class="font-semibold">01/05/2025</span></p>
            <p class="text-lg">Médecin référent: <span class="font-semibold">Dr. Lamine Sow (Neurologie)</span></p>
        </div>

        <!-- Consultation Reason -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">🧾 Motif de Consultation</h2>
            <p class="text-lg">Douleur thoracique soudaine et difficulté à respirer.</p>
        </div>

        <!-- Diagnosis -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">📝 Diagnostic</h2>
            <p class="text-lg">Suspicion d'embolie pulmonaire. Tests complémentaires en cours.</p>
        </div>

        <!-- Prescriptions -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">💊 Prescriptions</h2>
            <ul class="list-disc pl-5 text-lg">
                <li>Anticoagulants (enoxaparine 40mg) – 1x/jour</li>
                <li>Repos strict</li>
                <li>Suivi à 48h</li>
            </ul>
        </div>

        <!-- Laboratory Results -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">🧪 Résultats de Laboratoire</h2>
            <ul class="list-disc pl-5 text-lg">
                <li>D-dimères: Élevés</li>
                <li>Saturation O2: 88%</li>
                <li>ECG: Anomalies détectées</li>
            </ul>
        </div>

        <!-- Medical History -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">📁 Antécédents Médicaux</h2>
            <ul class="list-disc pl-5 text-lg">
                <li>Hypertension</li>
                <li>Tabagisme chronique</li>
                <li>Aucun antécédent chirurgical majeur</li>
            </ul>
        </div>

        <!-- Doctor's Notes -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">🗒 Notes du Médecin</h2>
            <p class="text-lg">Patient anxieux. Surveillance nécessaire pendant 72h. Évaluer la réponse au traitement anticoagulant.</p>
        </div>

        <!-- Attached Documents -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">📎 Documents Joints</h2>
            <ul class="list-disc pl-5 text-lg">
                <li>[📄 ECG_01_05_2025.pdf]</li>
                <li>[📄 Bilan_Sanguin.pdf]</li>
            </ul>
        </div>

        <!-- Actions -->
        <div class="mb-8 bg-white rounded-xl shadow-lg p-6 text-center">
            <h2 class="text-2xl font-bold text-blue-900 mb-4">🔗 Actions</h2>
            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition mx-2">✏️ Modifier le dossier</button>
            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition mx-2">🧾 Nouvelle prescription</button>
            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition mx-2">📤 Ajouter un document</button>
        </div>

    </div>
</div>
<script>
    function displaySelectedPatient(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        if (selectedOption.value) {
            var patientText = document.createElement('span');
            patientText.textContent = selectedOption.text;
            patientText.className = 'text-lg font-semibold text-blue-900';
            selectElement.parentNode.replaceChild(patientText, selectElement);
        }
    }

    function goBack() {
        window.history.back();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/doctor/detailed_medical_record.blade.php ENDPATH**/ ?>