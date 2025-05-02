<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function showEmergency()
    {
        // Static data example
        $emergency = (object)[
            'status' => 'Pending',
            'doctor_name' => 'Dr. Smith',
            'estimated_arrival_time' => '2023-10-15 10:00:00',
        ];

        \Log::info('Emergency fetched:', [
            'status' => $emergency->status,
            'doctor' => $emergency->doctor_name,
            'eta' => $emergency->estimated_arrival_time,
        ]);

        return view('patient.emergency', [
            'emergencyStatus' => $emergency->status,
            'doctor' => $emergency->doctor_name,
            'eta' => $emergency->estimated_arrival_time,
        ]);
    }

    public function emergencyConfirmation()
    {
        // Logic for handling emergency confirmation
        return view('hospital.emergency-confirmation');
    }

    public function appointments()
    {
        // Static data example
        $upcomingAppointments = collect([
            (object)[
                'doctor' => (object)['name' => 'Dr. Smith', 'specialty' => 'Cardiology'],
                'hospital' => (object)['name' => 'General Hospital', 'address' => '123 Main St'],
                'date' => new \DateTime('2023-10-15'),
                'time' => '10:00 AM',
                'status' => 'confirmed'
            ],
            // Add more appointments as needed
        ]);

        $pastAppointments = collect([]); // Empty collection for past appointments

        $specialties = collect([]); // Empty collection for specialties
        $hospitals = collect([]); // Empty collection for hospitals
        $doctors = collect([]); // Empty collection for doctors

        return view('patient.appointments', compact(
            'upcomingAppointments',
            'pastAppointments',
            'specialties',
            'hospitals',
            'doctors'
        ));
    }
    
    public function medicalRecords()
    {
        return view('patient.medical-records');
    }

    public function showHospitals()
    {
        $hospitals = [
            [
                'name' => 'Central Hospital',
                'image' => 'images/hospital-cover.jpg',
                // Add other hospital info as needed
            ],
            [
                'name' => 'Westside Clinic',
                'image' => 'images/hospital-westside.jpg',
                // Add other hospital info as needed
            ],
            // Add more hospitals as needed
        ];

        return view('patient.hospital-details', compact('hospitals'));
    }

    public function uploadMedicalFile(Request $request)
    {
        $request->validate([
            'medical_file' => 'required|file|max:10240', // 10MB max, adjust as needed
        ]);

        $file = $request->file('medical_file');
        $path = $file->store('medical_uploads', 'public');

        // Save file info to DB if needed, e.g.:
        // \App\Models\MedicalUpload::create([
        //     'user_id' => auth()->id(),
        //     'original_name' => $file->getClientOriginalName(),
        //     'file_path' => $path,
        // ]);

        return redirect()->back()->with('success', 'Fichier téléchargé avec succès.');
    }
}