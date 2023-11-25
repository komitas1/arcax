<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if(  Auth::user()->role == User::ADMIN ){
            return $next($request);
        }else{
            abort(403);
        }
    }
}
