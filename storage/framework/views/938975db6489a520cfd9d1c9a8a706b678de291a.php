

<?php $__env->startSection('title', 'Mes rendez-vous'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-2xl font-bold mb-8">Mes rendez-vous</h1>

    <!-- Bouton Retour -->
    <button onclick="window.history.back()" class="mb-6 flex items-center text-blue-600 hover:text-blue-800 font-medium transition">
        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Retour
    </button>
    <!-- Navigation des onglets -->
    <div class="border-b border-gray-200 mb-8">
        <nav class="-mb-px flex space-x-8">
            <button class="tab-button border-b-2 border-blue-500 text-blue-600 px-4 py-4 text-sm font-medium" data-tab="upcoming">
                Rendez-vous à venir
            </button>
            <button class="tab-button border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-4 text-sm font-medium" data-tab="past">
                Rendez-vous passés
            </button>
            <button class="tab-button border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 px-4 py-4 text-sm font-medium" data-tab="book">
                Prendre un rendez-vous
            </button>
        </nav>
    </div>

    <!-- Contenu des onglets -->
    <div class="tab-content" id="upcoming">
        <h2 class="text-xl font-semibold mb-6">Rendez-vous à venir</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Updated Appointment Details -->
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Dr. Lamine Sow</h3>
                        <p class="text-sm text-gray-600">Cardiologie</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        Confirmé
                    </span>
                </div>
                
                <div class="space-y-2">
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Hôpital Général de Dakar
                    </p>
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Avenue Blaise Diagne, Dakar
                    </p>
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        05/05/2025 à 09:30 AM
                    </p>
                </div>
                
                <div class="mt-6 flex space-x-3">
                    <button class="px-4 py-2 bg-red-100 text-red-700 rounded-md hover:bg-red-200 transition-colors text-sm font-medium">
                        Annuler le rendez-vous
                    </button>
                    <button class="px-4 py-2 bg-blue-100 text-blue-700 rounded-md hover:bg-blue-200 transition-colors text-sm font-medium">
                        Replanifier
                    </button>
                </div>
            </div>
            <!-- End of Updated Appointment Details -->
        </div>
    </div>

    <div class="tab-content hidden" id="past">
        <h2 class="text-xl font-semibold mb-6">Rendez-vous passés</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Sample Past Appointment Card -->
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-gray-300">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800">Dr. Aissatou Ndiaye</h3>
                        <p class="text-sm text-gray-600">Pédiatrie</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                        Terminé
                    </span>
                </div>
                
                <div class="space-y-2">
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Hôpital Principal de Dakar
                    </p>
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Rue de la République, Dakar
                    </p>
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        01/01/2023 à 10:00 AM
                    </p>
                </div>
            </div>
            <!-- End of Sample Past Appointment Card -->
            <?php $__currentLoopData = $pastAppointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-gray-300">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800"><?php echo e($appointment->doctor->name); ?></h3>
                        <p class="text-sm text-gray-600"><?php echo e($appointment->doctor->specialty); ?></p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                        Terminé
                    </span>
                </div>
                
                <div class="space-y-2">
                    <p class="flex items-center text-gray-700">
                        <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                    <?php echo e($appointment->hospital->name); ?>

                </p>
                <p class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <?php echo e($appointment->hospital->address); ?>

                </p>
                <p class="flex items-center text-gray-700">
                    <svg class="h-5 w-5 text-gray-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <?php echo e($appointment->date->format('d/m/Y')); ?> à <?php echo e($appointment->time); ?>

                </p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="tab-content hidden" id="book">
        <h2 class="text-xl font-semibold mb-6">Prendre un nouveau rendez-vous</h2>
        <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
            <form action="<?php echo e(route('patient.appointments.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Hospital Dropdown -->
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Sélectionner un hôpital</label>
                        <select name="hospital_id" id="hospital-select" class="w-full rounded-md border-gray-300 shadow-sm" required>
                            <option value="">Sélectionner un hôpital</option>
                            <option value="1">Hôpital Général de Dakar</option>
                            <option value="2">Centre Hospitalier National Universitaire de Fann</option>
                            <option value="3">Hôpital Principal de Dakar</option>
                            <option value="4">Hôpital Dalal Jamm de Guédiawaye</option>
                            <option value="5">Centre de Santé Philippe Maguilen Senghor</option>
                            <option value="6">Hôpital Abass Ndao</option>
                            <option value="7">Hôpital de Pikine</option>
                            <option value="8">Hôpital Régional de Thiès</option>
                            <option value="9">Centre Médical de Ziguinchor</option>
                            <option value="10">Polyclinique SantéPlus de Mermoz</option>
                        </select>
                    </div>
                    <!-- End of Hospital Dropdown -->
                    
                    <!-- Specialty Dropdown -->
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Sélectionner une spécialité</label>
                        <select name="specialty_id" id="specialty-select" class="w-full rounded-md border-gray-300 shadow-sm" required>
                            <option value="">Sélectionner une spécialité</option>
                            <option value="1">Cardiologie</option>
                            <option value="2">Neurologie</option>
                            <option value="3">Pédiatrie</option>
                            <option value="4">Gynécologie Obstétrique</option>
                            <option value="5">Chirurgie Générale</option>
                            <option value="6">Dermatologie</option>
                            <option value="7">Gastroentérologie</option>
                            <option value="8">Psychiatrie</option>
                            <option value="9">Urgences Médicales</option>
                            <option value="10">Ophtalmologie</option>
                        </select>
                    </div>
                    <!-- End of Specialty Dropdown -->
                    
                    <!-- Doctor Dropdown -->
                    <div class="col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Sélectionner un médecin</label>
                        <select name="doctor_id" id="doctor-select" class="w-full rounded-md border-gray-300 shadow-sm" required>
                            <option value="">Sélectionner un médecin</option>
                            <option value="1">Dr. Fatou Ndiaye</option>
                            <option value="2">Dr. Mamadou Diop</option>
                            <option value="3">Dr. Aminata Sow</option>
                            <option value="4">Dr. Ibrahima Fall</option>
                            <option value="5">Dr. Khadija Ba</option>
                            <option value="6">Dr. Cheikh Sarr</option>
                            <option value="7">Dr. Adama Diallo</option>
                            <option value="8">Dr. Mariama Kane</option>
                            <option value="9">Dr. Ousmane Cissé</option>
                            <option value="10">Dr. Awa Gaye</option>
                        </select>
                    </div>
                    <!-- End of Doctor Dropdown -->
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Date</label>
                        <input type="date" name="date" id="appointment-date" class="w-full rounded-md border-gray-300 shadow-sm" min="<?php echo e(date('Y-m-d')); ?>" required>
                    </div>
                    
                    <!-- Time Slot Dropdown -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Créneau horaire</label>
                        <select name="time" id="time-slot" class="w-full rounded-md border-gray-300 shadow-sm" required>
                            <option value="">Sélectionner une heure</option>
                            <option value="08:00 – 08:15">08:00 – 08:15</option>
                            <option value="08:15 – 08:30">08:15 – 08:30</option>
                            <option value="08:30 – 08:45">08:30 – 08:45</option>
                            <option value="08:45 – 09:00">08:45 – 09:00</option>
                            <option value="09:00 – 09:15">09:00 – 09:15</option>
                            <option value="09:15 – 09:30">09:15 – 09:30</option>
                            <option value="09:30 – 09:45">09:30 – 09:45</option>
                            <option value="09:45 – 10:00">09:45 – 10:00</option>
                            <option value="10:00 – 10:15">10:00 – 10:15</option>
                            <option value="10:15 – 10:30">10:15 – 10:30</option>
                            <option value="10:30 – 10:45">10:30 – 10:45</option>
                            <option value="10:45 – 11:00">10:45 – 11:00</option>
                            <option value="11:00 – 11:15">11:00 – 11:15</option>
                            <option value="11:15 – 11:30">11:15 – 11:30</option>
                            <option value="11:30 – 11:45">11:30 – 11:45</option>
                            <option value="11:45 – 12:00">11:45 – 12:00</option>
                            <option value="14:00 – 14:15">14:00 – 14:15</option>
                            <option value="14:15 – 14:30">14:15 – 14:30</option>
                            <option value="14:30 – 14:45">14:30 – 14:45</option>
                            <option value="14:45 – 15:00">14:45 – 15:00</option>
                            <option value="15:00 – 15:15">15:00 – 15:15</option>
                            <option value="15:15 – 15:30">15:15 – 15:30</option>
                            <option value="15:30 – 15:45">15:30 – 15:45</option>
                            <option value="15:45 – 16:00">15:45 – 16:00</option>
                            <option value="16:00 – 16:15">16:00 – 16:15</option>
                            <option value="16:15 – 16:30">16:15 – 16:30</option>
                            <option value="16:30 – 16:45">16:30 – 16:45</option>
                            <option value="16:45 – 17:00">16:45 – 17:00</option>
                        </select>
                    </div>
                    <!-- End of Time Slot Dropdown -->
                </div>
                
                <div class="mt-8">
                    <button type="submit" class="w-full md:w-auto px-6 py-3 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                        Prendre rendez-vous
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Tab switching functionality
    document.querySelectorAll('.tab-button').forEach(button => {
        button.addEventListener('click', () => {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            // Show selected tab
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.remove('hidden');
            
            // Update active tab styling
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            button.classList.add('border-blue-500', 'text-blue-600');
            button.classList.remove('border-transparent', 'text-gray-500');
        });
    });

    // Doctor selection handler
    document.getElementById('doctor-select').addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        document.getElementById('hospital-display').value = selectedOption.getAttribute('data-hospital');
        document.getElementById('specialty-display').value = selectedOption.getAttribute('data-specialty');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/patient/appointments.blade.php ENDPATH**/ ?>