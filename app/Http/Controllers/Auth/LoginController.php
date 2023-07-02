<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\medecin;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Request;
//use Illuminate\Http\Request;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


//     protected function authenticated(Request $request, $user)
// {
//     if ($user->role=="patient") {
//         return redirect('/accueil');
// // } else
// //      if ($user->role=="medecin") {
// //         return redirect('/accueil');
// //      } else{
// //         return redirect('/carnet');
//     }
// }


protected function authenticated(Request $request, $user)
{
    if ($user->role == "patient") {
        return redirect('/');
    } else if ($user->role == "medecin") {
        $medecin = User::find($user->id);
        if ($medecin->first_login == 1) {
            return redirect('/updatepassword');
        }
        else {   
            return redirect('/');
        }
    } else if($user->role == "admin") {
        return redirect('/dashbord');
    }
    else {
        return back()->withErrors([
            'login' => 'Identifiant ou mot de passe incorrect.',
        ]);
    }
}


}