@extends('layouts.app')

@section('title', 'Mes dossiers médicaux')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="p-6 border-b">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
                <h1 class="text-2xl font-bold text-gray-900">Mes dossiers médicaux</h1>
                <div class="flex gap-2">
                    <form action="{{ route('patient.medical-records.upload') }}" method="POST" enctype="multipart/form-data" class="flex items-center">
                        @csrf
                        <label class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 cursor-pointer mr-2">
                            <input type="file" name="medical_file" class="hidden" onchange="this.form.submit()">
                            Télécharger un fichier
                        </label>
                    </form>
                    <button onclick="window.print()" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Télécharger tout
                    </button>
                </div>
            </div>
        </div>

        <!-- Medical History Tabs -->
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

        <!-- Records Content -->
        <div class="p-6">
            <!-- Consultations -->
            <div class="tab-content" id="consultations">
                <div class="space-y-6">
                    @foreach($consultations as $consultation)
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">{{ $consultation->title }}</h3>
                                <p class="text-sm text-gray-500">
                                    Dr. {{ $consultation->doctor_name == 'Coura Mariam Ba' : $consultation->doctor_name }} &bull; {{ $consultation->specialty }}
                                </p>
                                <p class="mt-2 text-gray-600"><span class="font-semibold">Diagnostic :</span> {{ $consultation->diagnosis }}</p>
                                <p class="text-gray-600"><span class="font-semibold">Notes :</span> {{ $consultation->notes }}</p>
                            </div>
                            <div class="text-right mt-2 md:mt-0">
                                <span class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($consultation->date)->format('d/m/Y') }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if($consultations->isEmpty())
                        <div class="text-gray-400 text-center py-8">Aucune consultation trouvée.</div>
                    @endif
                </div>
            </div>

            <!-- Prescriptions -->
            <div class="tab-content hidden" id="prescriptions">
                <div class="space-y-6">
                    @foreach($prescriptions as $prescription)
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ $prescription->medication_name }}</h3>
                            <p class="text-sm text-gray-500">
                                Dosage : {{ $prescription->dosage }} &bull; Fréquence : {{ $prescription->frequency }}
                            </p>
                            <p class="mt-2 text-gray-600"><span class="font-semibold">Statut :</span>
                                <span class="inline-block px-2 py-1 rounded-full text-xs {{ $prescription->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-gray-200 text-gray-600' }}">
                                    {{ $prescription->status === 'active' ? 'Active' : 'Expirée' }}
                                </span>
                            </p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="{{ route('patient.prescriptions.download', $prescription->id) }}" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @if($prescriptions->isEmpty())
                        <div class="text-gray-400 text-center py-8">Aucune ordonnance trouvée.</div>
                    @endif
                </div>
            </div>

            <!-- Lab Results -->
            <div class="tab-content hidden" id="labs">
                <div class="space-y-6">
                    @foreach($labResults as $lab)
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ $lab->test_name }}</h3>
                            <p class="text-sm text-gray-500">Résumé : {{ $lab->summary }}</p>
                            <p class="mt-2 text-gray-600"><span class="font-semibold">Date :</span> {{ \Carbon\Carbon::parse($lab->date)->format('d/m/Y') }}</p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="{{ route('patient.labs.download', $lab->id) }}" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger le rapport
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @if($labResults->isEmpty())
                        <div class="text-gray-400 text-center py-8">Aucun résultat de laboratoire trouvé.</div>
                    @endif
                </div>
            </div>

            <!-- Uploaded Files -->
            <div class="tab-content hidden" id="uploads">
                <div class="space-y-6">
                    @foreach($uploads as $file)
                    <div class="border rounded-lg p-4 bg-gray-50 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">{{ $file->original_name }}</h3>
                            <p class="text-sm text-gray-500">Ajouté le {{ \Carbon\Carbon::parse($file->created_at)->format('d/m/Y') }}</p>
                        </div>
                        <div class="flex flex-col gap-2 mt-2 md:mt-0">
                            <a href="{{ route('patient.uploads.download', $file->id) }}" class="bg-blue-100 text-blue-700 px-3 py-1 rounded hover:bg-blue-200 text-sm text-center">
                                Télécharger
                            </a>
                            <button onclick="shareFile('{{ $file->id }}')" class="bg-green-100 text-green-700 px-3 py-1 rounded hover:bg-green-200 text-sm text-center">
                                Partager
                            </button>
                        </div>
                    </div>
                    @endforeach
                    @if($uploads->isEmpty())
                        <div class="text-gray-400 text-center py-8">Aucun fichier téléchargé.</div>
                    @endif
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
        alert('Lien de partage généré pour le fichier ID: ' + fileId);
    }
</script>
@endsection