<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Emergency;

class AdminEmergencyController extends Controller
{
    public function index()
    {
        $emergencies = Emergency::latest()->get();
        
        return view('admin.emergencies.index', compact('emergencies'));
    }
}
