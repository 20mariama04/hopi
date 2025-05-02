<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emergency extends Model
{
    protected $table = 'emergency';

    protected $fillable = [
        'patient_id',
        'description',
        'status',
        'location_id',
        'hospital_id',
        'doctor_id'
    ];
}
