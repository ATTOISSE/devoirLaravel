<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medecin extends Model
{
    use HasFactory;
    use HasFactory;
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function vaccinations()
    {
        return $this->hasMany(Vaccination::class);
    }

    public function carnet()
    {
        return $this->hasOne(Carnet::class);
    }
    public function patients()
    {
        return $this->hasMany(Patient::class, 'id_medecin');
    }
    public function user()
    {
    return $this->belongsTo(User::class);
    }

    }