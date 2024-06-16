<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Session\Session;


class SetCartUuid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
//        if($request->hasSession('cartUuid')) {
//            return $next($request);
//        }

        $uuid = Str::uuid()->toString();
        session()->put('cartuuid', 'test');

        return $next($request);
    }
}
