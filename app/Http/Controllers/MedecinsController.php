<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Medecin;
use App\Http\Requests\MedecinRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class MedecinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $medecins = Medecin::all();
        return view('medecins.index', ['medecins' => $medecins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('medecins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MedecinRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MedecinRequest $request)
    {
        $user = new User();
        $medecin = new Medecin;
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->email = $request->input('email');
        $medecin->telephone = $request->input('telephone');
        $user->role = 'medecin';
        $user->email = $medecin->email;
        $user->name = $medecin->nom . ' ' . $medecin->prenom;
        $user->password = bcrypt('passer123');
        $user->save();
        $use= User::find($user->id);
        $medecin->user_id = $use->id;
        $medecin->save();
        return to_route('dashbord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $medecin = Medecin::findOrFail($id);
        return view('medecins.show', ['medecin' => $medecin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $medecin = Medecin::findOrFail($id);
        return view('medecins.edit', ['medecin' => $medecin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MedecinRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MedecinRequest $request, $id)
    {
        $medecin = Medecin::findOrFail($id);
        $medecin->nom = $request->input('nom');
        $medecin->prenom = $request->input('prenom');
        $medecin->email = $request->input('email');
        $medecin->telephone = $request->input('telephone');
        $medecin->save();

        return to_route('medecins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $medecin = Medecin::findOrFail($id);
        $medecin->delete();

        return to_route('dashbord');
    }
}