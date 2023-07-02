<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccination extends Model
{
    use HasFactory;
    public function vaccin()
    {
        return $this->belongsTo(Vaccin::class);
    }

    // public function patient()
    // {
    //     return $this->belongsTo(Patient::class);
    // }

    public function medecin()
    {
        return $this->belongsTo(Medecin::class);
    }
    public function patient()
{
    return $this->belongsTo(Patient::class, 'patient_id');
}

}
