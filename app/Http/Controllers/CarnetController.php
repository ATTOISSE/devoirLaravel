<?php

namespace App\Http\Controllers;

use App\Models\carnet;
use App\Models\vaccination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CarnetController extends Controller
{
    public function vucarnet(){
    $connectedPatient = Auth::user()->patient;

    if ($connectedPatient) {
        $vaccinations = $connectedPatient->vaccinations()->where('status', 1)->get();
        //dd($vaccinations);
     }
     else
     $vaccinations=0;
        return view('carnet',compact('vaccinations'));
    }


}
