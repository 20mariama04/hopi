<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalAdminController extends Controller
{
    public function dashboard()
    {
        // Return the admin dashboard view
        return view('hospital.admin-dashboard');
    }
}