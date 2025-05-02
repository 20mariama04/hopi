<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function exampleMethod()
    {
        // Removed query
        // $data = \App\Models\ExampleModel::all();

        // Return view with static data or alternative logic
        return view('example.view', [
            // 'data' => $data, // Remove this line if data is not needed
            // Add static data or alternative logic here
        ]);
    }

    public function adminDashboard()
    {
        // Return view with static data or alternative logic
        return view('hospital.admin-dashboard', [
            // Add static data or alternative logic here
            'emergencies' => [], // Example static data
            'doctors' => [] // Example static data
        ]);
    }

    public function emergencyRequests()
    {
        // Updated list of doctors with simplified specialties
        $doctors = [
            [
                'id' => 1,
                'name' => 'Salif Mbaye',
                'specialty' => ['name' => 'Urgences cardio-respiratoires']
            ],
            [
                'id' => 2,
                'name' => 'Ndeye Sy',
                'specialty' => ['name' => 'Neurologie']
            ],
            [
                'id' => 3,
                'name' => 'Binta Camara',
                'specialty' => ['name' => 'Pédiatrie']
            ],
            [
                'id' => 4,
                'name' => 'Daouda Gueye',
                'specialty' => ['name' => 'Chirurgie orthopédique']
            ],
            [
                'id' => 5,
                'name' => 'Rokhaya Ndiaye',
                'specialty' => ['name' => 'Gastroentérologie']
            ],
            [
                'id' => 6,
                'name' => 'Malick Faye',
                'specialty' => ['name' => 'Chirurgie générale']
            ],
            [
                'id' => 7,
                'name' => 'Aissatou Fall',
                'specialty' => ['name' => 'Dermatologie']
            ],
            [
                'id' => 8,
                'name' => 'Lamine Sow',
                'specialty' => ['name' => 'Neurologie']
            ],
            [
                'id' => 9,
                'name' => 'Sokhna Thiam',
                'specialty' => ['name' => 'Cardiologie']
            ],
            [
                'id' => 10,
                'name' => 'El Hadji Kane',
                'specialty' => ['name' => 'Allergologie']
            ]
        ];

        // Updated list of emergencies with specified patients and descriptions
        return view('hospital.emergency-requests', [
            'emergencies' => [
                [
                    'id' => 1,
                    'patient' => 'Fatou Ndiaye',
                    'description' => 'Douleur thoracique soudaine et difficulté à respirer.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.69',
                    'doctor' => $doctors[0]
                ],
                [
                    'id' => 2,
                    'patient' => 'Mamadou Diop',
                    'description' => 'Perte de connaissance après une chute brutale.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.70',
                    'doctor' => $doctors[1]
                ],
                [
                    'id' => 3,
                    'patient' => 'Aminata Sow',
                    'description' => 'Fièvre très élevée accompagnée de convulsions.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.71',
                    'doctor' => $doctors[2]
                ],
                [
                    'id' => 4,
                    'patient' => 'Ibrahima Fall',
                    'description' => 'Blessure profonde à la jambe après un accident de moto.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.72',
                    'doctor' => $doctors[3]
                ],
                [
                    'id' => 5,
                    'patient' => 'Khadija Ba',
                    'description' => 'Vomissements persistants et douleurs abdominales aiguës.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.73',
                    'doctor' => $doctors[4]
                ],
                [
                    'id' => 6,
                    'patient' => 'Cheikh Sarr',
                    'description' => 'Coupure sévère au bras avec perte de sang importante.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.74',
                    'doctor' => $doctors[5]
                ],
                [
                    'id' => 7,
                    'patient' => 'Adama Diallo',
                    'description' => 'Brûlure au second degré causée par de l’huile chaude.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.75',
                    'doctor' => $doctors[6]
                ],
                [
                    'id' => 8,
                    'patient' => 'Mariama Kane',
                    'description' => 'Céphalées intenses et vision floue soudaines.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.76',
                    'doctor' => $doctors[7]
                ],
                [
                    'id' => 9,
                    'patient' => 'Ousmane Cissé',
                    'description' => 'Douleur thoracique suite à un effort physique intense.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.77',
                    'doctor' => $doctors[8]
                ],
                [
                    'id' => 10,
                    'patient' => 'Awa Gaye',
                    'description' => 'Réaction allergique sévère avec gonflement du visage.',
                    'status' => 'Pending',
                    'location' => 'Lat: 14.78',
                    'doctor' => $doctors[9]
                ]
            ],
            'doctors' => $doctors // Pass the doctors data to the view
        ]);
    }

    public function assignEmergency($id)
    {
        // Find the emergency by ID and update its status
        // This is a placeholder logic; replace it with actual database logic
        $emergency = collect([
            ['id' => 1, 'status' => 'Pending'],
            ['id' => 2, 'status' => 'Pending'],
            // ... other emergencies ...
        ])->firstWhere('id', $id);

        if ($emergency) {
            $emergency['status'] = 'Assigned'; // Update the status
            return response()->json(['success' => true, 'status' => $emergency['status']]);
        }

        return response()->json(['success' => false, 'message' => 'Emergency not found']);
    }

    public function emergencyConfirmation()
    {
        // Logic for handling emergency confirmation
        return view('hospital.emergency-confirmation');
    }

    public function dashboard()
    {
        // Logic for handling the hospital dashboard
        return view('hospital.dashboard');
    }

    public function availability()
    {
        // Logic to handle availability view
        return view('hospital.availability');
    }

    public function notifications()
    {
        // Logic to retrieve notifications data
        // For example, you might fetch notifications from a database
        $notifications = []; // Replace with actual data retrieval logic

        return view('hospital.notifications', compact('notifications'));
    }

    // Add other methods without database queries as needed
}