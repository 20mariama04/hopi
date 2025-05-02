

<?php $__env->startSection('title', 'Tableau de Bord - Personnel Médical'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-100 flex items-center justify-center px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-2xl mx-auto py-12">
        <!-- Hospital Icon/Illustration -->
        <div class="flex justify-center mb-6">
            <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 48 48">
                <rect x="8" y="16" width="32" height="24" rx="4" fill="#e0e7ff"/>
                <rect x="20" y="24" width="8" height="16" rx="2" fill="#fff"/>
                <rect x="14" y="28" width="4" height="8" rx="1" fill="#fff"/>
                <rect x="30" y="28" width="4" height="8" rx="1" fill="#fff"/>
                <rect x="22" y="28" width="4" height="8" rx="1" fill="#c7d2fe"/>
                <rect x="0" y="40" width="48" height="4" rx="2" fill="#c7d2fe"/>
            </svg>
        </div>
        <!-- Welcome Header -->
        <h1 class="text-3xl font-extrabold text-center text-blue-900 mb-2">Bienvenue sur le Tableau de Bord</h1>
        <p class="text-center text-gray-600 mb-8">Veuillez sélectionner votre rôle pour continuer</p>

        <!-- Role Selection Buttons -->
        <div class="flex flex-row flex-wrap justify-center items-center gap-8">
            <a href="<?php echo e(route('doctor.profile')); ?>" class="flex flex-row items-center bg-blue-50 hover:bg-blue-100 border border-blue-200 rounded-xl px-6 py-4 shadow-lg transition w-64">
                <svg class="w-10 h-10 text-blue-600 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    <circle cx="12" cy="7" r="4" />
                </svg>
                <div>
                    <span class="text-lg font-semibold text-blue-800 block">Je suis un Médecin</span>
                    <span class="text-sm text-blue-700 block">Disponibilité &amp; rendez-vous</span>
                </div>
            </a>
            <a href="<?php echo e(route('hospital.admin-dashboard')); ?>" class="flex flex-row items-center bg-green-50 hover:bg-green-100 border border-green-200 rounded-xl px-6 py-4 shadow-lg transition w-64">
                <svg class="w-10 h-10 text-green-600 mr-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V7" />
                    <path d="M16 3v4M8 3v4M4 11h16" />
                </svg>
                <div>
                    <span class="text-lg font-semibold text-green-800 block">Je suis dans l’Administration</span>
                    <span class="text-sm text-green-700 block">Lits, urgences &amp; données</span>
                </div>
            </a>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/hospital/dashboard.blade.php ENDPATH**/ ?>