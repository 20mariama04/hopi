

<?php $__env->startSection('title', 'Bienvenue sur Sama Santé'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 flex flex-col justify-center">
    <div class="max-w-3xl mx-auto py-4 w-full">
        <!-- Hospital Icon/Illustration -->
        <div class="flex justify-center mb-4 mt-6">
            <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 48 48">
                <rect x="8" y="16" width="32" height="24" rx="4" fill="#e0e7ff"/>
                <rect x="20" y="24" width="8" height="16" rx="2" fill="#fff"/>
                <rect x="14" y="28" width="4" height="8" rx="1" fill="#fff"/>
                <rect x="30" y="28" width="4" height="8" rx="1" fill="#fff"/>
                <rect x="22" y="28" width="4" height="8" rx="1" fill="#c7d2fe"/>
                <rect x="0" y="40" width="48" height="4" rx="2" fill="#c7d2fe"/>
            </svg>
        </div>
        <h1 class="text-4xl font-extrabold text-center text-blue-900 mb-2">Bienvenue sur Sama Santé</h1>
        <p class="text-center text-lg text-gray-600 mb-6">Votre plateforme d'accès aux soins médicaux au Sénégal</p>
        <!-- Cartes de sélection -->
        <div class="flex flex-row flex-wrap gap-4 justify-center items-stretch">
            <a href="<?php echo e(route('patient.dashboard')); ?>" class="bg-white p-4 rounded-2xl shadow-lg hover:shadow-xl transition border border-blue-100 flex flex-col items-center w-56">
                <svg class="w-10 h-10 text-blue-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 2a4 4 0 00-4 4v2a4 4 0 004 4 4 4 0 004-4V6a4 4 0 00-4-4zM3 14a7 7 0 0114 0v1H3v-1z" />
                </svg>
                <h3 class="text-lg font-semibold text-blue-800">Je suis un Patient</h3>
                <p class="mt-2 text-sm text-gray-500 text-center">Accédez à vos services médicaux</p>
            </a>

            <a href="<?php echo e(route('hospital.dashboard')); ?>" class="bg-white p-4 rounded-2xl shadow-lg hover:shadow-xl transition border border-green-100 flex flex-col items-center w-56">
                <svg class="w-10 h-10 text-green-500 mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-3a1 1 0 100 2 1 1 0 000-2zm1 4H9v3a1 1 0 102 0v-3z" />
                </svg>
                <h3 class="text-lg font-semibold text-green-800">Personnel Médical</h3>
                <p class="mt-2 text-sm text-gray-500 text-center">Gestion des établissements de santé</p>
            </a>

            <a href="<?php echo e(route('patient.emergency.show')); ?>" class="bg-red-50 p-4 rounded-2xl shadow-lg hover:shadow-xl transition border border-red-100 flex flex-col items-center w-56">
                <svg class="w-10 h-10 text-red-600 mb-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4a1 1 0 112 0v1a1 1 0 11-2 0v-1zm0-8a1 1 0 112 0v5a1 1 0 11-2 0V6z" clip-rule="evenodd" />
                </svg>
                <h3 class="text-lg font-semibold text-red-700">Aide d'Urgence</h3>
                <p class="mt-2 text-sm text-red-600 text-center">Assistance médicale immédiate</p>
            </a>
        </div>

        <!-- Pied de page -->
        <div class="mt-8 text-sm text-gray-500 text-center">
            <p>
                +100 hôpitaux partenaires • Accès rapide • Assistance 24h/24  |  Contact : contact@samasante.sn | +221 33 123 45 67
            </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/welcome.blade.php ENDPATH**/ ?>