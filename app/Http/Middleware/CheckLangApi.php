<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class CheckLangApi extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function handel(Request $request ,Closure $next): ?string
    {
        if($request->hasHeader("CheckLangApi")){
            app()->setLocale( $request->header("CheckLangApi"));   
        }
        return $next($request);
    }
}
