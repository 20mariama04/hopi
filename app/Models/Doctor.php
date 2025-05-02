<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name', 'specialty_id', 'hospital_id'];

    public function specialty()
    {
        return $this->belongsTo(Specialty::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
