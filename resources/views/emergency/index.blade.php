<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <button id="triggerEmergency" class="bg-red-600 text-white px-4 py-2 rounded-md hover:bg-red-700">
                        Déclencher une urgence
                    </button>

                    <form id="emergencyForm" action="{{ route('emergency.store') }}" method="POST" class="mt-4 hidden">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="patient">
                                Patient
                            </label>
                            <select name="patient_id" id="patient" class="w-full border rounded px-3 py-2">
                                <option value="">Sélectionnez un patient</option>
                                @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                Description de l'urgence
                            </label>
                            <textarea name="description" id="description" rows="4" class="w-full border rounded px-3 py-2"></textarea>
                        </div>

                        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">
                            Soumettre
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('triggerEmergency').addEventListener('click', function() {
            document.getElementById('emergencyForm').classList.remove('hidden');
        });

        document.getElementById('patient').addEventListener('change', function() {
            const patientId = this.value;
            if (patientId) {
                fetch(`/emergency/patient-description/${patientId}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('description').value = data.description;
                    });
            }
        });
    </script>
</x-app-layout>