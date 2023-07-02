<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}
public function vaccinations()
{
    return $this->hasMany(Vaccination::class, 'patient_id');
}


}
