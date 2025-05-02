<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // Added role field
        'phone',
        'address'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // Add relationship for emergencies
    public function emergencies()
    {
        return $this->hasMany(Emergency::class);
    }

    // Add relationship for medical records
    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    // Add scope for doctors
    public function scopeDoctors($query)
    {
        return $query->where('role', 'doctor');
    }

    // Add scope for patients
    public function scopePatients($query)
    {
        return $query->where('role', 'patient');
    }
}
