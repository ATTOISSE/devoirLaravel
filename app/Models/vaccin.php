<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccin extends Model
{
    use HasFactory;
    public function carnets()
    {
        return $this->hasMany(Carnet::class);
    }
}
