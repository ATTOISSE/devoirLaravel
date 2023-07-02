<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/log', function () {
    return view('log');
});

Route::get('/', function () {
    return view('accueile');
});

Route::get('/updatepassword', function () {
    return view('medecins.updatepassword');
});

Route::resource('admins', AdminsController::class);
Route::resource('vaccins', VaccinsController::class);
Route::resource('medecins', MedecinsController::class);
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/choixvaccin', [VaccinationController::class, 'store']);
Route::get('/choixvaccin', [VaccinationController::class, 'vuchoix']);
Route::post('/addmedecin',  [MedecinController::class, 'addmedecin']);
Route::post('/registerpatient',  [registerController::class, 'addPatient'])->name('patient');
Route::get('dashbord',[DashBordController::class,'index'])->name('dashbord');
Route::post('/logoute',[RegisterController::class, 'logout'])->name('logout');
Route::get('/registerpatient',  [registerController::class, 'register'])->name('vu');
Route::get('/mede', [MedecinController::class, 'homemedecin'])->middleware('checkUserRoleMedecin');
Route::get('/listepatient', [MedecinController::class, 'listepatient'])->middleware('checkUserRoleMedecin');
Route::get('/carnet', [CarnetController::class, 'vucarnet'])->name('carnet')->middleware('checkUserRolePatient');
Route::post('/updateDoctorPassword',[MedecinController::class,'updateDoctorPassword'])->name('updateDoctorPassword');
Route::put('/vaccination/{id}/confirmer',[MedecinController::class,'confirmerVaccination'])->name('confirmerVaccination');
Route::get('/carnet/{patient}', [MedecinController::class, 'show'])->name('carnet.show')->middleware('checkUserRoleMedecin');
route::get('/listevaccination', [VaccinationController::class, 'liste'])->middleware('checkUserRoleMedecin');Route::resource('medecins', MedecinsController::class);