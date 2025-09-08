<?php

namespace App\Http\Middleware;
use Auth;
use Carbon\Carbon;

use App\Models\User;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UpdateLastActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check()) {
        //     Auth::user()->last_active_at = Carbon::now();
        //     Auth::user()->save();
        // }
        User::where('id', Auth::user()->id)->update(['last_active_at'=> now()]);
        return $next($request);
    }
}
