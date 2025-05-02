

<?php $__env->startSection('title', 'Emergency Requests'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 relative">
    <!-- Removed Button to navigate to emergency-confirmation.blade.php -->
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Emergency Requests</h1>
                <p class="text-gray-600">Active emergency assistance requests</p>
            </div>
            
        </div>

        <!-- Real-time Requests List -->
        <div class="divide-y">
            <?php $__currentLoopData = $emergencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emergency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                <div class="flex items-start space-x-6">
                    <div class="flex-shrink-0">
                        <div class="w-4 h-4 rounded-full 
                            <?php echo e($emergency['status'] === 'Pending' ? 'bg-yellow-500 animate-pulse' : 'bg-blue-500'); ?>">
                        </div>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <h2 class="text-lg font-medium text-gray-900">
                                <?php echo e($emergency['description']); ?> - <?php echo e($emergency['patient']); ?>

                            </h2>
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                <?php echo e($emergency['status'] === 'Pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800'); ?>">
                                <?php echo e($emergency['status'] === 'Pending' ? 'En attente' : 'Pris en charge'); ?>

                            </span>
                        </div>
                        <div class="mt-2 text-sm">
                            <?php if(isset($emergency['created_at'])): ?>
                            <p class="text-gray-500">Reçu: <?php echo e(\Carbon\Carbon::parse($emergency['created_at'])->diffForHumans()); ?></p>
                            <?php else: ?>
                            <p class="text-gray-500">Reçu: Date not available</p>
                            <?php endif; ?>
                            <p class="text-gray-500">Location: <?php echo e($emergency['location']); ?></p>
                            <?php if($emergency['status'] !== 'Pending'): ?>
                            <p class="text-gray-700 mt-1">Médecin: Dr. <?php echo e($emergency['doctor']['name']); ?></p>
                            <?php endif; ?>
                        </div>
                        <?php if($emergency['status'] === 'Pris en charge'): ?>
                        <div class="mt-4 flex justify-center">
                            <button onclick="window.location.href='<?php echo e(route('patient.emergency-confirmation')); ?>'" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                                →
                            </button>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="flex-shrink-0 space-y-2">
                        <?php if($emergency['status'] === 'Pending'): ?>
                        <button onclick="document.getElementById('assign-form-<?php echo e($emergency['id']); ?>').classList.toggle('hidden')"
                            class="w-full bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 transition">
                            Accepter l'Urgence
                        </button>
                        <?php endif; ?>
                        <div id="assign-form-<?php echo e($emergency['id']); ?>" class="hidden mt-4 bg-gray-50 p-4 rounded-lg">
                            <form action="<?php echo e(route('emergencies.assign', $emergency['id'])); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <div class="flex gap-4">
                                    <select name="doctor_id" class="rounded-md border-gray-300 shadow-sm flex-1">
                                        <?php $__empty_1 = true; $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <option value="<?php echo e($doctor['id']); ?>">Dr. <?php echo e($doctor['name']); ?> (<?php echo e($doctor['specialty']['name']); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <option value="" disabled>Aucun médecin disponible</option>
                                        <?php endif; ?>
                                    </select>
                                    <button type="button" onclick="updateStatus(<?php echo e($emergency['id']); ?>, 'Assigned')"
                                        class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                                        Mettre à jour le statut
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- Arrow button placed here -->
                        <div class="mt-4 flex justify-center">
                            <button onclick="window.location.href='<?php echo e(route('doctor.dashboard', ['id' => $emergency['doctor']['id']])); ?>'" class="px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 transition">
                                →
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <?php $__env->startPush('scripts'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle all emergency assignment forms
            document.querySelectorAll('form[id^="assign-form-"]').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission
                    
                    const submitButton = this.querySelector('button[type="submit"]');
                    submitButton.disabled = true;
                    submitButton.innerHTML = 'Processing...';
                    
                    const formData = new FormData(this);
                    
                    fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        },
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if(data.success) {
                            // Update the status on the client side
                            const statusElement = this.closest('.p-6').querySelector('span');
                            statusElement.textContent = 'Pris en charge';
                            statusElement.classList.remove('bg-yellow-100', 'text-yellow-800');
                            statusElement.classList.add('bg-blue-100', 'text-blue-800');
                        } else {
                            alert('Error: ' + (data.message || 'Unknown error occurred'));
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    })
                    .finally(() => {
                        submitButton.disabled = false;
                        submitButton.innerHTML = 'Assigner';
                    });
                });
            });
    
            function updateStatus(emergencyId) {
                // Directly update the status on the client side
                const statusElement = document.querySelector(`#assign-form-${emergencyId}`).closest('.p-6').querySelector('span');
                statusElement.textContent = 'Pris en charge';
                statusElement.classList.remove('bg-yellow-100', 'text-yellow-800');
                statusElement.classList.add('bg-blue-100', 'text-blue-800');
            }
        });
    </script>
    <?php $__env->stopPush(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/hospital/emergency-requests.blade.php ENDPATH**/ ?>