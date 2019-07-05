<?php

namespace kindergestion\Http\Middleware;

use Closure;
use kindergestion\User;
use Illuminate\Support\Facades\Auth;

class UserType
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
        $userType = User::where('id', Auth::user()->id)
            ->first();

        /* if($userType->user_type === 'TUTOR'){

             return redirect('/tutor/home');
         }
         elseif($userType->user_type === 'ROOT') {
             return redirect('/root/home');
         }
         else{
             return $next($request);
         }*/
        switch($userType) {
            case $userType->user_type === 'TUTOR':
                return view('/tutor/home');
                break;
            case $userType->user_type === 'ADMIN':
                return '/school/home';
                break;
            case $userType->user_type === 'ROOT':
                return redirect()->route('root.home');
                break;
        }

    }
}
