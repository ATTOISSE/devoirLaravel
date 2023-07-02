<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

	protected $guaarded = [];

	public function users()
	{
		return $this->belongsToMany('App\Models\User');
	}
}