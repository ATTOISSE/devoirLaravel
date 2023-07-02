<?php

namespace App\Http\Middleware;
use App\Models\user;
use Closure;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class EnsureUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $role)
    {

        if (auth()->check() && auth()->user()->role==1) {
            return redirect('/admin');
        }

        return $next($request);
    }
//         if ($request->user()->role ==$role) {

//         return $next($request);

//     }
//     else{
//         abort(404);
//     }
// }
}
