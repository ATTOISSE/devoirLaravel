<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Vaccin;
use App\Http\Requests\VaccinRequest;

class VaccinsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $vaccins= Vaccin::all();
        return view('vaccins.index', ['vaccins'=>$vaccins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('vaccins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  VaccinRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(VaccinRequest $request)
    {
        $vaccin = new Vaccin;
		$vaccin->dose = $request->input('dose');
		$vaccin->lot = $request->input('lot');
		$vaccin->nom = $request->input('nom');
		$vaccin->dateCreation = $request->input('dateCreation');
		$vaccin->dateExpiration = $request->input('dateExpiration');
        $vaccin->save();

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
        $vaccin = Vaccin::findOrFail($id);
        return view('vaccins.show',['vaccin'=>$vaccin]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $vaccin = Vaccin::findOrFail($id);
        return view('vaccins.edit',['vaccin'=>$vaccin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  VaccinRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(VaccinRequest $request, $id)
    {
        $vaccin = Vaccin::findOrFail($id);
		$vaccin->dose = $request->input('dose');
		$vaccin->lot = $request->input('lot');
		$vaccin->nom = $request->input('nom');
		$vaccin->dateCreation = $request->input('dateCreation');
        $vaccin->save();

        return to_route('dashbord');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $vaccin = Vaccin::findOrFail($id);
        $vaccin->delete();

        return to_route('dashbord');
    }
}