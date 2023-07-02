<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\VaccinationConfirmation;

use App\Models\medecin;
use App\Models\user;
use App\Models\vaccination;
use App\Models\vaccin;

use App\Models\patient;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class MedecinController extends Controller
{
    public function homemedecin(){
        $connectedMedecin = Auth::user()->medecin;

    if ($connectedMedecin) {
        $vaccinations = $connectedMedecin->vaccinations()->where('status', 0)->get();
    }
    else
    $vaccinations=0;
        return view('medecin',compact('vaccinations'));
      }
      public function addmedecin(Request $request)
{
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $email = $request->input('email');
    //$nomcentre = $request->input('nomcentre');
    $modepasse = $request->input('motdepasse');
    $telephone = $request->input('telephone');
    //$datenaissance = $request->input('datenaissance');

    $medecin = new Medecin();
    $user= new User();
    $user->name = $nom;

    $user->email = $email;
    $user->password = bcrypt($modepasse);
    $user->role = "medecin";
    $medecin->nom = $nom;
    $medecin->prenom = $prenom;
    $medecin->email = $email;
    // $medecin->modepasse = $modepasse;
    $medecin->telephone = $telephone;
    //$medecin-> nomcentre= $nomcentre;
    //$medecin->datenaissance = $datenaissance;


    // Enregistrer le medecin dans la base de données
    $user->save();
    $medecin->user_id = $user->id;
    $medecin->save();

    // Redirection vers une autre page ou affichage d'un message de succès
    return redirect()->route('home')->with('success', 'medecin ajouté avec succès');
}


      public function enregistrer(Request $request){

        $medecin= new medecin();
        request()->validate([
        //   'datedebut'=>'required|date|after:yesterday',
        //   'datefin'=>'required|date|after:datedebut',
      ]);

    $medecin->save();
        return redirect('')
                ->with('message', 'enregistrement avec Succee!');
    }


    public function destroy(Request $request)
      {
        $medecin=medecin::findOrFail($request->idab);

        $medecin->delete();

        return redirect('seancemensuel');
      }

    public function update(Request $request,$id)
      {
        $medecin= medecin::find($id);

        $medecin->update();
        return redirect('');
      }


      public function listepatient()
{
        $connectedDoctor = Auth::user()->medecin->id;
        $patients = Patient::where('medecin_id', $connectedDoctor)->get();
        // $vaccin =Vaccin::all();
        // $medecin =medecin::all();
        return view('listepatient',compact('patients'));
}
public function confirmerVaccination($id)
{
    $vaccination = Vaccination::findOrFail($id);
    $vaccination->status = 1;
    $vaccination->save();
    //Mail::send(new VaccinationConfirmation($data));
   // Mail::to($vaccination->patient->email)->send(new VaccinationConfirmation($vaccination));
    return redirect('mede')->with('success', 'Statut de la vaccination mis à jour avec succès');
}

public function show(Patient $patient)
{
    // Récupérer les vaccinations du patient
    $vaccinations = $patient->vaccinations()->where('status', 1)->get();;
    return view('carnet', compact('vaccinations'));
}

public function updateDoctorPassword(Request $request)
{
    // Valider les données de formulaire

    // Mettre à jour le mot de passe du médecin
    $user = Auth::user();
    $user->password = bcrypt($request->new_password);
    User::where('id', $user->id)
        ->update([
            'password' => $user->password,
            'first_login' => false
        ]);
    // Rediriger le médecin vers une page appropriée
    return redirect()->route('/dashbord')->with('success', 'Votre mot de passe a été mis à jour.');
}


}