public function doctor()
{
    return $this->belongsTo(Doctor::class);
}

public function hospital()
{
    return $this->belongsTo(Hospital::class);
}