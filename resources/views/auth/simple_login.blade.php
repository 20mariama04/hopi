@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <div class="flex justify-center">
            <svg class="h-16 w-16 text-blue-600" viewBox="0 0 48 48" fill="none">
                <circle cx="24" cy="24" r="22" fill="#E0F7FA"/>
                <path d="M24 36c-5.5-4.5-10-8.2-10-13C14 18 20 18 24 23c4-5 10-5 10 0 0 4.8-4.5 8.5-10 13z" fill="#38BDF8"/>
                <rect x="21" y="20" width="6" height="12" rx="2" fill="#fff"/>
                <rect x="18" y="23" width="12" height="6" rx="2" fill="#fff"/>
            </svg>
        </div>
        <h2 class="mt-6 text-center text-3xl font-bold text-gray-900">
            Hospital System Login
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-6 shadow-lg rounded-xl">
            <form class="space-y-6" action="{{ route('login.post') }}" method="POST">
                @csrf
                <input type="hidden" name="redirect_to" id="redirectTo" value="{{ route('welcome') }}">

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input name="name" type="text" required 
                           class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                    <select name="role" id="roleSelect" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200">
                        <option value="admin">Admin</option>
                        <option value="doctor">Doctor</option>
                        <option value="patient" selected>Patient</option>
                        <option value="hospital">Hospital Staff</option>
                    </select>
                </div>

                <div id="patientOptions" style="display: none;">
                    <div class="flex space-x-4 mt-4">
                        <a href="{{ route('emergency') }}" class="w-full flex justify-center items-center py-3 px-6 border border-transparent rounded-lg shadow-md text-sm font-bold text-white bg-red-600 hover:bg-red-700 transition duration-150 ease-in-out transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                            </svg>
                            Aide d'urgence
                        </a>
                        <button type="button" id="regularPatientBtn" class="w-full flex justify-center items-center py-3 px-6 border border-transparent rounded-lg shadow-md text-sm font-bold text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                            Je suis patient
                        </button>
                    </div>
                </div>

                <div id="password-field" style="display: block;">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" name="password" type="password" required 
                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <div id="login-btn" style="display: none;">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const roleSelect = document.getElementById('roleSelect');
        const redirectTo = document.getElementById('redirectTo');
        
        if (roleSelect) {
            roleSelect.addEventListener('change', function() {
                if (this.value === 'patient') {
                    redirectTo.value = "{{ route('welcome') }}";
                } else if (this.value === 'doctor') {
                    redirectTo.value = "{{ route('doctor.dashboard') }}";
                } else {
                    redirectTo.value = "{{ url('/') }}";
                }
            });

            roleSelect.dispatchEvent(new Event('change'));
        }
    });
</script>
