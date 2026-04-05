<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class ClientBrandCustomization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Check for URL parameters and store in session if present
        if ($request->has('client_name')) {
            session(['cn_name' => $request->query('client_name')]);
        }
        
        if ($request->has('client_phone')) {
            session(['cn_phone' => $request->query('client_phone')]);
        }

        // 2. Retrieve values from session or fall back to Cynix Inc. details
        $cn_name = session('cn_name', 'Cynix Inc.');
        $cn_phone = session('cn_phone', '0725582444');
        
        // Static elements
        $cn_email = 'info.cynixinc@gmail.com';
        $cn_address = '267, Jampettah Street, Colombo 13';

        // 3. Share with all views dynamically
        View::share('cn_name', $cn_name);
        View::share('cn_phone', $cn_phone);
        View::share('cn_email', $cn_email);
        View::share('cn_address', $cn_address);

        return $next($request);
    }
}
