<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EditorAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if( Auth::check() )
        {
            /** @var User $user */
            $user = Auth::user();

            // allow Viewer to proceed with request
            if ( $user->hasRole('Editor') ) {
                return $next($request);
            }
            else{
                abort(403);  // permission denied error
            }
        }

        abort(403);  // permission denied error
    }
}
