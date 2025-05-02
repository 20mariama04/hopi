<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Notifications\EmergencyNotification;

class Hospital extends Model
{
    public function scopeNearest($query, $location)
    {
        return $query->orderByRaw(
            "ST_Distance_Sphere(point(longitude, latitude), point(?, ?))",
            [$location['longitude'], $location['latitude']]
        );
    }

    public function availableBeds()
    {
        return $this->total_beds - $this->occupied_beds;
    }

    public function hasSpecialist($specialty)
    {
        return $this->doctors()->whereHas('specialties', function($q) use ($specialty) {
            $q->where('name', $specialty);
        })->exists();
    }
    public function doctors(): HasMany
    {
        return $this->hasMany(Doctor::class);
    }
}