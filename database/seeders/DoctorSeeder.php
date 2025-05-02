<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Specialty;
use App\Models\Hospital;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        // Create the hospital
        $hospital = Hospital::firstOrCreate([
            'name' => 'Hôpital Principal Dakar'
        ], [
            'address' => 'Dakar, Senegal',
            'phone' => '+221 33 123 4567'
        ]);

        // Create specialties
        $cardio = Specialty::firstOrCreate(['name' => 'Cardiologie']);
        $neuro = Specialty::firstOrCreate(['name' => 'Neurologie']);
        $pedia = Specialty::firstOrCreate(['name' => 'Pédiatrie']);
        $ortho = Specialty::firstOrCreate(['name' => 'Orthopédie']);
        $general = Specialty::firstOrCreate(['name' => 'Generaliste']);

        // Create doctors
        Doctor::create([
            'name' => 'Aissatou Diop',
            'email' => 'adiop@samasante.sn',
            'phone' => '+221 77 123 4567',
            'specialty_id' => $cardio->id,
            'hospital_id' => $hospital->id
        ]);
        Doctor::create([
            'name' => 'Mamadou Ba',
            'email' => 'mba@samasante.sn',
            'phone' => '+221 77 234 5678',
            'specialty_id' => $neuro->id,
            'hospital_id' => $hospital->id
        ]);
        Doctor::create([
            'name' => 'Fatou Ndiaye',
            'email' => 'fndiaye@samasante.sn',
            'phone' => '+221 77 345 6789',
            'specialty_id' => $pedia->id,
            'hospital_id' => $hospital->id
        ]);
        Doctor::create([
            'name' => 'Oumar Ndiaye',
            'email' => 'ondiaye@samasante.sn',
            'phone' => '+221 77 456 7890',
            'specialty_id' => $ortho->id,
            'hospital_id' => $hospital->id
        ]);
        Doctor::create([
            'name' => 'Khadija Sow',
            'email' => 'ksow@samasante.sn',
            'phone' => '+221 77 567 8901',
            'specialty_id' => $general->id,
            'hospital_id' => $hospital->id
        ]);
    }
}