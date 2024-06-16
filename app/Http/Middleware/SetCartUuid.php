<?php

namespace App\Http\Middleware;

use App\Models\Cart;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Str;


class SetCartUuid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->session()->get('cartId')) {
            return $next($request);
        }

        $uuid = Str::uuid()->toString();
        Cart::create(['id' => $uuid]);

        $request->session()->put('cartId', $uuid);

        return $next($request);
    }
}
