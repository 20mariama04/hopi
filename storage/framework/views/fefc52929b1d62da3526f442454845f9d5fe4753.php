

<?php $__env->startSection('title', 'Gestion des Rendez-vous'); ?>

<?php $__env->startSection('content'); ?>
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-white py-8">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Page Title -->
        <h1 class="text-3xl font-extrabold text-blue-900 mb-8 flex items-center justify-center gap-3">
            <span class="text-4xl">📅</span> Gestion des Rendez-vous
        </h1>

        <!-- Summary Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            <div class="bg-white rounded-lg shadow flex items-center gap-3 p-4 border border-blue-100">
                <span class="text-2xl">📆</span>
                <span class="text-lg font-bold text-blue-900">Aujourd'hui : 12</span>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center gap-3 p-4 border border-red-100">
                <span class="text-2xl">❌</span>
                <span class="text-lg font-bold text-red-700">Absences : 1</span>
            </div>
            <div class="bg-white rounded-lg shadow flex items-center gap-3 p-4 border border-yellow-100">
                <span class="text-2xl">🕐</span>
                <span class="text-lg font-bold text-yellow-700">À venir (1h) : 3</span>
            </div>
        </div>

        <!-- Filters -->
        <form class="flex flex-col md:flex-row md:items-center gap-4 mb-6 bg-white p-4 rounded-xl shadow border border-blue-100">
            <div class="flex flex-col sm:flex-row gap-4 flex-1">
                <input type="date" class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400" placeholder="Date début">
                <input type="date" class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400" placeholder="Date fin">
                <select class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400">
                    <option>▼ Médecin</option>
                    <option>Dr. Aissatou Diop</option>
                    <option>Dr. Mamadou Ba</option>
                </select>
                <select class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400">
                    <option>▼ Spécialité</option>
                    <option>Cardiologie</option>
                    <option>Pédiatrie</option>
                </select>
                <select class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400">
                    <option>▼ Statut</option>
                    <option>Confirmé</option>
                    <option>En attente</option>
                    <option>Annulé</option>
                </select>
            </div>
            <div class="flex gap-2">
                <input type="text" class="border border-gray-300 rounded px-3 py-2 focus:outline-blue-400" placeholder="Recherche...">
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center gap-1">
                    🔍 <span class="hidden sm:inline">Rechercher</span>
                </button>
            </div>
        </form>

        <!-- Appointments Table -->
        <div class="overflow-x-auto bg-white rounded-xl shadow border border-blue-100">
            <table class="min-w-full divide-y divide-blue-100">
                <thead class="bg-blue-100">
                    <tr>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">👤 Patient</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">🩺 Médecin</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">🏥 Département</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">📆 Date & Heure</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">✅ Statut</th>
                        <th class="px-4 py-3 text-left text-xs font-semibold text-blue-900 uppercase">⚙️ Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-blue-50">
                    <tr>
                        <td class="px-4 py-3">Fatou Ndiaye</td>
                        <td class="px-4 py-3">Dr. Aissatou Diop</td>
                        <td class="px-4 py-3">Cardiologie</td>
                        <td class="px-4 py-3">18 Avril, 14h00</td>
                        <td class="px-4 py-3">
                            <span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">Confirmé</span>
                        </td>
                        <td class="px-4 py-3 flex flex-wrap gap-2">
                            <button class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-xs">Voir</button>
                            <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded hover:bg-yellow-200 text-xs flex items-center gap-1">✏️ Modifier</button>
                            <button class="bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200 text-xs flex items-center gap-1">❌ Annuler</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-4 py-3">Mamadou Sarr</td>
                        <td class="px-4 py-3">Dr. Mamadou Ba</td>
                        <td class="px-4 py-3">Pédiatrie</td>
                        <td class="px-4 py-3">18 Avril, 15h30</td>
                        <td class="px-4 py-3">
                            <span class="bg-yellow-100 text-yellow-700 px-2 py-1 rounded text-xs font-semibold">En attente</span>
                        </td>
                        <td class="px-4 py-3 flex flex-wrap gap-2">
                            <button class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-xs">Voir</button>
                            <button class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded hover:bg-yellow-200 text-xs flex items-center gap-1">✏️ Modifier</button>
                            <button class="bg-red-100 text-red-700 px-3 py-1 rounded hover:bg-red-200 text-xs flex items-center gap-1">❌ Annuler</button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>

        <!-- Notices -->
        <div class="mt-6 space-y-2">
            <div class="bg-yellow-50 border-l-4 border-yellow-400 text-yellow-800 p-4 rounded flex items-center gap-2">
                ⚠️ <span>Attention : Rendez-vous qui se chevauchent pour Dr. Ba à 15h30 et 16h00</span>
            </div>
            <div class="bg-blue-50 border-l-4 border-blue-400 text-blue-800 p-4 rounded flex items-center gap-2">
                🛠️ <span>Note : Maintenance du système prévue le 22 Avril à 3h00</span>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP 1030 G3\Documents\project2025\hospital\resources\views/hospital/admin-appointments.blade.php ENDPATH**/ ?>