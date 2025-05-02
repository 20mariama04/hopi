<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmergencyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HospitalAdminController;
use App\Http\Controllers\Admin\AdminEmergencyController;
use App\Http\Controllers\DoctorController; // Ensure the controller is imported
use App\Http\Controllers\MedicalRecordsController; // Add this line

// Common Routes
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/personnel-medical', function () {
    return view('hospital.role-selection');
})->name('hospital.role-selection');
Route::get('/test-log', function () {
    \Log::info('Test log message');
    return 'Check your logs';
});

// Emergency Routes
Route::get('/emergency', function () {
    return view('hospital.dashboard'); // Updated view path
})->name('emergency.page');
Route::post('/emergency/request', [HomeController::class, 'emergencyRequest'])->name('emergency.request');
Route::get('/emergency/hospital/{id}', [HomeController::class, 'emergencyHospital'])->name('emergency.hospital');
Route::get('/emergency/form', [EmergencyController::class, 'showEmergencyForm']);
Route::post('/emergency/describe', [EmergencyController::class, 'storeDescription'])->name('emergency.describe');

// Emergency assignment routes (only POST)
Route::prefix('emergencies')->name('emergencies.')->group(function() {
    // Route::post('{id}/assign', [EmergencyController::class, 'assign'])->name('assign');
});

// Patient Routes
Route::prefix('patient')->name('patient.')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'patientDashboard'])->name('dashboard');
    Route::get('/find-hospital', [HomeController::class, 'findHospital'])->name('find-hospital');
    Route::get('/hospital/{id}', [HomeController::class, 'hospitalDetails'])->name('hospital-details');

    // Corrected route path
    Route::get('/emergency', [EmergencyController::class, 'show'])->name('emergency.show');
    Route::get('/emergency-confirmation', [PatientController::class, 'showEmergencyConfirmation'])->name('emergency-confirmation');

    // Appointments
    Route::get('/appointments', [PatientController::class, 'appointments'])->name('appointments');
    Route::get('/appointments/create', [HomeController::class, 'appointmentsCreate'])->name('appointments.create');
    Route::post('/appointments', [HomeController::class, 'appointmentsStore'])->name('appointments.store');

    // Medical Records
    Route::get('/medical-records', [PatientController::class, 'medicalRecords'])->name('medical-records');
    Route::post('/medical-records/upload', [PatientController::class, 'uploadMedicalFile'])->name('medical-records.upload');

    // Profile
    Route::get('/profile', function () {
        return view('patient.profile');
    })->name('profile');
});

// Hospital Staff Routes
Route::prefix('hospital')->name('hospital.')->group(function() {
    Route::get('/dashboard', [HospitalController::class, 'dashboard'])->name('dashboard');
    Route::get('/availability', [HospitalController::class, 'availability'])->name('availability'); // Ensure this route uses the controller method
    Route::get('/emergency-requests', [HospitalController::class, 'emergencyRequests'])->name('emergency-requests');
    Route::get('/appointments', function () {
        return view('hospital.admin-appointments');
    })->name('appointments');
    Route::get('/notifications', [HospitalController::class, 'notifications'])->name('notifications');
    Route::get('/{hospital}/doctors', [HospitalController::class, 'showDoctors'])->name('show-doctors');
    // FIXED: Remove redundant 'hospital/' from the path below
    Route::get('/admin-dashboard', [HospitalController::class, 'adminDashboard'])
        ->name('admin-dashboard'); // Remove 'hospital.' prefix since it's already in the group
});

// Doctor Routes
Route::prefix('doctors')->name('doctor.')->group(function () {
    Route::get('/{id}/dashboard', [DoctorController::class, 'dashboard'])->name('dashboard'); // Define the dashboard route
    Route::get('/profile', [DoctorController::class, 'profile'])->name('profile'); // Ensure this route uses the controller method
});

// Admin Superadmin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [HospitalAdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/emergencies', [AdminEmergencyController::class, 'index'])->name('emergencies.index');
    Route::get('/debug-doctors', function() {
        return [
            'count' => \App\Models\Doctor::count(),
            'doctors' => \App\Models\Doctor::with(['specialty', 'hospital'])->limit(5)->get()->toArray()
        ];
    });
    Route::get('/admin/emergencies', [EmergencyController::class, 'getEmergencies'])->name('admin.emergencies');
    Route::post('/emergency/{id}/resolve', [EmergencyController::class, 'resolveEmergency'])->name('emergency.resolve');
});

// Remove the duplicate use statement for HospitalController
// use App\Http\Controllers\HospitalController;

// Define the route for assigning emergencies
Route::post('/emergencies/assign/{id}', [HospitalController::class, 'assignEmergency'])->name('emergencies.assign');

Route::get('/emergency-confirmation', [HospitalController::class, 'emergencyConfirmation'])->name('emergency-confirmation');

Route::get('/full-records-page', [MedicalRecordsController::class, 'index'])->name('full-records-page');

