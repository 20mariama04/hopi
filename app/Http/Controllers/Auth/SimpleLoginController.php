<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SimpleLoginController extends Controller
{
    public function showLoginForm()
    {
        $users = DB::table('users')->select('name')->get();
        return view('auth.simple_login', ['users' => $users]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string',
            'role' => 'required|string'
        ]);

        $user = DB::table('users')
            ->where('name', $request->name)
            ->where('role', $request->role)
            ->first();

        if ($user && $request->password === $user->password) {
            session(['user' => $user]);
            
            if ($user->role === 'admin') {
                return redirect()->route('hospital.admin-dashboard');
            }
            elseif ($user->role === 'patient') {
                return redirect()->route('welcome');
            }
            elseif ($user->role === 'doctor') {
                return redirect()->route('doctor.dashboard');
            }
            
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'name' => 'Mot de passe incorrect'
        ]);
    }
}