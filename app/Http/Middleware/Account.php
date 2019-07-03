<?php

namespace kindergestion\Http\Middleware;

use Closure;
use kindergestion\School;
use Jenssegers\Date\Date;

class Account
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $account = School::where('id', auth()->user()->school_id)
            ->first();

        $diff = $account->created_at->diff(now())->days;

        if ($account->account == 'TEST' && $diff >= 30) {
            return abort(409);
        }

        return $next($request);
    }
}
