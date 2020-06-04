<?php

namespace App\Http\Middleware;

use App\Models\Admin\Sitevars;
use Closure;
use App\Models\Admin\Permissions;
use Illuminate\Support\Facades\Auth;
use Flash;
use View;


class CustomerChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $role = $request->user()->permission;
        if($role == 0){
            return redirect()->route('no-permission');
        } else {
            return $next($request);
        }


    }
}
