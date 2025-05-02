

<?php $__env->startSection('title', 'Annuaire des Médecins'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-10">
    <div class="max-w-6xl mx-auto px-4">

        <!-- Back Button -->
        <div class="mb-4">
            <button onclick="window.history.back()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 py-2 px-4 rounded-full transition shadow-md">
                ⬅️ Retour
            </button>
        </div>

        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-4xl font-extrabold text-blue-900">
                👨‍⚕️ ANNUAIRE DES MEDECINS
            </h1>
        </div>

        <!-- Doctors Table -->
        <div class="bg-white rounded-xl shadow-lg p-8">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b">
                        <th class="py-3 px-5 text-blue-900 font-semibold">👨‍⚕️ Nom</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">🩺 Spécialité</th>
                        <th class="py-3 px-5 text-blue-900 font-semibold">📊 Tableau de Bord</th> <!-- Restored column -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $doctors = [
                            (object) ['id' => 1, 'name' => 'Dr. Salif Mbaye', 'specialty' => (object) ['name' => 'Urgences cardio-respiratoires']],
                            (object) ['id' => 2, 'name' => 'Dr. Ndeye Sy', 'specialty' => (object) ['name' => 'Neurologie']],
                            (object) ['id' => 3, 'name' => 'Dr. Binta Camara', 'specialty' => (object) ['name' => 'Pédiatrie']],
                            (object) ['id' => 4, 'name' => 'Dr. Daouda Gueye', 'specialty' => (object) ['name' => 'Chirurgie orthopédique']],
                            (object) ['id' => 5, 'name' => 'Dr. Rokhaya Ndiaye', 'specialty' => (object) ['name' => 'Gastroentérologie']],
                            (object) ['id' => 6, 'name' => 'Dr. Malick Faye', 'specialty' => (object) ['name' => 'Chirurgie générale']],
                            (object) ['id' => 7, 'name' => 'Dr. Aissatou Fall', 'specialty' => (object) ['name' => 'Dermatologie']],
                            (object) ['id' => 8, 'name' => 'Dr. Lamine Sow', 'specialty' => (object) ['name' => 'Neurologie']],
                            (object) ['id' => 9, 'name' => 'Dr. Sokhna Thiam', 'specialty' => (object) ['name' => 'Cardiologie']],
                            (object) ['id' => 10, 'name' => 'Dr. El Hadji Kane', 'specialty' => (object) ['name' => 'Allergologie']],
                        ];
                    ?>
                    <?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr class="border-b hover:bg-blue-100 transition">
                            <td class="py-3 px-5"><?php echo e($doctor->name); ?></td>
                            <td class="py-3 px-5"><?php echo e($doctor->specialty->name ?? 'Spécialité non disponible'); ?></td>
                            <td class="py-3 px-5">
                                <a href="<?php echo e(route('doctor.dashboard', ['id' => $doctor->id])); ?>" class="text-blue-600 hover:text-blue-800">Voir Tableau de Bord</a> <!-- Restored link -->
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3" class="py-4 text-center text-gray-500">
                                Aucun médecin trouvé dans la base de données.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            <!-- Pagination logic can be added here if needed -->
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/doctor/profile.blade.php ENDPATH**/ ?>