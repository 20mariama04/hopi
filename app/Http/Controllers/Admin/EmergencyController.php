<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Emergency;
use App\Models\Doctor;
use App\Models\Location;
use Illuminate\Http\Request;

class EmergencyController extends Controller
{
    public function index()
    {
        $emergencies = Emergency::with(['patient', 'location', 'doctor'])
                     ->orderBy('created_at', 'desc')
                     ->get();
        
        return view('admin.emergencies.index', compact('emergencies'));
    }

    public function edit(Emergency $emergency)
    {
        $doctors = Doctor::all();
        $statuses = ['En attente', 'En cours', 'Traité'];
        
        return view('admin.emergencies.edit', compact('emergency', 'doctors', 'statuses'));
    }

    public function update(Request $request, Emergency $emergency)
    {
        $validated = $request->validate([
            'doctor_id' => 'nullable|exists:doctors,id',
            'status' => 'required|in:En attente,En cours,Traité'
        ]);

        $emergency->update($validated);
        
        return redirect()->route('admin.emergencies.index')
               ->with('success', 'Urgence mise à jour avec succès');
    }
}