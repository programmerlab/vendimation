<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 
use Hash;
use App\User;
use App\Admin;
use Request;
use Session;

class RedirectIfNotAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    protected $redirectTo = 'admin';
    protected $guard = 'admin';

    public function handle($request, Closure $next, $guard = 'web')
    {   
        if (!Auth::guard($guard)->check() && !Auth::guard('admin')->check() ) {
            $request->session()->flush();
            return redirect('admin/login');
        }

        $user= Auth::guard($guard)->user();

        if($user && $user->step<5){ 
            $step = $user->step;
             $request->session()->put('user_id', $user->id);
            return redirect('admin/signup/step_'.$step); 
        }

        return $next($request);
    }
}