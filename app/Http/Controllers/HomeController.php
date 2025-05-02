<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Removed: use App\Models\Hospital;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function hospitalStaff()
    {
        return redirect()->route('hospital.dashboard');
    }
    
    public function emergencyHelp()
    {
        return redirect()->route('patient.emergency');
    }

    public function index()
    {
        return redirect()->route('patient.dashboard');
    }

    public function patientDashboard()
    {
        return view('patient.dashboard');
    }

    public function findHospital()
    {
        // Simulate hospital data
        $hospitals = [
            (object) [
                'id' => 1,
                'name' => 'Hôpital Central',
                'logo_url' => 'https://via.placeholder.com/80',
                'distance' => '2.5',
                'rating' => '4.5',
                'wait_time' => '15',
                'available_beds' => 8,
                'active_doctors' => 4,
                'specialties' => [
                    (object) ['name' => 'Cardiologie'],
                    (object) ['name' => 'Pédiatrie']
                ]
            ],
            // Add more simulated hospitals as needed
        ];

        return view('patient.find-hospital', compact('hospitals'));
    }

    public function hospitalDetails($id)
    {
        return view('patient.hospital-details', ['id' => $id]);
    }

    public function emergency()
    {
        return view('patient.emergency');
    }

    public function emergencyRequest(Request $request)
    {
        $location = $request->input('location');
        // Removed query: $hospital = Hospital::nearest($location)->first();
        
        // Removed notification: $hospital->notify(new EmergencyNotification($location));
        
        return response()->json([
            // Removed query results
        ]);
    }

    public function emergencyHospital($id)
    {
        // Removed query: $hospital = Hospital::findOrFail($id);
        return view('patient.emergency-hospital');
    }

    public function appointments()
    {
        return view('patient.appointments');
    }

    public function appointmentsCreate()
    {
        return view('patient.create-appointment');
    }

    public function appointmentsStore(Request $request)
    {
        // Handle appointment creation
        return redirect()->route('appointments.index');
    }
}