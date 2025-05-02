<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('user_id', $request->input('user_id'))
            ->where('password', $request->input('password'))
            ->first();

        if ($user) {
            // Login successful - store user in session
            session(['user' => $user]);
            return redirect('/dashboard');
        }

        // Login failed
        return back()->withErrors(['login' => 'Invalid credentials']);
    }
}
