

<?php $__env->startSection('title', 'DOSSIERS MÉDICAUX DU DR. LAMINE SOW'); ?>

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
            <h1 class="text-4xl font-extrabold text-blue-900">
                📁 DOSSIERS MÉDICAUX
            </h1>
        </div>

        <!-- Doctor Selection Dropdown -->
        <div class="mb-8 text-center">
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

        <!-- Search Patient -->
        <div class="mb-8 text-center">
            <select id="patient-select" class="w-full p-2 border border-blue-300 rounded">
                <option value="">Sélectionnez le patient</option>
                <option>A. Ndiaye</option>
                <option>M. Diop</option>
                <option>F. Diallo</option>
                <option>A. Ba</option>
                <option>M. Sarr</option>
            </select>
            <button class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded transition">🔍 Search Patient</button>
        </div>

        <!-- Medical Records Table -->
        <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 px-5 text-blue-900 font-semibold">👤 Patient</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">📅 Date</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">📄 Type de dossier</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">📝 Résumé</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">🔗 Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">A. Ndiaye</td>
                        <td class="py-3 px-5">01/05/2025</td>
                        <td class="py-3 px-5">Prescription</td>
                        <td class="py-3 px-5">Paracétamol 500mg</td>
                        <td class="py-3 px-5">
                            <a href="<?php echo e(route('doctor.detailed_record', ['id' => 1])); ?>" class="text-blue-600 hover:text-blue-800">[📂 Voir]</a>
                        </td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">M. Diop</td>
                        <td class="py-3 px-5">01/05/2025</td>
                        <td class="py-3 px-5">Résultats de labo</td>
                        <td class="py-3 px-5">Bilan sanguin complet</td>
                        <td class="py-3 px-5"><button class="text-blue-600 hover:text-blue-800">[📂 Voir]</button></td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">F. Diallo</td>
                        <td class="py-3 px-5">30/04/2025</td>
                        <td class="py-3 px-5">Consultation</td>
                        <td class="py-3 px-5">Douleur thoracique</td>
                        <td class="py-3 px-5"><button class="text-blue-600 hover:text-blue-800">[📂 Voir]</button></td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">A. Ba</td>
                        <td class="py-3 px-5">30/04/2025</td>
                        <td class="py-3 px-5">Résultats de labo</td>
                        <td class="py-3 px-5">IRM cérébrale normale</td>
                        <td class="py-3 px-5"><button class="text-blue-600 hover:text-blue-800">[📂 Voir]</button></td>
                    </tr>
                    <tr class="border-b hover:bg-blue-100 transition">
                        <td class="py-3 px-5">M. Sarr</td>
                        <td class="py-3 px-5">29/04/2025</td>
                        <td class="py-3 px-5">Prescription</td>
                        <td class="py-3 px-5">Ibuprofène 400mg</td>
                        <td class="py-3 px-5"><button class="text-blue-600 hover:text-blue-800">[📂 Voir]</button></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Add New Record -->
        <div class="text-center">
            <button class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded transition">📁 Ajouter un nouveau dossier</button>
        </div>

    </div>
</div>

<script>
    function displaySelectedDoctor(selectElement) {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        if (selectedOption.value) {
            var doctorText = document.createElement('span');
            doctorText.textContent = selectedOption.text;
            doctorText.className = 'text-lg font-semibold text-blue-900';
            selectElement.parentNode.replaceChild(doctorText, selectElement);
        }
    }

    function goBack() {
        window.history.back();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/doctor/medical_records.blade.php ENDPATH**/ ?>