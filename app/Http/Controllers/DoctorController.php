<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function profile()
    {
        // Return the doctor profile view
        return view('doctor.profile');
    }

    public function dashboard($id)
    {
        // Logic to retrieve doctor data based on $id
        return view('doctor.dashboard');
    }

    public function showDetailedRecord($id)
    {
        // Fetch the detailed record data based on the ID
        // For now, return the view directly
        return view('doctor.detailed_medical_record');
    }
}