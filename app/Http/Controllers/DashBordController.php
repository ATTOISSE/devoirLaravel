<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Vaccin;
use Illuminate\Support\Facades\DB;

class DashBordController extends Controller
{
    public function index()
    {
       
        $sexes = DB::select(DB::raw('select count(*) as total, sexe from patients group by sexe'));
        $chaine_sexe = "";
        foreach ($sexes as $key) {
            $chaine_sexe .= "['" . $key->sexe . "', " . $key->total . "],";
        }
        $nombre_doctor = DB::table('medecins')->count();
        $nombre_vaccin = DB::table('vaccins')->count();
        $nombre_vaccination = DB::table('vaccinations')->count();
        $nombre_patient = DB::table('patients')->count();
        $medecins = Medecin::all();
        $vaccins = Vaccin::all();
        return view(
            'admins.dashbord',
            [
                'nombre_doctor' => $nombre_doctor,
                'nombre_vaccin' => $nombre_vaccin,
                'nombre_patient' => $nombre_patient,
                'medecins' => $medecins,
                'vaccins' => $vaccins,
                'chaine_sexe' => $chaine_sexe,
                'nombre_vaccination' => $nombre_vaccination
            ]
        );
    }
}