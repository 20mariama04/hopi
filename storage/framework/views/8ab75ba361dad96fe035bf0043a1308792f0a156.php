

<?php $__env->startSection('title', 'Mon dossier médical'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold mb-8">Mon dossier médical</h1>

    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Retour Button -->
        <div class="p-4">
            <button onclick="window.history.back()" class="bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 transition mb-2">
                &larr; Retour
            </button>
        </div>
        <!-- Tabs Navigation -->
        <div class="border-b">
            <nav class="flex -mb-px" id="records-tabs">
                <button class="tab-link px-6 py-3 border-b-2 border-blue-500 text-blue-600 font-medium focus:outline-none" data-tab="consultations">
                    Consultations
                </button>
                <button class="tab-link px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700 focus:outline-none" data-tab="prescriptions">
                    Ordonnances
                </button>
                <button class="tab-link px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700 focus:outline-none" data-tab="labs">
                    Résultats de laboratoire
                </button>
                <button class="tab-link px-6 py-3 border-b-2 border-transparent text-gray-500 hover:text-gray-700 focus:outline-none" data-tab="uploads">
                    Mes fichiers
                </button>
            </nav>
        </div>

        <div class="p-6">
            <!-- Consultations -->
            <div class="tab-content" id="consultations">
                <!-- Example Card -->
                <div class="border-2 border-dashed border-blue-300 rounded-lg p-4 bg-blue-50 shadow-sm mb-4">
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-blue-900">Consultation générale</h3>
                            <p class="text-sm text-blue-700">
                                Dr. Jean Dupont &bull; Cardiologie
                            </p>
                            <p class="mt-2 text-blue-800"><span class="font-semibold">Diagnostic :</span> Hypertension artérielle</p>
                            <p class="text-blue-800"><span class="font-semibold">Notes :</span> Suivi recommandé dans 6 mois.</p>
                        </div>
                        <div class="text-right mt-2 md:mt-0">
                            <span class="text-sm text-blue-700">12/04/2024</span>
                        </div>
                    </div>
                </div>
                <!-- End Example Card -->
                <div class="space-y-6">
                    <?php $__currentLoopData = $consultations ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $consultation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900"><?php echo e($consultation->title); ?></h3>
                                <p class="text-sm text-gray-500">
                                    Dr. <?php echo e($consultation->doctor_name); ?> &bull; <?php echo e($consultation->specialty); ?>

                                </p>
                                <p class="mt-2 text-gray-600"><span class="font-semibold">Diagnostic :</span> <?php echo e($consultation->diagnosis); ?></p>
                                <p class="text-gray-600"><span class="font-semibold">Notes :</span> <?php echo e($consultation->notes); ?></p>
                            </div>
                            <div class="text-right mt-2 md:mt-0">
                                <span class="text-sm text-gray-500"><?php echo e(\Carbon\Carbon::parse($consultation->date)->format('d/m/Y')); ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(empty($consultations) || count($consultations) === 0): ?>
                        <div class="text-gray-400 text-center py-8">Aucune consultation trouvée.</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Prescriptions -->
            <div class="tab-content hidden" id="prescriptions">
                <!-- Example Card -->
                <div class="border-2 border-dashed border-green-300 rounded-lg p-4 bg-green-50 shadow-sm mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-green-900">Atorvastatine</h3>
                        <p class="text-sm text-green-700">
                            Dosage : 20mg &bull; Fréquence : 1 fois/jour
                        </p>
                        <p class="mt-2 text-green-800"><span class="font-semibold">Statut :</span>
                            <span class="inline-block px-2 py-1 rounded-full text-xs bg-green-100 text-green-800">
                                Active
                            </span>
                        </p>
                    </div>
                    <div class="flex flex-col gap-2 mt-2 md:mt-0">
                        <a href="#" class="bg-green-100 text-green-700 px-3 py-1 rounded hover:bg-green-200 text-sm text-center">
                            Télécharger
                        </a>
                    </div>
                </div>
                <!-- End Example Card -->
                <div class="space-y-6">
                    <?php $__currentLoopData = $prescriptions ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prescription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900"><?php echo e($prescription->medication_name); ?></h3>
                            <p class="text-sm text-gray-500">
                                Dosage : <?php echo e($prescription->dosage); ?> &bull; Fréquence : <?php echo e($prescription->frequency); ?>

                            </p>
                            <p class="mt-2 text-gray-600"><span class="font-semibold">Statut :</span>
                                <span class="inline-block px-2 py-1 rounded-full text-xs <?php echo e($prescription->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600'); ?>">
                                    <?php echo e($prescription->status === 'active' ? 'Active' : 'Expirée'); ?>

                                </span>
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="<?php echo e(route('patient.prescriptions.download', $prescription->id)); ?>" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(empty($prescriptions) || count($prescriptions) === 0): ?>
                        <div class="text-gray-400 text-center py-8">Aucune ordonnance trouvée.</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Lab Results -->
            <div class="tab-content hidden" id="labs">
                <!-- Example Card -->
                <div class="border-2 border-dashed border-purple-300 rounded-lg p-4 bg-purple-50 shadow-sm mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-purple-900">Bilan sanguin</h3>
                        <p class="text-sm text-purple-700">Résumé : Cholestérol élevé</p>
                        <p class="mt-2 text-purple-800"><span class="font-semibold">Date :</span> 10/03/2024</p>
                    </div>
                    <div class="flex flex-col gap-2 mt-2 md:mt-0">
                        <a href="#" class="bg-purple-100 text-purple-700 px-3 py-1 rounded hover:bg-purple-200 text-sm text-center">
                            Télécharger le rapport
                        </a>
                    </div>
                </div>
                <!-- End Example Card -->
                <div class="space-y-6">
                    <?php $__currentLoopData = $labResults ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900"><?php echo e($lab->test_name); ?></h3>
                            <p class="text-sm text-gray-500">Résumé : <?php echo e($lab->summary); ?></p>
                            <p class="mt-2 text-gray-600"><span class="font-semibold">Date :</span> <?php echo e(\Carbon\Carbon::parse($lab->date)->format('d/m/Y')); ?></p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="<?php echo e(route('patient.labs.download', $lab->id)); ?>" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger le rapport
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(empty($labResults) || count($labResults) === 0): ?>
                        <div class="text-gray-400 text-center py-8">Aucun résultat de laboratoire trouvé.</div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Uploaded Files -->
            <div class="tab-content hidden" id="uploads">
                <!-- Example Card -->
                <div class="border-2 border-dashed border-gray-400 rounded-lg p-4 bg-gray-50 shadow-sm mb-4 flex flex-col md:flex-row justify-between items-start md:items-center">
                    <div>
                        <h3 class="text-lg font-medium text-gray-900">Scan_rapport_medical.pdf</h3>
                        <p class="text-sm text-gray-700">Ajouté le 01/05/2024</p>
                    </div>
                    <div class="flex flex-col gap-2 mt-2 md:mt-0">
                        <a href="#" class="bg-gray-200 text-gray-700 px-3 py-1 rounded hover:bg-gray-300 text-sm text-center">
                            Télécharger
                        </a>
                        <button class="bg-gray-100 text-gray-700 px-3 py-1 rounded hover:bg-gray-200 text-sm text-center">
                            Partager avec un médecin
                        </button>
                    </div>
                </div>
                <!-- End Example Card -->
                <div class="space-y-6">
                    <?php $__currentLoopData = $uploads ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900"><?php echo e($file->original_name); ?></h3>
                            <p class="text-sm text-gray-500">Ajouté le <?php echo e(\Carbon\Carbon::parse($file->created_at)->format('d/m/Y')); ?></p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="<?php echo e(route('patient.uploads.download', $file->id)); ?>" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger
                            </a>
                            <button onclick="shareFile('<?php echo e($file->id); ?>')" class="bg-green-100 text-green-700 px-3 py-1 rounded hover:bg-green-200 text-sm text-center">
                                Partager avec un médecin
                            </button>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(empty($uploads) || count($uploads) === 0): ?>
                        <div class="text-gray-400 text-center py-8">Aucun fichier téléchargé.</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Tab switching
    document.querySelectorAll('.tab-link').forEach(btn => {
        btn.addEventListener('click', function() {
            document.querySelectorAll('.tab-link').forEach(b => {
                b.classList.remove('border-blue-500', 'text-blue-600');
                b.classList.add('border-transparent', 'text-gray-500');
            });
            this.classList.add('border-blue-500', 'text-blue-600');
            this.classList.remove('border-transparent', 'text-gray-500');
            document.querySelectorAll('.tab-content').forEach(tab => tab.classList.add('hidden'));
            document.getElementById(this.getAttribute('data-tab')).classList.remove('hidden');
        });
    });

    // Example share function (replace with real sharing logic)
    function shareFile(fileId) {
        // Here you could open a modal to select a doctor and generate a secure link
        alert('Lien sécurisé généré pour le fichier ID: ' + fileId + '. Partagez ce lien avec votre médecin.');
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/patient/medical-records.blade.php ENDPATH**/ ?>