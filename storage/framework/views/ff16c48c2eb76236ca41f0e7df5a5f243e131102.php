

<?php $__env->startSection('title', 'Gérer la Disponibilité'); ?>

<?php $__env->startSection('content'); ?>
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <h1 class="text-2xl font-bold text-gray-900">Gérer la Disponibilité de l'Hôpital</h1>
            <p class="text-gray-600">Mettre à jour la disponibilité et la capacité des ressources</p>
        </div>

        <div class="p-6">
            <!-- Section Capacité des Lits -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Capacité des Lits</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">Service d'Urgence</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="12">
                            <span class="ml-2 text-sm text-gray-500">/ 20 total</span>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">Service Général</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="45">
                            <span class="ml-2 text-sm text-gray-500">/ 60 total</span>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">USI</label>
                        <div class="mt-2 flex items-center">
                            <input type="number" class="form-input rounded-md w-20" value="8">
                            <span class="ml-2 text-sm text-gray-500">/ 15 total</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Disponibilité des Médecins -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Disponibilité des Médecins</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Médecins d'Urgence</label>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span>Dr. Smith</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Dr. Johnson</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Médecins Généralistes</label>
                        <div class="space-y-2">
                            <div class="flex items-center justify-between">
                                <span>Dr. Williams</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                            <div class="flex items-center justify-between">
                                <span>Dr. Brown</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input type="checkbox" class="sr-only peer" checked>
                                    <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Demandes d'Urgence -->
            <div class="mb-8">
                <h2 class="text-lg font-semibold mb-4">Demandes d'Urgence</h2>
                <div class="border rounded-lg overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Heure</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Patient</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10:30 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">John Doe</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">En attente</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-blue-600 hover:text-blue-900 mr-2">Accepter</button>
                                    <button class="text-red-600 hover:text-red-900">Rejeter</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">09:15 AM</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jane Smith</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Accepté</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <button class="text-blue-600 hover:text-blue-900">Voir</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Section Activité Récente -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Activité Récente</h2>
                <div class="space-y-4">
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Mise à jour du nombre de lits en USI à 8/15</p>
                        <p class="text-xs text-gray-500">Il y a 10 minutes</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Demande d'urgence acceptée de John Doe</p>
                        <p class="text-xs text-gray-500">Il y a 25 minutes</p>
                    </div>
                    <div class="border-l-4 border-blue-500 pl-4 py-2">
                        <p class="text-sm text-gray-600">Dr. Johnson marqué comme indisponible</p>
                        <p class="text-xs text-gray-500">Il y a 1 heure</p>
                    </div>
                </div>
            </div>

            <!-- Section Estimations du Temps d'Attente -->
            <div>
                <h2 class="text-lg font-semibold mb-4">Estimations du Temps d'Attente</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="border rounded-lg p-4">
                        <label class="block text-sm font-medium text-gray-700">Service d'Urgence</label>
                        <div class="mt-2">
                            <input type="number" class="form-input rounded-md w-20" value="15">
                            <span class="ml-2 text-sm text-gray-500">minutes</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-6 bg-gray-50 flex justify-end">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700">
                Mettre à jour la Disponibilité
            </button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/hospital/availability.blade.php ENDPATH**/ ?>