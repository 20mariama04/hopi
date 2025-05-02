<?php

namespace App\Http\Controllers\Hospital;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('hospital.admin-dashboard');
    }
}